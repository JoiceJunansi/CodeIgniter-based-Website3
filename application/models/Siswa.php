<?php

/**
 *
 */
class Siswa extends CI_Model
{
  function ambil_data(){
    $query = $this->db->order_by('id','DESC')->get('datasiswa');
    return $query->result();
  }

  function ambil_where($where,$table)
  {
    return $this->db->get_where($table,$where);
  }

  function update($where,$data,$table)
  {
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  function hapus($id)
  {
    $this->db->where('id',$id);
    $this->db->delete('datasiswa');
  }

}
