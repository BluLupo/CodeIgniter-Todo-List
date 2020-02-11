<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Model extends CI_Model {

    function validate_credentials($email, $password){
        $this->db->select('*');
        $this->db->from('access');
        $this->db->where('email',$email);
        $this->db->where('password', sha1($password));

        $query = $this->db->get();
        if ($query && $query->num_rows() == 1){

            return $query->result();

        }else {
            return null;
        }
    }
//New CRUD-Model => Tables => Objects

    //**CRUD MODEL**//
    //Create Function
function c_object($table, $data){
    $this->db->insert($table, $data);

    }

//Read Function
function ra_object($table){
    $this->db->select('*');
    $this->db->from($table);
 $query = $this->db->get();

 if ($query->num_rows() > 0){
     foreach ($query->result() as $row){
         $data[] = $row;

     }
     return $data;

        }

    }

    function r_object($table,$id){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('id',$id);

        $query = $this->db->get()-> result();
        if ($query){

            return $query[0];

        }else {

            return null;
        }
    }
    //Function Update
    function u_object($table,$id, $data){
        $this->db->where('id', $id);
        $this->db->update($table, $data);
    }

    //Function Delete
    function d_object($table,$id){
     $this->db->where('id', $id);
     $this->db->delete($table);


    }

}
?>