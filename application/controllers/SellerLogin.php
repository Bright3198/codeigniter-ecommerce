<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SellerLogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('sellerlogin_model');
        $this->user_login_check();
    }
    public function index()
    {
        $this->load->view('seller/pages/login');
    }

    public function seller_login_check()
    {

        $this->form_validation->set_rules('user_email', 'User Email', 'required|valid_email');
        $this->form_validation->set_rules('user_password', 'User Password', 'required');

        if ($this->form_validation->run() == true) {
            $data                  = array();
            $data['user_email']    = $this->input->post('user_email');
            $data['user_password'] = md5($this->input->post('user_password'));

            $result = $this->sellerlogin_model->seller_login_check($data);

            if ($result) {
                $this->session->set_userdata('user_email', $result->user_email);
                $this->session->set_userdata('user_name', $result->user_name);
                $this->session->set_userdata('user_id', $result->user_id);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', 'Your Email Or Password Does Not Match');
                redirect('seller');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('seller');
        }

    }

    public function user_login_check()
    {

        $email = $this->session->userdata('user_email');
        $name  = $this->session->userdata('user_name');
        $id    = $this->session->userdata('user_id');

        if ($email == true) {
            redirect('dashboard');
        }

    }

}
