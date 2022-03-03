<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Monitoring Realtime SCADA'
        ];
        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jalan Gatot Subroto Nomor 5',
                    'kota' => 'Semarang'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
