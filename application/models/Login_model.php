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


	    public function entra_empresa($dados){

	    	/*$this->db->select('id');
			$this->db->from('users');
			$this->db->where('usuario', $dados['usuario']);

	    	$id = $this->db->get();*/

	    	date_default_timezone_set('America/Sao_Paulo');
    		$dataLocal = date('d/m/Y H:i:s', time());

	    	$data = array(
		        'id_users'=> $id,
		        'data_registro' => date('Y-m-d'),
		        'hora' => $dataLocal,
		        'tipo_registro' => 'Entrou na Empresa'
        	);

        	$this->db->insert('ponto_eletronico', $data);
	    }


 }    
?>