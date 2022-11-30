<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent:: __construct();
		$this->load->model("empleado");
	}
	// renderiza la vista index de estudiantes
	public function index()
	{
		$data["listadoEmpleados"]=$this->empleado->obtenerTodos();
		$this->load->view('header');
		$this->load->view('empleados/index',$data);
		$this->load->view('footer');
	}
	// renderiza la vista nuevo de estudiantes
  public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('empleados/nuevo');
		$this->load->view('footer');
	}
	//funcion para capturar los valores para el formulario nuevo
	public function guardarEmpleado(){
		$datosNuevoEmpleado=array(
			"cedula_emp"=>$this->input->post('cedula_emp'),
			"apellido_emp"=>$this->input->post('apellido_emp'),
			"nombre_emp"=>$this->input->post('nombre_emp'),
			"telefono_emp"=>$this->input->post('telefono_emp'),
			"direccion_emp"=>$this->input->post('direccion_emp'),
			"area_emp"=>$this->input->post('area_emp')
		);
		print_r($datosNuevoEmpleado);
		if ($this->empleado->insertar($datosNuevoEmpleado)) {
			redirect('empleados/index');
		}else {
			echo "<h1>ERROR</h1>";
		}
	}
	//eliminar por el controlador
	public function borrar($id_emp){
		if ($this->empleado->eliminarPorId($id_emp)) {
			redirect('empleados/index');
		} else {
			echo "ERROR AL ELIMINAR :(";
		}

	}
}//cierre clase no borrar
