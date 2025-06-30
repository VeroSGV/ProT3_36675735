<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): void 
    {
        $data['titulo'] = 'pagina principal';
        echo view('front/head_view',$data);
        echo view('front/navbar_vew');
        echo view('front/principal_ultimo');
        echo view('front/footer_view');
    }

    public function Nosotros():void
    {
        $data['titulo'] = 'Nosotros';
        echo view('front/head_view', $data);
        echo view('front/navbar_vew');
        echo view('front/Nosotros');
        echo view('front/footer_view');
    }


    public function login():void 
    {
        $data['titulo'] = 'login'
        echo view('front/head_view', $data);
        echo view('front/navbar_vew');
        echo view('front/login');
        echo view('front/footer_view');
    }

   
}


