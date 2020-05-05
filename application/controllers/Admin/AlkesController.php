<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AlkesController extends CI_Controller
{
	public function __construct()
	{
        parent::__construct();
        if ($this->session->userdata('logged_in' !== TRUE)) {
			redirect('/');	
		}
	}
	
	public function index()
	{
		if ($this->session->userdata('role') === '2') {
			$data = array(
				'title' => "Data Layanan"
			);
			$data['admin']	 	= $this->db->query("SELECT * FROM alkes")->result();
			$this->load->view('pages/Admin/alkes/index.php', $data);
		} else {
			echo "
				<script>
					alert('Access Denied');
					history.go(-1);
				</script>
			";	
		}
	}

	public function create()
	{
		if ($this->session->userdata('role') === '2') {
			$data = array(
				'title' => "Data Layanan"
			);
			$this->load->view('pages/Admin/alkes/add', $data);
		} else {
			echo "
				<script>
					alert('Access Denied');
					history.go(-1);
				</script>
			";	
		}
	}

	public function store()
    {
		$name              		= $this->input->post('name');
		$stok              		= $this->input->post('stok');
		$minggu 	            = $this->input->post('minggu');
		$bulan 	            	= $this->input->post('bulan');
		
		$data= array(
			'name'			=> $name,
			'stok'			=> $stok,
			'minggu'		=> $minggu,
			'bulan'			=> $bulan
		);
	
		$this->db->insert('alkes', $data);
		redirect('admin/service/alkes');
	}

	public function edit($id)
	{
		if ($this->session->userdata('role') === '2') {
			$data = array(
				'title' => "Data Layanan"
			);
			$where = array('id_alkes' => $id);
			$data['admin'] = $this->db->query("SELECT * FROM alkes WHERE id_alkes='$id'")->result();
			$this->load->view('pages/Admin/alkes/edit', $data);
		} else {
			echo "
				<script>
					alert('Access Denied');
					history.go(-1);
				</script>
			";	
		}
	}

	public function update()
    {
		$id						= $this->input->post('id');
		$name              		= $this->input->post('name');
		$stok              		= $this->input->post('stok');
		$minggu 	            = $this->input->post('minggu');
		$bulan 	            	= $this->input->post('bulan');
		
		$data= array(
			'name'			=> $name,
			'stok'			=> $stok,
			'minggu'		=> $minggu,
			'bulan'			=> $bulan
		);

		$where = array('id_alkes' => $id);
		$this->db->update('alkes', $data, $where);
		redirect('admin/service/alkes'); 
	}

	public function delete($id)
    {
		$where = array('id_alkes' => $id);
		$this->db->delete('alkes', $where);
		redirect('admin/service/alkes');     
    }
}