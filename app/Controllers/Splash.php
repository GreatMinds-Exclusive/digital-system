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
    
    public function welcome()
    {
        echo view('heading');
        echo view('welcome_back');
        echo view('footing');
    }
    
    public function dashboard()
    {
        echo view('head');
        echo view('dash_admin');
        echo view('foot');
    }
    
    public function faqs()
    {
        echo view('frequents');
        echo view('footer');
    }

        //--------------------------------------------------------------------
}
