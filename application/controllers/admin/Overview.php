<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Overview extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('admin/overview');
    }
}
