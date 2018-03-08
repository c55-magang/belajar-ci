<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PostController extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model('post');
		$this->load->library('form_validation');
	}

	public function index () 
	{
		$posts = $this->post->daftar();
		$this->load->view('post/index', compact('posts'));
	}
	
	public function create () 
	{
		$this->load->view('post/create');
	}

	public function edit ($id) 
	{
		$post = $this->post->find($id);
		$this->load->view('post/edit', compact('post'));
	}

	public function store ()
	{
		
		$this->post->store($this->input->post());

		redirect('postcontroller', 'refresh');
	}

	public function update ($id) 
	{
		$this->post->update($id, $this->input->post());
		redirect('postcontroller', 'refresh');
	}

	public function destroy ($id)
	{
		$this->post->destroy($id);
		redirect('postcontroller', 'refresh');
	}

}
