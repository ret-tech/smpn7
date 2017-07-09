<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mberita extends CI_Model{

  public function __construct(){
    parent::__construct();
  }

  public function Ambil_berita($num, $offset){
    $this->db->order_by('id', 'ASC');
     $query = $this->db->get('tb_berita', $num, $offset);

    if($query !== FALSE && $query->num_rows() == 1){
       return true;
	} else {
       return false;
	} 
  }

  public function ambilBeritaID($id){
    $this->db->select('*');
	$this->db->where('id', $id);
	$q = $this->db->get('tb_berita');
	// if id is unique, we want to return just one row
	return $data = array_shift($q->result_array());

  }

}
