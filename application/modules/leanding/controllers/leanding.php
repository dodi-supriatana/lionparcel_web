<?php
defined('BASEPATH') or exit('No direct script access allowed');

class leanding extends MX_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Mleanding");
	}

	private function djson($value = array())
	{
		$json = json_encode($value);
		$this->output->set_header("Access-Control-Allow-Origin: *");
		$this->output->set_header("Access-Control-Expose-Headers: Access-Control-Allow-Origin");
		$this->output->set_status_header(200);
		$this->output->set_content_type('application/json');
		$this->output->set_output($json);
	}

	public function index()
	{
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		// $data['city']=$this->Mleanding->get_city();
		$this->load->view('layout/leanding_header');
		$this->load->view('main');
		$this->load->view('layout/leanding_footer', $script);
	}

	public function getcity()
	{
		$json = [];
		$word = $this->input->get('q');
		if (!empty($word)) {
			$query = $this->db->query("SELECT w.3lc as id,CONCAT( w.kelurahan, ', ',w.kecamatan, ', ', w.type ,' ', w.kab_kota, ', ',w.provinsi) as text FROM wilayah w WHERE CONCAT( w.kelurahan, ', ',w.kecamatan,' ', w.kab_kota, ' ',w.provinsi) like '%" . $word . "%' GROUP BY kecamatan limit 5 ");
			$json = $query->result();
		}
		echo json_encode($json);
		// $json = [];
		// // $this->load->database();
		// if(!empty($this->input->get("q"))){
		// 	$this->db->like('kelurahan', $this->input->get("q"));
		// 	$query = $this->db->select('3lc as id,kelurahan as text')
		// 				->limit(10)
		// 				->get("wilayah_tabel");
		// 	$json = $query->result();
		// }


		// echo json_encode($json);
	}

	public function get_marker($lat = "", $long = "")
	{

		$json = [];
		if ($lat == "" or $long == "") {
			$query = $this->db->query("select * from tabel_agen");
			$json = $query->result();
		}

		echo json_encode($json);
	}

	public function tracking()
	{
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('layout/leanding_header');
		$this->load->view('tracking');
		$this->load->view('layout/leanding_footer', $script);
	}

	public function find()
	{
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);



		$this->load->view('layout/leanding_header');
		$this->load->view('find');
		$this->load->view('layout/leanding_footer', $script);
	}

	public function promo()
	{
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('layout/leanding_header');
		$this->load->view('promo');
		$this->load->view('layout/leanding_footer', $script);
	}

	public function agen()
	{
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('layout/leanding_header');
		$this->load->view('agen');
		$this->load->view('layout/leanding_footer', $script);
	}

	public function promodetail()
	{
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		$this->load->view('layout/leanding_header');
		$this->load->view('promodetail');
		$this->load->view('layout/leanding_footer', $script);
	}
}
