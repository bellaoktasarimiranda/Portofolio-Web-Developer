<?php
class form extends CI_Controller{
   
    function  index(){
      $this->load->helper(array('form','url'));
       
      $this->load->library('form_validation');
      $this->load->library('session');
       
      $this->form_validation->set_rules('namadepan','Nama Depan','required');
      $this->form_validation->set_rules('namabelakang','Nama Belakang','required');
      $this->form_validation->set_rules('email','Email','required|valid_email'); 
      $this->form_validation->set_rules('password','Password','required|min_length[5]'); // min_length[5] password tidak boleh kurang dari lima
      $this->form_validation->set_rules('retypepassword','Retype Password','required|min_length[5]|matches[password]'); // matches[password] mencocokan password
       
        if ($this->form_validation->run()==FALSE){
            $this->load->view('form_view'); // file form_view.php
        }
       
        else {      
 
          $this->session->set_flashdata('succses','Data Yang anda masukan berhasil.');
          redirect('form');
        }
    }
}
?>