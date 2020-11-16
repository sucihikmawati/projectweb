<?php namespace App\Controllers;

class Pages extends BaseController
{

	public function  index()
	{
		return view('Pages/buttons');
	}
		public function timeline()
	{
		return view('Pages/timeline');
	}
	public function  icons()
	{
		return view('Pages/icons');
	}
}