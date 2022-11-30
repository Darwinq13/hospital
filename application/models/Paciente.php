<?php
  class Paciente extends CI_Model
  {
    function __construct()
    {
      parent:: __construct();
    }
    public function insertar($datos){
      return $this->db->insert("paciente",$datos);
    }
    //funcion de consulta todas los doctores de la base de datos
    public function obtenerTodos(){
      $pacientes=$this->db->get("paciente");
      if ($pacientes->num_rows()>0){//cuando si existe
        return $pacientes;
        }else {
          return false; //cuando no hay datos
        }
    }
    public function eliminarPorId($id){
      $this->db->where("id_pac",$id);
      return $this->db->delete("paciente");
    }
    //Consultando los doctores por su id
  public function ObtenerPorId($id){
    $this->db->where("id_pac",$id);
    $pacientes=$this->db->get("paciente");
    if ($pacientes->num_rows()>0){
      return $pacientes->row(); //porque solo hay uno
    } else {
      return false;
    }
  }
  //Proceso de actualización de doctores
  public function actualizar($id,$datos){
    $this->db->where("id_pac",$id);
    return $this->db->update("paciente",$datos);
  }
}//cierre de la clase (No borrar)
