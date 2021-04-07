<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siswa extends Controller
{
   function oprasiSiswa(){

    $data = DB::table('siswa')->get();

    return view('list',['data' =>$data]);
   }
}
