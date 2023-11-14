<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->land = new HomeModel();
    }

    public function index()
    {
        $ipadress=$this->request->getIPAddress();
        $date=date('Y-m-d');

        $arrayData = [
            'id' => "",
            'ip_address' => $ipadress,
            'date'=>$date
        ];

        $result = $this->land->datainsert('visitor', $arrayData);

        if($result) {
            
            $data = [
                'profil' => $this->land->dataget('profil_desa')->getResultArray(),
                'fotos' => $this->land->dataget('foto')->getResultArray(),
                'harga' => $this->land->dataget('harga_tiket','id_hari, id_tempat','ASC')->getResultArray(),
                'fasilitas' => $this->land->dataget('fasilitas')->getResultArray(),
                'review' => $this->land->dataget('reviewer')->getResultArray(),
            ];

            $data['title'] = "Desa Dayu Desa Wisata | Karanganyar";
            $data['keyword'] = "wisata karanganyar";
            $data['description'] = "karanganyar memiliki beragram tempat wisata dan 4 diantaranya ada di desa dayu";
            // return view('welcome_message');
            return view('landing', $data);
        } else {
            echo "gagal ambil ip";
        }
    }
}