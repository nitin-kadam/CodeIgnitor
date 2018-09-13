<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function db1()
	{
		// $this->db->query('');
		$this->load->database();
		
		$sql = "INSERT INTO student (name,address) VALUES('nitin','pune')";
	    $query =  $this->db->query($sql);
		// var_dump($row);
 
            // $name =$_POST['name'];
            // $address=$_POST['address'];
        
    $this->db->insert('student', $data);
    echo "inserted";
	}
	
	// public function index2($data)
	// {
	// 	echo "<br>";
	// 	echo "data";
	// 	echo $data;
	// 	echo "<br>";echo "<br>";echo "<br>";echo "<br>";
	// 	$this->load->view('welcome_message_2');
		
	// }


}

