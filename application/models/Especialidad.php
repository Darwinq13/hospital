<?php
  class Especialidad extends CI_Model
  {
    function __construct()
    {
      parent:: __construct();
    }
    public function insertar($datos){
      return $this->db->insert("especialidad",$datos);
    }
    //funcion de consulta todas los doctores de la base de datos
    public function obtenerTodos(){
      $especialidades=$this->db->get("especialidad");
      if ($especialidades->num_rows()>0){//cuando si existe
        return $especialidades;
        }else {
          return false; //cuando no hay datos
        }
    }
    public function eliminarPorId($id){
      $this->db->where("id_esp",$id);
      return $this->db->delete("especialidad");
    }
    //Consultando los doctores por su id
  public function ObtenerPorId($id){
    $this->db->where("id_esp",$id);
    $especialidades=$this->db->get("especialidad");
    if ($especialidades->num_rows()>0){
      return $especialidades->row(); //porque solo hay uno
    } else {
      return false;
    }
  }
  //Proceso de actualización de doctores
  public function actualizar($id,$datos){
    $this->db->where("id_esp",$id);
    return $this->db->update("especialidad",$datos);
  }
}//cierre de la clase (No borrar)
