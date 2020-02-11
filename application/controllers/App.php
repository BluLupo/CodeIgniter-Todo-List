<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class App extends CI_Controller{

    function index(){
        $this->load->helper('url');
        $data['todos'] = $this->model->read_todos();
        $this->load->view('list', $data);


    }

    function todo(){
        $id = $this->uri->segment(3);
        $data['todo'] = $this->model->read_todo($id);
        $this->load->view('single_todo', $data);
    }

    function new_todo(){

    $this->load->library('form_validation');

    // Form Validator
    $this->form_validation->set_rules('todo', 'Todo Text','trim|required');

    if ($this->form_validation->run() == FALSE){
        //Failed
        $this->index();

    }else{
        $data = array(
          'text' => $this->input->post('todo'),
          'createdAt' => date('Y-m-d H:i:s')

        );

        $this->model->create_todo($data);
        redirect('app');
    }


    }

    function check(){
        $id = $this->uri->segment(3);

        $data = array(
            'completed' => 1

        );
        $this->model->update_todo($id, $data);
        redirect('app');
    }

    function uncheck(){
        $id = $this->uri->segment(3);
        $data = array(
            'completed' => 0

        );
        $this->model->update_todo($id, $data);
        redirect('app');

    }
    function destroy_todo(){
        $id = $this->uri->segment(3);
        $this->model->delete_todo($id);
        redirect('app');



    }

    function upd_todo(){
        $id = $this->input->post('id');
        $data = array(
            'text' => $this->input->post('todo')

        );
        $this->model->update_todo($id, $data);
        redirect('app');



    }
}

?>