<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\KeyController;

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
      $key = $niu;
      $niu = (new KeyController)->my_simple_crypt($niu,'d');

      switch ($niu) {
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
        case ($niu == 425963|| $niu == 425977 || $niu == 432181):
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
        // 'data'=> DB::select('select '.$no1. ' from users'),

        'tugas' => [
          'no1'=>'Ganti data '.$no1.' kamu',
          'no2'=>'Ubah password kamu!',
          'no3'=>'Buat fungsi untuk menampilkan '.$no2,
          'no4'=>'Upload fotomu, lalu simpan nama fotomu+extensionnya di kolom avatar',
          'no5'=>'Upload project kamu pada (github/gitlab) lalu link.kan repo kamu dengan menyimpannya di tabel gits',
        ],
        'cara mengerjakan' => [
          '1' => 'ubah .env kalian sesuai dengan .......',
          '2' => 'kerjakan soal no1 dan no2 seperti biasa',
          '3' => 'kerjakan soal no3 didalam TaskController(jika belum ada, silahkan dibuat dulu controllernya)',
          '4' => 'soal no4 caranya buatlah sebuah fungsi untuk upload file(image) lalu nanti fotomu dipindahkan ke alamat url() dengan method move yang disediakan oleh php',
          '5' => 'kumpulkan melalui link github/gitlab. Ini berarti kamu harus membuat method post ke dalam table gits',
        ],
        'petunjuk table'=>[
          'tabel users'=>'id,password,avatar,'.$no1.',avatar,created_at,updated_at',
          'tabel gits'=>'id,user_id,git,created_at,updated_at',
        ],
        'lihat jawabanmu'=> 'Akses endpoint '.url('api/cek/{no1(atau)no2(atau)no4(atau)no5}/'.$key).' dengan method GET untuk melihat jawabanmu, jangan lupa gunakan token yang sudah digenerate',
        'keterangan' => 'Tugas ini adalah tugas untuk 1 pertemuan. Untuk tugas selanjutnya, yaitu presentasi kelompok mengenai Tugas Akhir IAI.',
        'Point-point presentasi pada tugas pertemuan selanjutnya' => [
          '1.' => 'List API yang digunakan.',
          '2.' => 'Proses keterkaitan satu API dengan API yg lain',
          '3.' => 'Gambaran sistem yg akan dibuat',
          '4.' => 'Apakah menggunakan API tsb ada cara2 khusus seperti harus mendaftar, dan sebgainya. Bisa dijelaskan'
          ]
        ]);
    }

    public function cek_task($no, $niu){
      $niu = (new KeyController)->my_simple_crypt($niu,'d');
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
        case ($niu == 425963|| $niu == 425977 || $niu == 432181):
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
          if(Hash::check($niu,$user->password)){
            $data = 'Wah password kamu belum berhasil di ganti nih. Semangat ya Kamu, nggak boleh nyerah!';
          } else {
            $data = 'Yeaay selamat, password kamu sudah berhasil dirubah. Tapi hati kamu nggak berubah kan? Tetep buat aku?';
          }
          break;
        case 'no4':
          $data = DB::select('select avatar from users where niu='.$niu);
          break;
        case 'no5':
          $id = User::where('niu',$niu)->first()->id;
          $data = DB::select('select * from gits where user_id='.$id);
          break;
      }
      return response()->json($data);
    }
}
