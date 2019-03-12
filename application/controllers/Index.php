
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
		$this->load->view('cadastro');
	}

	public function relatorio(){
		$this->load->view('relatorio');
	}

	public function logar()
	{

		$post = $this->input->post();

		$verifica_login = $this->Login_model->validate($post);

		if($verifica_login){
			redirect('painel');
		}else
		{
			redirect('/index');
		}
	}

	public function apontar_registro()
	{
		$this->load->view('painel');
	}

	public function cadastra_novo(){
		$post = $this->input->post();

		$novo_usuario = $this->Login_model->cadastrar($post);

		if($novo_usuario){
			redirect('/index');
		}else
		{
			echo("Erro");
		}
	}

	public function entrada_empresa(){
		$post = $this->input->post();

		$entrada1 = $this->Login_model->entrada_empresa($post);

			redirect('/painel');
	}

	public function saida_almoco(){
		$post = $this->input->post();

		$entrada1 = $this->Login_model->saida_almoco($post);

			redirect('/painel');
	}

	public function entrada_almoco(){
		$post = $this->input->post();

		$entrada1 = $this->Login_model->entrada_almoco($post);

			redirect('/painel');
	}

	public function saida_empresa(){
		$post = $this->input->post();

		$entrada1 = $this->Login_model->saida_empresa($post);

			redirect('/painel');
	}

	public function exit(){
		$this->Login_model->mataSessao();
	}
}

?>
