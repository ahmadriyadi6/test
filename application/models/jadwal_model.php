<?php

class Jadwal_model extends CI_Model{

	
	public function get($id=null)
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal');
        if($id != null){
            $this->db->where('id', $id);
        }
        $query = $this->db->get();
        return $query;
    }
	public function buat_kode()
		{
			$this->db->select('RIGHT(tb_jadwal.no_agenda,3) as kode', FALSE);
			$this->db->order_by('no_agenda','DESC');
			$this->db->limit(1);

			$query=$this->db->get('tb_jadwal');

			if($query->num_rows()<>0)
			{
				$data=$query->row();
				$kode=intval($data->kode)+1;
			}
			else
			{
				$kode=1;
			}
			$kode_max=str_pad($kode,3,"0",STR_PAD_LEFT);
			$kode_jadi="Kode-".$kode_max;
			return $kode_jadi;
		}
		public function tampil_data($table)
		{
			return $this->db->get($table);
		}
		public function ambil_id_jadwal($id)
		{
		$hasil = $this->db->where('id',$id)->get('tb_jadwal');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		}else{
			return false;
		}
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