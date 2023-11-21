<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        $client = new Client();

        $url = 'http://localhost:8001/api/info';
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $jiwa = $contentArray['jiwa'];
        $kk = $contentArray['kk'];
        $laki = $contentArray['laki-laki'];
        $perempuan = $contentArray['perempuan'];
        $sukaDamaiJiwa = $contentArray['sukaDamaiJiwa'];
        $sukaDamaiKk = $contentArray['sukaDamaiKk'];
        $sukaDamaiLaki = $contentArray['sukaDamaiLaki'];
        $sukaDamaiPerempuan = $contentArray['sukaDamaiPerempuan'];
        $kebunBaruJiwa = $contentArray['kebunBaruJiwa'];
        $kebunBaruKk = $contentArray['kebunBaruKk'];
        $kebunBaruLaki = $contentArray['kebunBaruLaki'];
        $kebunBaruPerempuan = $contentArray['kebunBaruPerempuan'];
        $rejoSariJiwa = $contentArray['rejoSariJiwa'];
        $rejoSariKk = $contentArray['rejoSariKk'];
        $rejoSariLaki = $contentArray['rejoSariLaki'];
        $rejoSariPerempuan = $contentArray['rejoSariPerempuan'];
        $margoYosoJiwa = $contentArray['margoYosoJiwa'];
        $margoYosoKk = $contentArray['margoYosoKk'];
        $margoYosoLaki = $contentArray['margoYosoLaki'];
        $margoYosoPerempuan = $contentArray['margoYosoPerempuan'];
        $payungRajaJiwa = $contentArray['payungRajaJiwa'];
        $payungRajaKk = $contentArray['payungRajaKk'];
        $payungRajaLaki = $contentArray['payungRajaLaki'];
        $payungRajaPerempuan = $contentArray['payungRajaPerempuan'];
        


        return view('dashboard/index',[
            'jiwa'=>$jiwa,
            'kk'=>$kk,
            'laki'=>$laki,
            'perempuan'=>$perempuan,
            'sukaDamaiJiwa'=>$sukaDamaiJiwa,
            'sukaDamaiKk'=>$sukaDamaiKk,
            'sukaDamaiLaki'=>$sukaDamaiLaki,
            'sukaDamaiPerempuan'=>$sukaDamaiPerempuan,
            'kebunBaruJiwa'=>$kebunBaruJiwa,
            'kebunBaruKk'=>$kebunBaruKk,
            'kebunBaruLaki'=>$kebunBaruLaki,
            'kebunBaruPerempuan'=>$kebunBaruPerempuan,
            'rejoSariJiwa'=>$rejoSariJiwa,
            'rejoSariKk'=>$rejoSariKk,
            'rejoSariLaki'=>$rejoSariLaki,
            'rejoSariPerempuan'=>$rejoSariPerempuan,
            'margoYosoJiwa'=>$margoYosoJiwa,
            'margoYosoKk'=>$margoYosoKk,
            'margoYosoLaki'=>$margoYosoLaki,
            'margoYosoPerempuan'=>$margoYosoPerempuan,
            'payungRajaJiwa'=>$payungRajaJiwa,
            'payungRajaKk'=>$payungRajaKk,
            'payungRajaLaki'=>$payungRajaLaki,
            'payungRajaPerempuan'=>$payungRajaPerempuan,
        ]);
    }
}
