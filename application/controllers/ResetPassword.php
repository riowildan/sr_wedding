<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ForgotPassword extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(['url', 'form']);
    }

    public function reset_password()
    {
        // Cek jika metode pengiriman adalah POST
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $email = $this->input->post('email', true);
            $reset_code = $this->input->post('reset_code', true);
            $new_password = $this->input->post('new_password', true);

            // Validasi input
            if (empty($email) || empty($reset_code) || empty($new_password)) {
                $this->session->set_flashdata('error', 'Semua field wajib diisi.');
                redirect('forgotpassword/reset_password');
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->session->set_flashdata('error', 'Format email tidak valid.');
                redirect('forgotpassword/reset_password');
            }

            // Cari user berdasarkan email dan kode reset
            $user = $this->db->get_where('user', [
                'email' => $email,
                'reset_code' => $reset_code
            ])->row_array();

            if ($user) {
                // Periksa waktu kedaluwarsa token (jika kolom token_expiry digunakan)
                if (isset($user['token_expiry']) && strtotime($user['token_expiry']) < time()) {
                    $this->session->set_flashdata('error', 'Kode reset telah kedaluwarsa.');
                    redirect('forgotpassword/reset_password');
                }

                // Perbarui password baru
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                $this->db->where('email', $email);
                $this->db->update('user', [
                    'password' => $hashed_password,
                    'reset_code' => null, // Hapus kode reset setelah berhasil
                    'token_expiry' => null // Hapus kedaluwarsa token
                ]);

                $this->session->set_flashdata('success', 'Password berhasil diubah. Silakan login.');
                redirect('login');
            } else {
                $this->session->set_flashdata('error', 'Kode reset tidak valid atau email tidak ditemukan.');
                redirect('forgotpassword/reset_password');
            }
        } else {
            // Jika metode bukan POST, tampilkan form reset password
            $this->load->view('reset_password');
        }
    }
}
