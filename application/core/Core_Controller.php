<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class Core_Controller extends CI_Controller {

	const HTML = 'html';

	public function __construct() {
		parent::__construct();
	}

	/**
	 * Shortend View Loader
	 *
	 * @param string $file
	 * @param array $data
	 */
	public function view($file = '', $data = []) {
		$this->load->view('html/' . $file, $data);
	}
}
