<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Calendar;
use App\Event;
use App\Peminjaman;
class EventController extends Controller
{
    public function index()
    {
       $peminjaman = [];
       $data = Peminjaman::all();
       if($data->count()){
          foreach ($data as $key => $value) {
            $peminjaman[] = Calendar::event(
                $value->title,
                true,
                new \DateTime($value->waktu_mulai),
                new \DateTime($value->waktu_selesai.' +1 day')
            );
          }
       }
      $calendar = Calendar::addEvents($peminjaman); 
      return view('mycalendar', compact('calendar'));
    }
}