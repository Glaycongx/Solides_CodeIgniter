<?php
class Login_model extends CI_Model {

 
	 	public function __construct()
		{
			parent::__construct();


			$this->load->database();
		}

        # VALIDA USUÁRIO
	    public function validate($dados) {

       		$this->db->select('*');
			$this->db->from('users');
			$this->db->where('usuario', $dados['usuario']);
			$this->db->where('senha', md5($dados['senha']));

			$registros = $this->db->get();

			$_SESSION['usuario'] = $dados['usuario'];

			if($registros->num_rows() > 0)
			{
				return $registros->row_array();
			} else {
				return false;
			}			
	    }

	    public function cadastrar($dados) {

	    	$data = array(
        'nome' => $dados['nome'],
        'usuario' => $dados['usuario'],
        'email' => $dados['email'],
        'senha' => md5($dados['senha']),
        'data_cadastro' => date('Y-m-d H:i:s')
          );

       $this->db->insert('users', $data);
	    }


	    public function entrada_empresa(){

	    	date_default_timezone_set('America/Sao_Paulo');

	    	$this->db->select('id');
			$this->db->from('users');
			$this->db->where('usuario', $this->session->userdata('usuario'));

	    	$id = $this->db->get();
	    	$id = $id->row_array()['id'];

	    	//return $id->result();

	    	$data = array(
		        'id_users'=> $id,
		        'data_registro' => date('Y-m-d'),
		        'hora' => date('H:i:s'),
		        'tipo_registro' => 'Entrou na Empresa'
        	);

        	$this->db->insert('ponto_eletronico', $data);
	    }

	    public function saida_almoco(){

	    	date_default_timezone_set('America/Sao_Paulo');

	    	$this->db->select('id');
			$this->db->from('users');
			$this->db->where('usuario', $this->session->userdata('usuario'));

	    	$id = $this->db->get();
	    	$id = $id->row_array()['id'];

	    	//return $id->result();

	    	$data = array(
		        'id_users'=> $id,
		        'data_registro' => date('Y-m-d'),
		        'hora' => date('H:i:s'),
		        'tipo_registro' => 'Saida Almoco '
        	);

        	$this->db->insert('ponto_eletronico', $data);
	    }

	    public function entrada_almoco(){

	    	date_default_timezone_set('America/Sao_Paulo');

	    	$this->db->select('id');
			$this->db->from('users');
			$this->db->where('usuario', $this->session->userdata('usuario'));

	    	$id = $this->db->get();
	    	$id = $id->row_array()['id'];

	    	//return $id->result();

	    	$data = array(
		        'id_users'=> $id,
		        'data_registro' => date('Y-m-d'),
		        'hora' => date('H:i:s'),
		        'tipo_registro' => 'Retorno Almoco '
        	);

        	$this->db->insert('ponto_eletronico', $data);
	    }

	    public function saida_empresa(){

	    	date_default_timezone_set('America/Sao_Paulo');

	    	$this->db->select('id');
			$this->db->from('users');
			$this->db->where('usuario', $this->session->userdata('usuario'));

	    	$id = $this->db->get();
	    	$id = $id->row_array()['id'];

	    	//return $id->result();

	    	$data = array(
		        'id_users'=> $id,
		        'data_registro' => date('Y-m-d'),
		        'hora' => date('H:i:s'),
		        'tipo_registro' => 'Saida Empresa '
        	);

        	$this->db->insert('ponto_eletronico', $data);
	    }

	    public function mataSessao(){
		$this->session->unset_userdata('usuario');
		$this->session->sess_destroy();
		redirect('/index');
		exit();
	}

	public function historico(){
		$nome = $_SESSION['usuario'];

			/*$this->db->select('data_registro', 'tipo_registro', 'hora');
			$this->db->from('ponto_eletronico');
			$this->db->where('usuario', $this->session->userdata('usuario'));

	    	$result = $this->db->get();
	    	$result = $result->row_array()['data_registro', 'tipo_registro', 'hora'];

			$result = $conexao->query($exibe);*/
	}

 }    
?>