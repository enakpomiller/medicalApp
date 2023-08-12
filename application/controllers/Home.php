
<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_controller {
     public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url','text'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model(array('home_model'));

     }


     public function index(){
         $this->data['title'] = "Home";
         $this->data['page_title'] ="home";
         $this->load->view('layout/index',$this->data);

      }

      public function aboutus(){
            $this->data['title'] = "About us";
            $this->data['page_title'] ="aboutus";
            $this->load->view('layout/index2',$this->data);
      }

      public function contact(){
         $this->data['title'] = "About us";
         $this->data['page_title'] ="contact";
         $this->load->view('layout/index2',$this->data);
      }


      public function desk_login(){
         if($_POST){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');
              if($this->form_validation->run()===TRUE){
                     $username = $this->input->post('username');
                     $password =  $this->input->post('password');
                     $checklogin = $this->db->get_where('Deskofficer',array('username'=>$username,'password'=>$password))->row();
                     if($checklogin){
                         $data =[
                           'id'=>$checklogin->id,
                           'username'=>$checklogin->username,
                           'usertype'=>'deskofficer',
                           'logged_in'=>TRUE
                         ];
                   
                         $this->session->set_userdata($data);
                        return redirect(base_url('home/patient_reg'));
                      }else{
                        $this->session->set_flashdata('error','<div class="alert alert-danger"> Wrong Username or Password </div>');
                        return redirect(base_url('home/desk_login'));
                      }

              }else{
               $this->data['title'] = "About us";
               $this->data['page_title'] ="desk_login";
               $this->load->view('layout/index2',$this->data);
              }
         }else{
            $this->data['title'] = "About us";
            $this->data['page_title'] ="desk_login";
            $this->load->view('layout/index2',$this->data);
         }

      }


  public function patient_reg(){
   if($_POST){
      //  echo "<pre>"; print_r($_POST);die;
      $data_arr =[
          'firstname'=>$this->input->post('full'),
          'othernames'=>$this->input->post('other'),
          'phone'=>$this->input->post('phone'),
          'address'=>$this->input->post('address'),
          'ailment'=>$this->input->post('ailment'),
          'symptoms'=>$this->input->post('symptoms'),
          'date'=>$this->input->post('date'),
          'token'=>rand(1,999)
      ];
        $this->db->insert('patient_register',$data_arr);
       echo true;
            // if($insert){
            //    $this->session->set_flashdata('inserted','<div class="alert alert-success" > Patients Record Created Successfully </div>');
            //    return redirect(base_url('home/patient_reg'));
            // }else{
            //    echo " cannot insert  ";
            // }
   }else{
      echo false;
      $this->data['title'] = "Register Patient";
      $this->data['page_title'] ="patient_reg";
      $this->load->view('layout/index2',$this->data);
   }

  }

  public function delete_patient_rec($id){
       $this->db->where('id',$id);
       $del =$this->db->delete('patient_register');
       if($del){
         return redirect(base_url('home/view_result/'.$id));
        echo true;
      }else{
       echo false;
      }

  }

  public function doctors_reg(){
      if($_POST){
         $insert_doc =[
            'fullnames'=>$this->input->post('full'),
            'phone'=>$this->input->post('phone'),
            'specialty'=>$this->input->post('special'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('pass')
        ];
        $check = $this->db->get_where('doctors_register',array('email'=>$this->input->post('email')))->row();
        if($check){
          echo false;;
         }else{
            $insert = $this->db->insert('doctors_register',$insert_doc);
            echo true;
         }

      }else{
         echo false;
         $this->data['title'] = "Register As Doctor";
         $this->data['page_title'] ="doctors_reg";
         $this->load->view('layout/index2',$this->data);
      }

  }



   public function doctors_login(){
      if($_POST){
         $this->form_validation->set_rules('email','Email','required');
         $this->form_validation->set_rules('password','Password','required');
             if($this->form_validation->run()===TRUE){
                  $email = $this->input->post('email');
                  $password =  $this->input->post('password');
                  $check = $this->db->get_where('doctors_register',array('email'=>$email,'password'=>$password))->row();
                   if($check){
                      $data =[
                        'id'=>$check->id,
                        'fullnames'=>$check->fullnames,
                        'usertype'=>'doctor',
                        'logged_in'=>true
                      ];
                      
                      $this->session->set_userdata($data);
                     return redirect(base_url('home/doct_board'));
                   }else{
                     $this->session->set_flashdata('inserted','<div class="alert alert-danger" >Wrong Username OR Passwordr</div>');
                     return redirect(base_url('home/doctors_login'));
                  }

               }else{
                  $this->data['title'] = "Login As Doctor";
                  $this->data['page_title'] ="doctors_login";
                  $this->load->view('layout/index2',$this->data);
               }
      }else{
         $this->data['title'] = "Login As Doctor";
         $this->data['page_title'] ="doctors_login";
         $this->load->view('layout/index2',$this->data);
      }

   }

   public function doct_board(){
      $this->data['title'] = "Login As Doctor";
      $this->data['page_title'] ="doct_board";
      //  $this->data['patient_rec'] = $this->home_model->getallresult();
      $this->data['patient_rec'] = $this->db->get('patient_register')->result();
      $this->load->view('layout/index2',$this->data);

    }

   public function prescribe ($id){
      if($_POST){
         $data =[
            'patient_id'=>$this->input->post('patient_id'),
            'prescription'=>$this->input->post('prescription'),
            'dose'=>$this->input->post('dose'),
            'status'=>'1',
            'date'=>date("D-M-Y")
          ];
         $insert = $this->db->insert('prescription',$data);
         if($insert){
           $this->session->set_flashdata('success',' Result Approved and  sent to Desk officer');
         //   return redirect(base_url('home/prescribe/'.$id));
         return redirect(base_url('home/doct_board'));
         }

      }else{
         $this->data['title'] = "Doctors Prescription";
         $this->data['page_title'] ="prescribe";
         $this->data['active'] =  $this->db->get_where('prescription',array('patient_id'=>$this->uri->segment(3)))->row();
         $this->data['user'] = $this->db->get_where('patient_register',array('id'=>$this->uri->segment(3)))->row();
         $this->data['patient_details'] = $this->db->get_where('patient_register',array('id'=>$id))->row();
         $this->load->view('layout/index2',$this->data);

      }

   }
   
   public function edit_patient_rec($id){
      if($_POST){
         $data =[
            'prescription'=>$this->input->post('prescription'),
            'dose'=>$this->input->post('dose'),
            'status'=>'1',
            'date'=>date("D-M-Y")
          ];
          $update = $this->home_model->updatepatient($id,$data);
         if($update){
           $this->session->set_flashdata('success',' Result Updated');
         //   return redirect(base_url('home/prescribe/'.$id));
         return redirect(base_url('home/doct_board'));
         }

      }else{
         $this->data['title'] = "Doctors Prescription";
         $this->data['page_title'] ="edit_patient_rec";
         $this->data['active'] =  $this->db->get_where('prescription',array('patient_id'=>$this->uri->segment(3)))->row();
         $this->data['user'] = $this->db->get_where('patient_register',array('id'=>$this->uri->segment(3)))->row();
         $this->data['patient_details'] = $this->db->get_where('patient_register',array('id'=>$id))->row();
         $this->load->view('layout/index2',$this->data);

      }
    }

   public function view_result(){
      $this->data['title'] = "Login As Doctor";
      $this->data['result'] = $this->home_model->getallresult();
      $this->data['page_title'] ="view_result";
      $this->load->view('layout/index2',$this->data);
   }
   public function doct_view_result($id){

      $this->data['title'] = "Login As Doctor";
      $this->data['result'] = $this->home_model->printresult($id);
      //$this->data['result'] = $this->home_model->getallresult();
      $this->data['page_title'] ="doct_view_result";
      $this->load->view('layout/index2',$this->data);
   }

   public function view_prescription(){
      $this->data['title'] = "Login As Doctor";
      $this->data['result'] = $this->db->get('prescription')->result();
      $this->data['page_title'] ="view_prescription";
      $this->load->view('layout/index2',$this->data);
   }

   public function delete_prescription($id){
        $this->db->where('prescribe_id',$id);
        $this->db->delete('prescription');

        $this->session->set_flashdata('deleted','Prescription Deleted Successfully');
        return redirect(base_url('home/view_prescription/'.$id));

   }

   public function print($id){
      $this->data['title'] = "Login As Doctor";
      $this->data['printresult'] = $this->home_model->printresult($id);
      $this->data['page_title'] ="print";
      $this->load->view('layout/index2',$this->data);
   }

   public function search(){
      if($_POST){
        $search = $_POST['search'];
        $this->db->like('firstname',$search);
        $this->db->get('patient_register')->row();
      }else{
         $this->data['title'] = "Login As Doctor";
         $this->data['page_title'] ="search";
         $this->load->view('layout/index2',$this->data);
      }

   }



public function logout(){
  session_destroy();
  return redirect(base_url('/'));
}

}

?>
