<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sugerencias extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent:: __construct();
		$this->load->model("sugerencia");
	}
	// renderiza la vista index de sugerencias
	public function index()
	{
		$data["listadoSugerencias"]=$this->sugerencia->obtenerTodos();
		$this->load->view('header');
		$this->load->view('sugerencias/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de sugerencias
  public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('sugerencias/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores para el formulario nuevo
	public function guardarSugerencia(){
		$datosNuevoSugerencia=array(
			"sugerencia_sug"=>$this->input->post('sugerencia_sug'),
		);
		print_r($datosNuevoSugerencia);
		if ($this->sugerencia->insertar($datosNuevoSugerencia)) {
			redirect('sugerencias/index');
		}else {
			echo "<h1>ERROR</h1>";
		}
	}
	//eliminar por el controlador
	public function borrar($id_sug){
		if ($this->sugerencia->eliminarPorId($id_sug)) {
			redirect('sugerencias/index');
		} else {
			echo "ERROR AL ELIMINAR :(";
		}

	}
}//cierre clase no borrar
