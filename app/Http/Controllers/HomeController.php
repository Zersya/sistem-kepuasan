<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Kepuasan;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $lava = app('lavacharts');
      $data = $lava->DataTable();

      $data ->addDateColumn('Waktu')
            ->setDateTimeFormat('Y-m-d')
            ->addNumberColumn('Puas')
            ->addNumberColumn('Tidak Puas');

          $tanggal = $this->getDateStatusKepuasan();
          $curTanggal = '0';

          if($tanggal != null){
            foreach ($tanggal as $key => $value) {
              $puas = $this->getStatusKepuasan("Puas",$value);
              $tpuas = $this->getStatusKepuasan("Tidak Puas",$value);


              if($curTanggal != $value){
                $curTanggal = $value;
                $data->addRow([
                  $value, $puas, $tpuas,
                ]);
              }
            }
          }

      $lava->ColumnChart('Data', $data, [
          'title' => 'Data Kepuasan',
          'legend'=> ['position' => 'in'],
          'seriesType'=>'bars',
          'barGroupWidth'=>'100%',
       ]);
      //return view('home', array('lava' => $lava, 'dataLengkap' => $this->getKepuasanData()));
      return view('home', array('lava' => $lava, 'dataLengkap' => $this->getKepuasanData()));
    }

    public function getKepuasanData(){
      $data =  Kepuasan::all();

      return $data;
    }

    public function getStatusKepuasan($status, $tanggal){
      $kepuasan = Kepuasan::where('Status', $status)->where('tanggal', $tanggal)->count();
      return $kepuasan;
    }

    public function getDateStatusKepuasan(){
      $tanggal = Kepuasan::all()->pluck('tanggal');
      return $tanggal;
    }

    public function truncate(){
      Kepuasan::truncate();
      return Redirect::to('/home');
    }
}
