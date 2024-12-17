<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ForgotPassword extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('auth');
        $this->load->library('email');
    }

    public function index()
    {
        $this->template->load('layout_landing', 'forgot_password'); // Tampilan form untuk memasukkan email
    }

    public function request_reset()
    {
        $email = $this->input->post('email');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                // Generate token unik
                $token = bin2hex(random_bytes(32));
                $reset_link = base_url('forgotpassword/reset_password_form?token=' . $token);

                // Simpan token ke database dengan waktu kedaluwarsa (misalnya, 1 jam)
                $this->db->update('user', [
                    'reset_token' => $token,
                    'token_expiry' => date('Y-m-d H:i:s', strtotime('+1 hour'))
                ], ['email' => $email]);

                // Kirim email
                $this->email->from('your_email@gmail.com', 'Sido Rabi Wedding');
                $this->email->to($email);
                $this->email->subject('Password Reset Request');
                $this->email->message("Klik link berikut untuk mereset password Anda: $reset_link");

                if ($this->email->send()) {
                    $this->session->set_flashdata('success', 'Link reset password telah dikirim ke email Anda.');
                } else {
                    $this->session->set_flashdata('error', 'Gagal mengirim email. Silakan coba lagi.');
                }
            } else {
                $this->session->set_flashdata('error', 'Akun Anda belum diaktifkan.');
            }
        } else {
            $this->session->set_flashdata('error', 'Email tidak terdaftar.');
        }

        redirect('forgotpassword');
    }

    public function reset_password_form()
    {
        // Ambil token dari URL
        $token = $this->input->get('token');

        // Validasi token
        $user = $this->db->get_where('user', ['reset_token' => $token])->row_array();

        if ($user && strtotime($user['token_expiry']) > time()) {
            $data['email'] = $user['email'];
            $this->template->load('layout_landing', 'reset_password', $data);
        } else {
            $this->session->set_flashdata('error', 'Token tidak valid atau telah kedaluwarsa.');
            redirect('forgotpassword');
        }
    }

    public function reset_password()
    {
        // Validasi form
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        $this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');

        if ($this->form_validation->run() == false) {
            // Jika validasi gagal, tampilkan kembali form
            $email = $this->input->post('email');
            $data['email'] = $email;
            $this->template->load('layout_landing', 'reset_password', $data);
        } else {
            // Validasi berhasil
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Hash password baru
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Update password di database dan hapus token
            $this->db->where('email', $email);
            $this->db->update('user', [
                'password' => $hashed_password,
                'reset_token' => null,
                'token_expiry' => null
            ]);

            // Tampilkan pesan sukses
            $this->session->set_flashdata('success', 'Password berhasil diubah. Silakan login.');
            redirect('login');
        }
    }
}
