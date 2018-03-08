<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {
	
	public function daftar () {
		$list = $this->db->get('posts');
		return $list->result();
	}


	public function find ($id)
	{
		$find = $this->db->get('posts', ['id'=>$id])->row();
		return $find;
	}

	public function store ($data)
	{
		$this->db->insert('posts', $data);
	}

	public function update ($id, $data)
	{
		$this->db->where(['id'=>$id])->update('posts', $data);
	}

	public function destroy ($id)
	{
		$this->db->delete('posts', ['id' => $id]);
	}

}