<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TestEmail extends CI_Controller
{
    public function index()
    {
        $this->load->library('email');

        $this->email->from('your_email@gmail.com', 'Your App Name');
        $this->email->to('recipient_email@gmail.com'); // Ganti dengan email tujuan
        $this->email->subject('Test Email');
        $this->email->message('This is a test email.');

        if ($this->email->send()) {
            echo "Email berhasil dikirim!";
        } else {
            echo $this->email->print_debugger();
        }
    }
}
