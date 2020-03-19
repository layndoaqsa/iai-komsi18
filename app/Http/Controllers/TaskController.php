<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

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
      switch (true) {
        case ($niu == 431738|| $niu == 431744):
          $no1 = 'sd,email';
          $no2 = 'bilangan fibonnaci';
          break;
        case ($niu == 431732|| $niu == 425965):
          $no1 = 'no_hp,sma';
          $no2 = 'bilangan prima';
          break;
        case ($niu == 431728|| $niu == 425961):
          $no1 = 'sma,hobi';
          $no2 = 'bilangan genap';
          break;
        case ($niu == 432187|| $niu == 425973):
          $no1 = 'hobi,asal';
          $no2 = 'bilangan ganjil';
          break;
        case ($niu == 432185|| $niu == 425975):
          $no1 = 'asal,tanggal_lahir';
          $no2 = 'bilangan persegi';
          break;
        case ($niu == 431736|| $niu == 425959):
          $no1 = 'no_hp,tanggal_lahir';
          $no2 = 'bilangan persegi panjang';
          break;
        case ($niu == 425979|| $niu == 431742):
          $no1 = 'sma,email';
          $no2 = 'bilangan segitiga';
          break;
        case ($niu == 425963|| $niu == 425977):
          $no1 = 'no_hp, asal';
          $no2 = 'bilangan segitiga pascal';
          break;
        case ($niu == 425969|| $niu == 431734):
          $no1 = 'no_hp,hobi';
          $no2 = 'bilangan pangkat dua';
          break;
        case ($niu == 431740 || $niu == 431730):
          $no1 = 'email,smp';
          $no2 = 'bilangan pangkat tiga';
          break;
      }

      return response()->json([
        'data'=> DB::select('select '.$kolom. ' from users'),
        'tabel'=>'users:id,password,'.$kolom.'\n
                  gits:id,user_id,git,created_at,updated_at',
        'no1'=>'Ganti data '.$kolom.' kalian',
        'no2'=>'Ubah password kalian!',
        'no3'=>'Buat fungsi untuk menampilkan '.$no2,
        'no5'=>'Upload project kalian pada (github/gitlab) lalu link repo kalian disimpan di tabel gits',
        'lihat jawabanmu'=> 'Akses endpoint '.url('cek/{no1(atau)no2(atau)no5}/{niu}').' untuk melihat jawabanmu, jangan lupa gunakan token yang sudah digenerate',
      ]);
    }

    public function cek_task($no, $niu){
      switch (true) {
        case ($niu == 431738|| $niu == 431744):
          $no1 = 'sd,email';
          break;
        case ($niu == 431732|| $niu == 425965):
          $no1 = 'no_hp,sma';
          break;
        case ($niu == 431728|| $niu == 425961):
          $no1 = 'sma,hobi';
          break;
        case ($niu == 432187|| $niu == 425973):
          $no1 = 'hobi,asal';
          break;
        case ($niu == 432185|| $niu == 425975):
          $no1 = 'asal,tanggal_lahir';
          break;
        case ($niu == 431736|| $niu == 425959):
          $no1 = 'no_hp,tanggal_lahir';
          break;
        case ($niu == 425979|| $niu == 431742):
          $no1 = 'sma,email';
          break;
        case ($niu == 425963|| $niu == 425977):
          $no1 = 'no_hp, asal';
          break;
        case ($niu == 425969|| $niu == 431734):
          $no1 = 'no_hp,hobi';
          break;
        case ($niu == 431740 || $niu == 431730):
          $no1 = 'email,smp';
          break;
      }
      switch ($no) {
        case 'no1':
          $data = DB::select('select '.$no1.' from users where niu='.$niu);
          break;
        case 'no2':
          $user = User::where('niu',$niu)->first();
          if(Hash::check($user->password,$niu)){
            $data = 'Wah password kamu belum berhasil di ganti nih.';
          } else {
            $data = 'Yeaay selamat, password kamu sudah berhasil dirubah. Tapi hati kamu nggak berubah kan? Tetep buat aku?';
          }
          break;
        case 'no5':
          $id = User::where('niu',$niu)->first()->id;
          $data = DB::select('select * from gits where user_id=$id');
          break;
      }
      return $data;
    }
}
