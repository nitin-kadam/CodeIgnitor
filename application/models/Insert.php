<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

function student() 
  {

    $this->load->database();
    $data = array(
        'name'=>$this->input->post('name'),
        'address'=>$this->input->post('address')
          );

          $this->db->insert('student',$data);
    // $this->sales_model->order_summary_insert($data);

      //$this->load->view('welcome_message_1.php');
  }
}
