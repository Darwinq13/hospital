<?php
  class Sugerencia extends CI_Model
  {
    function __construct()
    {
      parent:: __construct();
    }
    public function insertar($datos){
      return $this->db->insert("sugerencia",$datos);
    }
    //funcion de consulta todos los estudiantes de la base de datos
    public function obtenerTodos(){
      $sugerencias=$this->db->get("sugerencia");
      if ($sugerencias->num_rows()>0){//cuando si existe
        return $sugerencias;
        }else {
          return false; //cuando no hay datos
        }
    }
    public function eliminarPorId($id){
      $this->db->where("id_sug",$id);
      return $this->db->delete("sugerencia");
    }
  }
