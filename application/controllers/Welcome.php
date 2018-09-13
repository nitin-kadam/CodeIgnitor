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
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function db()
	{
		// $this->db->query('');
		$this->load->database();
		$sql = "select * From student";
	    $query =	$this->db->query($sql);
		// var_dump($row);
		foreach ($query->result() as $row)
		{
			echo $row->id; echo " ";
			echo $row->name; echo " ";
			echo $row->address; echo " ";
			echo "<br>";	
		}		

		$this->index2("mydata from fucntion");

		//$this->load->view('welcome_message');
	}
	




	public function index2($data)
	{
		echo "<br>";
		echo "data";
		echo $data;
		echo "<br>";echo "<br>";echo "<br>";echo "<br>";
		$this->load->view('welcome_message_2');
		
	}

	public function index1()
	{
		// $this->load->helper('url');
		$this->load->view('welcome_message_1');
	}
	public function email2()
	{
		$this->load->library('email');

		$config['protocol']    = 'smtp';
        $config['smtp_host']    = 'mail.wired2technologies.com';
        $config['smtp_port']    = '587';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'noreplay@wired2technologies.com';
        $config['smtp_pass']    = 'No43pl@yw2T';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'text'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not      

        $this->email->initialize($config);

		$this->email->from('kadamnitin314@gmail.com', 'nitin kadam');
		$this->email->to('ingleakshay32@gmail.com');
		$this->email->cc('ingleakshay32@gmail.com');
		$this->email->bcc('ingleakshay32@gmail.com');

		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');

		$this->email->send();
		echo "email send";
	}
}
