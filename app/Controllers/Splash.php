<?php namespace App\Controllers;

class Splash extends BaseController
{
	public function index()
	{  
		echo view('header');
		echo view('splash_first');
		echo view('footer');
	}
	
	public function clearance() 
    {
        echo view('header');
        echo view('apply');
        echo view('footer');
    }
   //--------------------------------------------------------------------
}
