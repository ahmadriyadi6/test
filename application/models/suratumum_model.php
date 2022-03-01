<?php

class Suratumum_model extends CI_Model{

	
	public function get($id=null)
    {
        $this->db->select('*');
        $this->db->from('tb_suratumum');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

	public function ambil_id_suratumum($id)
	{
	$hasil = $this->db->where('id',$id)->get('tb_suratumum');
	if($hasil->num_rows() > 0){
		return $hasil->result();
	}else{
		return false;
	}
	}
	
		public function tampil_data($table)
		{
			return $this->db->get($table);
		}
		
		public function input_data($data,$table)
		{
			$this->db->insert($table,$data);
		}

		public function edit_data($where,$table)
		{
			return $this->db->get_where($table,$where);
		}

		public function update_data($where,$data,$table)
		{
			$this->db->where($where);
			$this->db->update($table,$data);
		}	
		
		public function hapus_data($where,$table)
		{
			$this->db->where($where);
			return $this->db->delete($table);
		}
	}