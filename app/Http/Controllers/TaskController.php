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
          $task2 = 'bilangan fibonnaci';
          break;
        case ($niu == 1|| $niu == 2):
          $task2 = 'bilangan prima';
          break;
        case ($niu == 1|| $niu == 2):
          $task2 = 'bilangan genap';
          break;
        case ($niu == 1|| $niu == 2):
          $task2 = 'bilangan ganjil';
          break;
        case ($niu == 1|| $niu == 2):
          $task2 = 'bilangan persegi';
          break;
        case ($niu == 1|| $niu == 2):
          $task2 = 'bilangan persegi panjang';
          break;
        case ($niu == 1|| $niu == 2):
          $task2 = 'bilangan segitiga';
          break;
        case ($niu == 1|| $niu == 2):
          $task2 = 'bilangan segitiga pascal';
          break;
        case ($niu == 1|| $niu == 2):
          $task2 = 'bilangan pangkat dua';
          break;
        case ($niu == 1|| $niu == 2):
          $task2 = 'bilangan pangkat tiga';
          break;
      }
      return response()->json([
        'task1'=>'Ganti data kalian pada kolom',
        'task2'=>'Ubah password kalian ya!',
        'task3'=>'Buat fungsi untuk menampilkan '.$task2,
        'task4'=>'Buat'
      ]);
    }
}
