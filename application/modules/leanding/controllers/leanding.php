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
		$data['maps'] = "";
		// $data['city']=$this->Mleanding->get_city();
		$this->load->view('layout/leanding_header');
		$this->load->view('main');
		$this->load->view('layout/leanding_footer', $script);
	}


	public function cektarif()
	{
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);


		$origin = $this->input->post('origin');
		$destinance = $this->input->post('destination');
		$weight = $this->input->post('kg');
		$data['harga'] = $this->db->query("SELECT
        rt.rate_id,
            rt.origin_3lc,
            rt.origin_city as dari,
            rt.destination_city AS ke,
            rt.product,
            date_format(created_date,' %d %M %Y')  as last_update,
            total * " . $weight . "  as final_price
        FROM
            rate_tabel rt 
        WHERE
            rt.origin_3lc = '" . $origin . "' 
			AND rt.destination_3lc = '" . $destinance . "'")->result();


		$data['competitor'] = $this->db->query("SELECT * FROM competitor WHERE origin_3lc='" . $origin . "' and destination_3lc='" . $destinance . "' and price !='' ORDER BY company desc, price desc ")->result();

		$this->load->view('layout/leanding_header');
		$this->load->view('cektarif', $data);
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
	}

	public function getcity2()
	{
		$json = [];
		// $word = $this->input->get('q');
		// if (!empty($word)) {
		$query = $this->db->query("SELECT CONCAT( w.kelurahan, ', ',w.kecamatan, ', ', w.type ,' ', w.kab_kota, ', ',w.provinsi) as nama, w.3lc as id FROM wilayah w GROUP BY kecamatan");
		$json = $query->result();
		// }

		$fp = fopen('json_data/data_wlayah.json', 'w');
		fwrite($fp, json_encode($json));
		fclose($fp);
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

	public function get_lat_long()
	{
		// $getloc = json_decode(file_get_contents("http://ipinfo.io/"));
		// $my_location= $getloc->loc; //to get city
		// $data = explode(',', $my_location);
		// $lat = $data[0];
		// $long = $data[1];

		// echo $long;
		// die();

		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);
		$address = $this->input->post('address');


		// $url='';
		$geocode = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&key=AIzaSyBmtZNz9aMpD-tDGdjX_ZmvkdCLe8orp7U&sensor=false');
		$output = json_decode($geocode);
		// print_r($output);
		// die();
		$lat = @$output->results[0]->geometry->location->lat;
		$lng = @$output->results[0]->geometry->location->lng;

		// $lat=$this->input->post('latitude');
		// $lng=$this->input->post('longitude');

		// echo $lat."<br> yo".$lng;
		// die();

		if (!empty($lat) or !empty($lng)) {

			$query = $this->db->query("SELECT tabel_agen.*, 
                    (6371 * acos(cos(radians(" . $lat . ")) 
                    * cos(radians(latitude)) * cos(radians(longitude) 
                    - radians(" . $lng . ")) + sin(radians(" . $lat . ")) 
                    * sin(radians(latitude)))) AS jarak 
                    FROM tabel_agen 
                    HAVING jarak < 5 ORDER BY jarak");

			$data = array();
			$lenght = $query->num_rows();
			foreach ($query->result() as $datas) {

				$row = array(
					'id_agent' => $datas->id_agent,
					'nama_agent' => $datas->nama_agent,
					'alamat_agent' => $datas->alamat_agent,
					'jam_operasional' => $datas->jam_operasional,
					'no_telepon' => $datas->no_telepon,
					'foto_1' => $datas->foto_1,
					'foto_2' => $datas->foto_2,
					'foto_3' => $datas->foto_3,
					'latitude' => (float) $datas->latitude,
					'longitude' => (float) $datas->longitude,
					'status' => $datas->status,
					'jarak' => $datas->jarak,
					// 'latitude' => (float)$datas->latitude,

				);
			}
			$data['maps'] = $query->result();
			$data['lat'] = $lat;
			$data['lng'] = $lng;
			// $data['coba']=$lat;
			// $data['coba2']=$lng;

			// }
		} else {
			$data['maps'] = [];
		}

		// print_r($data['maps']);
		// die();

		$this->load->view('layout/leanding_header');
		$this->load->view('find', $data);
		$this->load->view('layout/leanding_footer', $script);
	}

	public function tracking()
	{
		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);
		$data[] = "";
		if (!empty($this->input->post('sst_no'))) {
			$stt_no = $this->input->post('sst_no');
			$json = $this->get_tracking($stt_no);
			$data['tracking'] = json_decode($json);
			// print_r($data['tracking']);
			// die();
		}
		$this->load->view('layout/leanding_header');
		$this->load->view('tracking', $data);
		$this->load->view('layout/leanding_footer', $script);
	}

	public function get_tracking($stt_nos)
	{
		// die($stt_nos);

		$sst_no = $stt_nos;
		// die($sst_no);

		if (strpos($sst_no, '-') !== false) {
			$sst_no = $stt_nos;
			// echo $sst_no;
		} else {
			$string = $stt_nos;
			$replacement = '-';
			$new_string = substr_replace($string, $replacement, 2, 0);
			$sst_no = substr_replace($new_string, $replacement, 5, 0);
			// echo $sst_no;
		}
		// die();

		// die($new_string);
		$username = "lionparcel";
		$password = "lionparcel@123";
		$remote_url = 'http://lpapi.cargoflash.com/v3/stt/track?q=' . $sst_no;

		// Create a stream
		$opts = array(
			'http' => array(
				'method' => "GET",
				'header' => "Authorization: Basic " . base64_encode("$username:$password")
			)
		);

		$context = stream_context_create($opts);

		// Open the file using the HTTP headers set above
		$json = file_get_contents($remote_url, false, $context);

		// print($json);
		$output = json_decode($json);
		$panjang = @$output->stts[0]->history;
		// $panjang_history=count($panjang);
		$history = array();
		$i = 0;
		foreach ($panjang as $datas) {
			$row = array(
				"id" => @$output->stts[0]->history[$i]->row,
				"title" => @$output->stts[0]->history[$i]->remarks . " " . @$output->stts[0]->history[$i]->city . " (" . @$output->stts[0]->history[$i]->location . ")",
				"description" => substr(@$output->stts[0]->history[$i]->datetime, 0, 10) . " " . substr(@$output->stts[0]->history[$i]->datetime, 11, 8),
			);
			$history[] = $row;
			$i++;
		}
		$data = array(
			'no_resi' => @$output->stts[0]->stt_no,
			"sender_name" => @$output->stts[0]->sender_name,
			"reciver_name" => @$output->stts[0]->recipient_name,
			"origin" => @$output->stts[0]->origin,
			"destination" => @$output->stts[0]->destination,
			"current_status" => @$output->stts[0]->current_status,
			"berat" => @$output->stts[0]->chargeable_weight,
			"history" => $history,
		);

		return json_encode($data);
	}

	public function find($a=null, $b=null)
	{


		// $getloc = json_decode(file_get_contents("http://ipinfo.io/"));
		// $my_location = $getloc->loc; //to get city
		// $data = explode(',', $my_location);
		// $lat = $data[0];
		// $lng = $data[1];

		// die($a);

if ($a==null) {
	$this->load->view('layout/leanding_header');
	$this->load->view('find_temp');
}else{
	$lat=$a;
	$lng=$b;
}

		$script = array(
			'script' => TRUE,
			'script_url' => 'main_script'
		);

		if (!empty($lat) || !empty($lng)) {
			$query = $this->db->query("SELECT tabel_agen.*, 
                    (6371 * acos(cos(radians(" . $lat . ")) 
                    * cos(radians(latitude)) * cos(radians(longitude) 
                    - radians(" . $lng . ")) + sin(radians(" . $lat . ")) 
                    * sin(radians(latitude)))) AS jarak 
                    FROM tabel_agen 
                    HAVING jarak < 1.3 ORDER BY jarak");

			$data = array();
			$lenght = $query->num_rows();
			foreach ($query->result() as $datas) {

				$row = array(
					'id_agent' => $datas->id_agent,
					'nama_agent' => $datas->nama_agent,
					'alamat_agent' => $datas->alamat_agent,
					'jam_operasional' => $datas->jam_operasional,
					'no_telepon' => $datas->no_telepon,
					'foto_1' => $datas->foto_1,
					'foto_2' => $datas->foto_2,
					'foto_3' => $datas->foto_3,
					'latitude' => (float) $datas->latitude,
					'longitude' => (float) $datas->longitude,
					'status' => $datas->status,
					'jarak' => $datas->jarak,
					// 'latitude' => (float)$datas->latitude,

				);
			}
			$data['maps'] = $query->result();
			$data['lat'] = $lat;
			$data['lng'] = $lng;
			// print_r($data['maps']);
			// die('maps ada');
		} else {
			$data['maps'] = [];
			// die('maps kosong');
		}

		// print_r($data['maps']);
		// die();

		$this->load->view('layout/leanding_header');
		$this->load->view('find', $data);
		$this->load->view('layout/leanding_footer', $data);
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
