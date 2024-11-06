<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reviews extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->template->load('layout_landing', 'landing-page/reviews/index');
    }
}
