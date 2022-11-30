<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Especialidades extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent:: __construct();
		$this->load->model("especialidad");
	}
	// renderiza la vista index de especialidades
	public function index()
	{
		$data["listadoEspecialidades"]=$this->especialidad->obtenerTodos();
		$this->load->view('header');
		$this->load->view('especialidades/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de especialidades
  public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('especialidades/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores para el formulario nuevo
	public function guardarespecialidad(){
		$datosNuevoEspecialidad=array(
			"nombre_esp"=>$this->input->post('nombre_esp'),
      "descripcion_esp"=>$this->input->post('descricpion_esp'),
		);
		print_r($datosNuevaEspecailidad);
		if ($this->especialidad->insertar($datosNuevaEspecialidad)) {
			redirect('especialidades/index');
		}else {
			echo "<h1>ERROR</h1>";
		}
	}
	//eliminar por el controlador
	public function borrar($id_esp){
		if ($this->especialidad->eliminarPorId($id_esp)) {
			redirect('especialidades/index');
		} else {
			echo "ERROR AL ELIMINAR :(";
		}
	}
	//Función para renderizar formulario de actualización
public function actualizar($id){
	$data["EspecialidadEditar"]=$this->especialidad->ObtenerPorId($id);
	$this->load->view("header");
	$this->load->view("especialidades/actualizar",$data);
	$this->load->view("footer");
}
//Funcion para procesar botón actualización
public function actualizarEspecialidad(){
	$datosEspecialidadEditado=array(
    "nombre_esp"=>$this->input->post('nombre_esp'),
    "descripcion_esp"=>$this->input->post('descricpion_esp'),
	);
	$id=$this->input->post("id_esp");
	if ($this->especialidad->actualizar($id,$datosEspecialidadEditado)) {
		redirect('especialidades/index');
	}else{
		echo "<h1>ERROR</h1>";
	}
}

}//cierre clase no borrar
