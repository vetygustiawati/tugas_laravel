<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
	function showAbout() {
		return view('about2');
	}
	function showProfil() {
		return view('profil2');
	}
	function showProduct() {
		return view('product2');
	}
	function showKategori() {
		return view('kategori2');
	}
	function showPelanggan() {
		return view('pelanggan');
	}
	function showSupplier() {
		return view('supplier');
	}
}
