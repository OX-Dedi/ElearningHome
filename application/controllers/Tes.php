<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {


	public function index(){
		$ip = $this->input->user_agent();
		echo $ip;
		$session = session_id();
		echo '<br>'.$session;
		$this->load->view('welcome_message');
	}
}
