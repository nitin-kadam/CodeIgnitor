<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insert extends CI_Controller {

  // public function student() 
  // {
  //   $this->load->database();
  //     $data = array(


  //       'name'=>$this->input->post('name'),
  //       'address'=>$this->input->post('address')
  //         );

  //         $this->db->insert('student',$data);
    

  //   //  $this->load->view('sales/new_blank_order_summary');
  //     $this->load->view('welcome_message_2');
  // }




  
public function db1()

{
		
      $this->load->database();
            $data = array(


        'name'=>"nitin",
        'address'=> "Pune222"
          );




	  	// $sql = "select * from student ;";
	    $query =	$this->db->insert('student',$data);
		// var_dump($row);
		// foreach ($query->result() as $row)
		// {
		// 	echo $row->id; echo " ";
		// 	echo $row->name; echo " ";
		// 	echo $row->address; echo " ";
		// 	echo "<br>";	
		// }		

		// $this->index2("mydata from fucntion");

  }

















}