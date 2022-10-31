<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Sesiones extends CI_Controller
{

	function __construct(){
		parent:: __construct();
		$this->load->model(['Sesiones_model']); // Importa el modelo sesiones
	}

/**
 * Controlador para las sesiones.
 *
 * La función "login" se encarga de generar el diseño del formulario y analiza si
 * los datos que el usuario esta ingresando son correctos.
 * 
 * 
 */

 //sweetalert
public function sweetalert($titulo,$icon){
	?>
		<script type='text/javascript'>
		Swal.fire({
		  position: 'center',
		  icon: $icon,
		  title: $titulo,
		  showConfirmButton: false,
		  timer: 1500
		})
		</script>
	<?php 
	}

	// Pagina principal del modulo se sesiones
	public function Inicio(){
		/* 
		Con vars se envian los datos de las consultas que se importan desde el modelo, 
		en este caso las importamos desde "Sesiones_model"
		*/
		$vars=[
			"usuario"=>$this->Sesiones_model->UsuarioDetalle(),// Obtenemos los detalles de la sesión del usuario
			"usuarios"=>$this->Sesiones_model->Usuarios(), // Obtenemos todos los usuarios registrados
		];

		$this->load->view('/include/nav');
		$this->load->view('Sesiones',$vars);
		$this->load->view('/include/footer');
	  }
	
    // Iniciar sessión
    public function Login()
    {
		$this->load->view('/include/nav');
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->form_validation->set_rules('correo', 'Correo', 'required|trim|xss_clean');
        $this->form_validation->set_rules('pass', 'Contraseña', 'required|trim|xss_clean');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('alert', [
                'type' => "danger",
                'msg' => "Ocurrio un problema al iniciar sesión",
            ]);

			$vars=[
				"usuario"=>$this->Sesiones_model->UsuarioDetalle(),// Obtenemos los detalles de la sesión del usuario
				"usuarios"=>$this->Sesiones_model->Usuarios(), // Obtenemos todos los usuarios registrados
			];
			
			$this->load->view('Sesiones',$vars);
        } else {
            $correo = addslashes($this->input->post('correo'));
            $contr = $this->input->post('pass');
            $pass = addslashes(md5($this->input->post('pass')));
            $tipo = $this->input->post("tipo");

            $this->db->where("correo='$correo' AND password='$pass'");
            if ($this->db->get("usuarios")->num_rows() < 1) { //-------------No encontro al usuario
                echo "No encontro al usuario ";
                echo "Correo " . $correo;
                echo "Contraseña " . $pass . "";

                $this->session->set_flashdata('alert', [
                    'type' => "danger",
                    'msg' => "Las credenciales no coinciden",
                ]);
                $vars = [
                    "alert" => $this->session->flashdata('alert'),
                    "tipo" => $tipo,
                ];

                $this->load->view('Sesiones');
            } else { //-------Encontro al usuario
                
                $this->db->where("correo", $correo);
                $res = $this->db->get('usuarios')->row();

				$this->session->sessionId = $res->id;
				// $this->sweetalert('Bienvenido '.$res->nombre,'success');
                redirect(base_url("sesiones/inicio"), 'refresh'); // Redirecciona a la pagina de inicio
            }
        }
		$this->load->view('/include/footer');
    }

    // Cerrar sesión
    public function Logout()
    { 
		// $this->sweetalert('Sesión cerrada ','success');
		session_destroy();// Destuye la sesión
		redirect(base_url("/sesiones/inicio"), 'refresh'); // Redirecciona a la pagina de inicio
    }
}
