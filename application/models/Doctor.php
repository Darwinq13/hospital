<?php
  class Doctor extends CI_Model
  {
    function __construct()
    {
      parent:: __construct();
    }
    public function insertar($datos){
      return $this->db->insert("doctor",$datos);
    }
    //funcion de consulta todas los doctores de la base de datos
    public function obtenerTodos(){
      $doctores=$this->db->get("doctor");
      if ($doctores->num_rows()>0){//cuando si existe
        return $doctores;
        }else {
          return false; //cuando no hay datos
        }
    }
    public function eliminarPorId($id){
      $this->db->where("id_doc",$id);
      return $this->db->delete("doctor");
    }
    //Consultando los doctores por su id
  public function ObtenerPorId($id){
    $this->db->where("id_doc",$id);
    $doctores=$this->db->get("doctor");
    if ($doctores->num_rows()>0){
      return $doctores->row(); //porque solo hay uno
    } else {
      return false;
    }
  }
  //Proceso de actualización de doctores
  public function actualizar($id,$datos){
    $this->db->where("id_doc",$id);
    return $this->db->update("doctor",$datos);
  }
}//cierre de la clase (No borrar)
