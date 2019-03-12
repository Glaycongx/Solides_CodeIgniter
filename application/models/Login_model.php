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


 }    
?>