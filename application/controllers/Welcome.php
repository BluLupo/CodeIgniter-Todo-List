<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        //$this->load->view('welcome_message');
        $this->load->view('login');
    }

    public function login()
    {

        $this->load->library('form_validation');

        // Form Validator
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            //Failed
            $this->index();

        } else {
            $user = $this->model->validate_credentials($this->input->post('email'), $this->input->
            post('password'));
            if ($user){
                // Session Data
                $data = array(
                    'id' => $user->email,
                    'email' => $user->email,
                    'logged-in' => true

                );

                $this->session->set_userdata($data);
                //Redirect
                redirect('app');
            }else{

                redirect('welcome');
            }



        }
    }
}