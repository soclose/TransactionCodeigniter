<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trytransaction extends CI_Controller {

	public function index()
	{
		$this->load->view('Trytransaction/add');
	}

	public function add()
	{
		
		$datenow = getdate();
		$year = $datenow['year'];
		$runningnumber = 1;
		$vidcv = "";


		$this->load->database();
		/// skema pemberian id cvp+4 digit tahun+3 digit running number
		/// skema -> cvpyyyyxxx

		/// get running number id
		$getid = $this->db->query("SELECT ifnull(MAX(SUBSTRING(VIDCV,8,20)), 0) AS NUMBER FROM TBL_HEADERCV WHERE SUBSTRING(VIDCV,4,4) = '".$year."'");
		$row = $getid->row_array();

		if (isset($row))
		{
			$runningnumber = $row['NUMBER'];
		}

		if($runningnumber < 10)
		{
			$vidcv = "CVP".$year."00".($runningnumber+1);
		}
		if($runningnumber >= 10 && $runningnumber < 100)
		{
			$vidcv = "CVP".$year."0".($runningnumber+1);
		}
		if($runningnumber >= 100)
		{
			$vidcv = "CVP".$year.($runningnumber+1);
		}

		$name 		= $this->input->post('nama');
		$alamat 	= $this->input->post('alamat');
		$telp 		= $this->input->post('telp');
		$email 		= $this->input->post('email');

		/// start transaction for insert all data to database
		$this->db->trans_begin();

		/// query insert data to header cv
		$this->db->query("INSERT INTO TBL_HEADERCV(VIDCV,VNAME,VALAMAT,VTELP,VEMAIL)VALUES('$vidcv','$name','$alamat','$telp','$email')");
		
		/// region detail riwayat sekolah
		$namasekolah = $this->input->post('namesekolah');
		$statuskelulusan = $this->input->post('vstatus');
		$tahunkelulusan = $this->input->post('tahunlulus');

		$x = 1;
		$getnidsekolah = $this->db->query("SELECT ifnull(MAX(NID), 0) AS NUMBER FROM TBL_DTLSEKOLAHCV");
		$row = $getnidsekolah->row_array();
		$nsekolahid = 0;

		if (isset($row))
		{
			$nsekolahid = $row['NUMBER'];
		}

		for($i = 0; $i < count($namasekolah); $i++)
		{
			$nsekolahid = $nsekolahid + $x;
			$this->db->query("INSERT INTO TBL_DTLSEKOLAHCV(VIDCV,NID,VNAMESEKOLAH,VSTATUS,VYEAR)VALUES('$vidcv','$nsekolahid','$namasekolah[$i]','$statuskelulusan[$i]','$tahunkelulusan[$i]')");
		}

		/// region detail riwayat pekerjaan
		$namaperusahaan = $this->input->post('nameperusahaan');
		$lamabekerja = $this->input->post('lamakerja');
		
		$x = 1;
		$getnidpengalaman = $this->db->query("SELECT ifnull(MAX(NID), 0) AS NUMBER FROM TBL_HISTORYPEKERJAAN");
		$row = $getnidpengalaman->row_array();
		$npengalamanid = 0;

		if (isset($row))
		{
			$npengalamanid = $row['NUMBER'];
		}

		for($i = 0; $i < count($namaperusahaan); $i++)
		{
			$npengalamanid = $npengalamanid + $x;
			$this->db->query("INSERT INTO TBL_HISTORYPEKERJAAN(VIDCV,NID,VNAMEPERUSAHAAN,VLAMAPENGALAMAN)VALUES('$vidcv','$npengalamanid','$namaperusahaan[$i]','$lamabekerja[$i]')");
		}

		if ($this->db->trans_status() === FALSE)
		{
			$this->db->trans_rollback();
			echo "Failed Input Data";
		}
		else
		{
			$this->db->trans_commit();
			echo "Success Input Data";
		}
	}
}
