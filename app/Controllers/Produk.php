<?php namespace App\Controllers;

use CodeIgniter\Controllers;
use App\Models\ProdukModel;

class Produk extends BaseController
{
	public function index()
	{
		$model = new ProdukModel();
		$data['data']= $model->getProduk();

		echo view ('produk/index', $data);
	}
}