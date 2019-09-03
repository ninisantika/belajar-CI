<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemula extends CI_Controller
{
	// // memanggil sesuai functions di halaman web
	//  public function edi()
	// 	{
	// 	echo "aku adalah lelaki dan nama aku edi prayitno";
	// 	echo "aku seorang kapiten";
	// 	}
	// public function nisan()
	// 	{
	// 	echo "aku si doyan jajan";
	// 	}
		// kalo mau memanggil file html.php difolder views
	// public function index()
	// 	{
	// 		$this->load->view('hello');
	// 	}
	public function index()
	 	{
	 	$this->load->view('tabel');
	 	}
	// public function index()
	// {
	// 	  if($_this->input->POST('submit'))){
	// 		$nama = $this->input->POST ['Nama'];
	// 	  $tmplahir = $this->input->POST ['TempatLahir'];
	//
	// 	  echo "NAMA : $nama";
	// 	  echo "TempatLahir : $tmplahir";
	// 		}
	// 		$this->load->view('tabel');
	// }
}
?>
