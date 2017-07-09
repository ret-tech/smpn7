<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Template{
	protected $_ci;
	function __construct(){
		$this->_ci = &get_instance();
	}

	function display($template, $data = null){
		$data['content']		= $this->_ci->load->view($template, $data, true);
		$data['navheader']			= $this->_ci->load->view('templates/navheader', $data, true);
		$data['footer']			= $this->_ci->load->view('templates/footer', $data, true);

		$this->_ci->load->view('/template_utama', $data);
	}
}
