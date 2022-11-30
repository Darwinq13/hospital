<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctores extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent:: __construct();
		$this->load->model("doctor");
	}
	// renderiza la vista index de doctores
	public function index()
	{
		$data["listadoDoctores"]=$this->doctor->obtenerTodos();
		$this->load->view('header');
		$this->load->view('doctores/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de doctores
  public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('doctores/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores para el formulario nuevo
	public function guardardoctor(){
		$datosNuevodoctor=array(
			"nombre_doc"=>$this->input->post('nombre_doc'),
      "apellido_doc"=>$this->input->post('apellido_doc'),
      "direccion_doc"=>$this->input->post('direccion_doc'),
      "correo_doc"=>$this->input->post('correo_doc'),
      "telefono_doc"=>$this->input->post('telefono_doc'),
		);
		print_r($datosNuevodoctor);
		if ($this->doctor->insertar($datosNuevodoctor)) {
			redirect('doctores/index');
		}else {
			echo "<h1>ERROR</h1>";
		}
	}
	//eliminar por el controlador
	public function borrar($id_doc){
		if ($this->doctor->eliminarPorId($id_doc)) {
			redirect('doctores/index');
		} else {
			echo "ERROR AL ELIMINAR :(";
		}
	}
	//Función para renderizar formulario de actualización
public function actualizar($id){
	$data["doctorEditar"]=$this->doctor->ObtenerPorId($id);
	$this->load->view("header");
	$this->load->view("doctores/actualizar",$data);
	$this->load->view("footer");
}
//Funcion para procesar botón actualización
public function actualizardoctor(){
	$datosDoctorEditado=array(
    "nombre_doc"=>$this->input->post('nombre_doc'),
    "apellido_doc"=>$this->input->post('apellido_doc'),
    "direccion_doc"=>$this->input->post('direccion_doc'),
    "correo_doc"=>$this->input->post('correo_doc'),
    "telefono_doc"=>$this->input->post('telefono_doc'),
	);
	$id=$this->input->post("id_doc");
	if ($this->doctor->actualizar($id,$datosDoctorEditado)) {
		redirect('doctores/index');
	}else{
		echo "<h1>ERROR</h1>";
	}
}

}//cierre clase no borrar
