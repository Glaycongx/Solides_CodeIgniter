
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('index_view');
	}

	public function cadastro()
	{
		$this->load->view('painel');
	}

	public function logar()
	{

		$post = $this->input->post();

		$verifica_login = $this->Login_model->validate($post);

		if($verifica_login){
			redirect('ponto');
		}else
		{
			redirect('index/index');
		}
	}

	public function apontar_registro()
	{
		$this->load->view('painel');
	}
}

?>
