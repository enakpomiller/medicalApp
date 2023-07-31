<?php defined('BASEPATH') OR exit('No direct script access allowed');?>


<?php 

class Home_model extends CI_Model{


    public function getallresult(){
       $this->db->select('*');
       $this->db->from('patient_register');
       $this->db->join('prescription','patient_register.id = prescription.patient_id');
       $query = $this->db->get();
       return $query->result();
    }



    public function printresult($id){
        $this->db->select('*');
        $this->db->from('patient_register');
        $this->db->join('prescription','patient_register.id = prescription.patient_id');
        $this->db->where('patient_register.id',$id);
        $query = $this->db->get();
        return $query->result();
     }

}


?>