<?php
  class Empleado extends CI_Model
  {
    function __construct()
    {
      parent:: __construct();
    }
    public function insertar($datos){
      return $this->db->insert("empleado",$datos);
    }
    //funcion de consulta todos los estudiantes de la base de datos
    public function obtenerTodos(){
      $empleados=$this->db->get("empleado");
      if ($empleados->num_rows()>0){//cuando si existe
        return $empleados;
        }else {
          return false; //cuando no hay datos
        }
    }
    public function eliminarPorId($id){
      $this->db->where("id_emp",$id);
      return $this->db->delete("empleado");
    }
  }
