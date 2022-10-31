<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

/**
* Página de índice para este controlador.
*
* Mapas a la siguiente URL
* http://ejemplo.com/index.php/bienvenido
*	- o -
* http://ejemplo.com/index.php/welcome/index
*	- o -
* Dado que este controlador está configurado como el controlador predeterminado en
* config/routes.php, se muestra en http://example.com/
*
* Por lo tanto, cualquier otro método público que no tenga como prefijo un guión bajo
* asignar a /index.php/welcome/<method_name>
* @ver https://codeigniter.com/userguide3/general/urls.html
*/

	public function index(){
		$this->load->view('/include/nav');
		$this->load->view('welcome_message');
		$this->load->view('/include/footer');
		
	}

}
