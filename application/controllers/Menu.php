<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model');
		is_logged_in();
	}

	public function index()
	{
		$data['title'] = 'Menu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('templates/footer');
		} else {
			$this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">New menu added</div>');
			redirect('menu');
		}
		
		
	}

	public function update($id)
	{
		$data['title'] = 'Update Page';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['menus'] = $this->Menu_model->getAllById($id);

		$this->form_validation->set_rules('menu', 'Menu', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/update', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Menu_model->updateMenus();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Menu changed</div>');
			redirect('menu');
		}
		
	}

	public function updatesubmenu($id)
	{
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['submenu'] = $this->Menu_model->getSubMenuId($id);

		$this->form_validation->set_rules('title', 'Title', 'required');

		if($this->form_validation->run() == FALSE) {
			$data['title'] = 'Update Submenu';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/updatesubmenu', $data);
			$this->load->view('templates/footer');
		} else {
			$this->Menu_model->upSubMenu();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Submenu changed</div>');
			redirect('menu/submenu');
		}

	}


	public function delete($id)
	{
		$this->Menu_model->deleteMenu($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">menu successfully deleted</div>');
		redirect('menu');
	}

	public function deletesmenu($id)
	{
		$this->Menu_model->delsubmenu($id);
		$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Submenu successfully deleted</div>');
		redirect('menu/submenu');
	}


	public function submenu()
	{
		$data['title'] = 'Submenu Management';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['subMenu'] = $this->Menu_model->getSubMenu();
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'Url', 'required');
		$this->form_validation->set_rules('icon', 'Icon', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')
			];
			$this->db->insert('user_sub_menu', $data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">menu successfully deleted</div>');
			redirect('menu/submenu');
		}
		
	}







}