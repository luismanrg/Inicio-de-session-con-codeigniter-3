<?php
/**
 * Modelo para las sesiones.
 *
 * Aqui estan declaradas las consultas necesarias para generar la sesión del usuario y
 * para su registro.
 * 
 * ¡Importante! Al generar un nuevo modelo el archivo debe Iniciar con una letra mayuscula 
 * ademas de terminar en "_model.php", en este caso Sesiones_model.php
 * 
 */
defined('BASEPATH') or exit('No direct script access allowed');
class Sesiones_model extends CI_Model
{
	// Obtiene la información del cliente
	public function UsuarioDetalle(){
		$this->db->select("*"); // Obtenemos todos los campos
		$this->db->from("usuarios as p"); // seleccionamos la tabla "usuarios" y asignamos el alias "p"
		$this->db->where("p.id",$this->session->sessionId); // buscamos al usuario que corresponde a la sesión
		return $this->db->get()->result(); // Retornamos la información
	}

	public function Usuarios(){
		$this->db->select("*"); // Obtenemos todos los campos
		$this->db->from("usuarios as p"); // seleccionamos la tabla "usuarios" y asignamos el alias "p"
		return $this->db->get()->result(); // Retornamos la información
	}
}

?>
