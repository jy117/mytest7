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
		echo BASEPATH;
		$viewData["someData"] = $this->db->get("isuser.kj_kanji")->result();

		$this->load->model("newModel");
		$viewData["title"] = $this->newModel->makeTitle();

		$this->load->model("newModel");
		$viewData["nonetitle"] = $this->newModel->outputTitle();

		$this->load->library("custom");
		$viewData["word"] = $this->custom->speak();

		$this->load->view('welcome_message', $viewData);

	}
}
