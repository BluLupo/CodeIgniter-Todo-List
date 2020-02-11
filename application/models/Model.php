<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Model extends CI_Model {

    //**CRUD MODEL**//
    //Create Function
function create_todo($data){
    $this->db->insert('todo', $data);





}

//Read Function
function read_todos(){
    $this->db->select('*');
    $this->db->from('todo');
 $query = $this->db->get();

 if ($query->num_rows() > 0){
     foreach ($query->result() as $row){
         $data[] = $row;

     }
     return $data;

        }

    }

    function read_todo($id){
        $this->db->select('*');
        $this->db->from('todo');
        $this->db->where('id',$id);

        $query = $this->db->get()-> result();
        if ($query){

            return $query[0];

        }else {

            return null;
        }
    }
    //Function Update
    function update_todo($id, $data){
        $this->db->where('id', $id);
        $this->db->update('todo', $data);
    }

    //Function Delete
    function delete_todo($id){
     $this->db->where('id', $id);
     $this->db->delete('todo');


    }

}
?>