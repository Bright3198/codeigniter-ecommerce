<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Chat extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->get_user();
    }


    public function index(){
        $data                = array();
        // $data['customers'] = $this->user_model->getall_user_info();
        $data['customers'] = $this->web_model->get_customers_info();
        $data['maincontent'] = $this->load->view('admin/pages/chat', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function chat_with($customer_id){
        $data = array();

        // Get message
        $data['customer_id'] = $customer_id;
        $data['messages'] = $this->message_model->get_messages($this->session->userdata('user_id'), $customer_id);
        $data['maincontent'] = $this->load->view('admin/pages/chat_with', $data, true);
        $data['seller_message'] = $this->input->post('message');
        
        if ($data['seller_message'] != ''){
            $message_data['message'] = $data['seller_message'];
            $message_data['receiver'] = $data['customer_id'];
            $message_data['sender'] = $this->session->userdata('user_id');

            $results = $this->message_model->save_message($message_data);

            // Save message
            // $results = $this->message_model->save_message($message_data);
        }

        $this->load->view('admin/master', $data);
    }

    public function get_user()
    {

        $email = $this->session->userdata('user_email');
        $name  = $this->session->userdata('user_name');
        $id    = $this->session->userdata('user_id');

        if ($email == false) {
            redirect('admin');
        }
    }


}

?>