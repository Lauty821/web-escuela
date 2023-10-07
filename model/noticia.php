<?php 
	require_once('./config/db_abstract_model.php');

	class Usuario extends DBAbstractModel 
	{
		 public $titulo;
		 public $descripcion;
		 public $imagen;
		 public $estado;
	

		 function __construct() 
		 {
			$this->bd_nombre = 'urquizadb';
		 }
		 
		 function get() 
		 {
			$this->query = "SELECT * FROM usuario ";
			$this->get_results_from_query();
			foreach ($this->rows as $propiedad=>$valor)
				{
					$this->$propiedad = $valor;
				}
			}
		 
		 
		 function set($user_data=array()) 
		 {
			if(array_key_exists('email', $user_data))
			{
				$this->get($user_data['email']);
				if($user_data['email'] != $this->email)
				{
					foreach ($user_data as $campo=>$valor)
					{
						$$campo = $valor;
					}
					$this->query = "INSERT INTO usuario (nombre, apellido, email, clave) 
									VALUES ('$nombre', '$apellido', '$email', '$clave')";
					$this->execute_single_query();
				}
			}
		 }
		 
		 function edit($user_data=array()) 
		 {
			foreach ($user_data as $campo=>$valor)
			{
				$$campo = $valor;
			}
			$this->query = "UPDATE usuario 
							SET nombre='$nombre', 
								apellido='$apellido', 
								clave='$clave' 
								WHERE email = '$email'";
			$this->execute_single_query();
		 }
		 
		 function delete($user_email='') 
		 {
			$this->query = "DELETE FROM usuario 
							WHERE email = '$user_email'";
			$this->execute_single_query();
		 }
		 
		 function __destruct() 
		 {
		//	unset($this);
		 }
    }
?>