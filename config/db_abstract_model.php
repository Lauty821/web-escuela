<?php

	abstract class DBAbstractModel 
	{
		private static $servidor = 'localhost';
		private static $usuario = 'root';
		private static $contraseña = '';
		protected $bd_nombre = 'escuela';
		protected $query;
		protected $rows = array();
		private $conexion;
		
		# métodos abstractos para ABM de clases que hereden 
		abstract protected function get();
		abstract protected function set();
		abstract protected function edit();
		abstract protected function delete();
		 
		# los siguientes métodos pueden definirse con exactitud 
		# y no son abstractos 
		# Conectar a la base de datos 
		private function open_connection() 
		{
			$this->conexion = new mysqli(self::$servidor, self::$usuario, self::$contraseña, $this->bd_nombre);
		}
		
		# Desconectar la base de datos 
		private function close_connection() 
		{
			$this->conexion->close();
		}
		
		# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE 
		protected function execute_single_query() 
		{
			$this->open_connection();
			$this->conexion->query($this->query);
			$this->close_connection();
		}
		
		# Traer resultados de una consulta en un Array 
		protected function get_results_from_query() 
		{
			$this->open_connection();
			$result = $this->conexion->query($this->query);
			while ($this->rows[] = $result->fetch_assoc());
			$result->close();
			$this->close_connection();
			array_pop($this->rows);
		}
	}
?>