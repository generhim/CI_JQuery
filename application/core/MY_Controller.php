<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */