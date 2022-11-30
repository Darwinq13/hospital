<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pacientes extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent:: __construct();
		$this->load->model("paciente");
	}
	// renderiza la vista index de especialidades
	public function index()
	{
		$data["listadoPacientes"]=$this->paciente->obtenerTodos();
		$this->load->view('header');
		$this->load->view('pacientes/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de especialidades
  public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('pacientes/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores para el formulario nuevo
	public function guardarPaciente(){
		$datosNuevoPaciente=array(
			"nombre_pac"=>$this->input->post('nombre_pac'),
      "apellido_pac"=>$this->input->post('apellido_pac'),
      "direccion_pac"=>$this->input->post('direccion_pac'),
      "correo_pac"=>$this->input->post('correo_pac'),
      "telefono_pac"=>$this->input->post('telefono_pac'),
		);
		print_r($datosNuevoPaciente);
		if ($this->paciente->insertar($datosNuevoPaciente)) {
			redirect('pacientes/index');
		}else {
			echo "<h1>ERROR</h1>";
		}
	}
	//eliminar por el controlador
	public function borrar($id_pac){
		if ($this->paciente->eliminarPorId($id_pac)) {
			redirect('pacientes/index');
		} else {
			echo "ERROR AL ELIMINAR :(";
		}
	}
	//Función para renderizar formulario de actualización
public function actualizar($id){
	$data["pacienteEditar"]=$this->paciente->ObtenerPorId($id);
	$this->load->view("header");
	$this->load->view("pacientes/actualizar",$data);
	$this->load->view("footer");
}
//Funcion para procesar botón actualización
public function actualizarPaciente(){
	$datosPacienteEditado=array(
    "nombre_pac"=>$this->input->post('nombre_pac'),
    "apellido_pac"=>$this->input->post('apellido_pac'),
    "direccion_pac"=>$this->input->post('direccion_pac'),
    "correo_pac"=>$this->input->post('correo_pac'),
    "telefono_pac"=>$this->input->post('telefono_pac'),
	);
	$id=$this->input->post("id_pac");
	if ($this->paciente->actualizar($id,$datosPacienteEditado)) {
		redirect('pacientes/index');
	}else{
		echo "<h1>ERROR</h1>";
	}
}

}//cierre clase no borrar
