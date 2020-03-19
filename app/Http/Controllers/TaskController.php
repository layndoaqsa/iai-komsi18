<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function task(Request $request, $niu){
      switch ($true) {
        case ($niu == 1|| $niu == 2):
          $no1;
          $no2 = 'bilangan fibonnaci';
          break;
        case ($niu == 1|| $niu == 2):
          $no1;
          $no2 = 'bilangan prima';
          break;
        case ($niu == 1|| $niu == 2):
          $no1;
          $no2 = 'bilangan genap';
          break;
        case ($niu == 1|| $niu == 2):
          $no1;
          $no2 = 'bilangan ganjil';
          break;
        case ($niu == 1|| $niu == 2):
          $no1;
          $no2 = 'bilangan persegi';
          break;
        case ($niu == 1|| $niu == 2):
          $no1;
          $no2 = 'bilangan persegi panjang';
          break;
        case ($niu == 1|| $niu == 2):
          $no1;
          $no2 = 'bilangan segitiga';
          break;
        case ($niu == 1|| $niu == 2):
          $no1;
          $no2 = 'bilangan segitiga pascal';
          break;
        case ($niu == 1|| $niu == 2):
          $no1;
          $no2 = 'bilangan pangkat dua';
          break;
        case ($niu == 1|| $niu == 2):
          $no1;
          $no2 = 'bilangan pangkat tiga';
          break;
      }

      return response()->json([
        'tabel'=>'users:id,password\n
                  gits:id,user_id,git,created_at,updated_at',
        'no1'=>'Ganti data kalian',
        'no2'=>'Ubah password kalian!',
        'no3'=>'Buat fungsi untuk menampilkan '.$no2,
        'no4'=>'Buat',
        'no5'=>'Upload project kalian pada (github/gitlab) lalu link repo kalian disimpan di tabel gits'
      ]);
    }

    public function cek_task($no, $niu){
    }
}
