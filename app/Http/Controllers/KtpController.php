<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client = new Client();

        $url = 'http://babussalam.egampong.com/api/ktp';
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data = $contentArray['data'];
        return view('dapenduk.ktp', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function form(string $id)
    {
        $client = new Client();
        $url = 'http://babussalam.egampong.com/api/kk/' . $id;
        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        $data = $contentArray['data'];
        return view('dapenduk.form', ['data' => $data]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();

        $id = $request->id;
        $kk_id = $request->kk_id;
        $nama_lengkap = strtoupper($request->nama_lengkap);
        $tempat_lahir = strtoupper($request->tempat_lahir);
        $tanggal_lahir = $request->tanggal_lahir;
        $jenis_kelamin = $request->jenis_kelamin;
        $agama = $request->agama;
        $pendidikan = strtoupper($request->pendidikan);
        $pekerjaan = strtoupper($request->pekerjaan);
        $status_perkawinan = $request->status_perkawinan;
        $status_keluarga = $request->status_keluarga;
        $nama_ayah = strtoupper($request->nama_ayah);
        $nama_ibu = strtoupper($request->nama_ibu);

        $parameter = [
            'id' => $id,
            'kk_id' => $kk_id,
            'nama_lengkap' => $nama_lengkap,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'status_perkawinan' => $status_perkawinan,
            'status_keluarga' => $status_keluarga,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu,
        ];
        $url = 'http://babussalam.egampong.com/api/ktp';
        $response = $client->request('POST', $url, [
            'headers' => ['Content-type' => 'application/json'],
            'body' => json_encode($parameter)
        ]);
        $content = $response->getBody()->getContents();
        $contentArray = json_decode($content, true);
        if ($contentArray['status'] != true) {
            $error = $contentArray['data'];
            return redirect()->to('kk')->withErrors($error)->withInput();
        } else {
            return redirect()->to('kk')->with('success', 'Berhasil menambahkan data keluarga');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
