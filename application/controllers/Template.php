<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends Core_Controller {

	/**
	 * Render index file
	 *
	 */
	public function index() {
		$this->view('index');
	}
}
