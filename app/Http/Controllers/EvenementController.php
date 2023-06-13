<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;

class EvenementController extends Controller
{

    public function index()
    {
        $events = Evenement::all();
        return response()->json([
            'status' => 200,
            'message' => $events
        ]);
    }

       //get events by idhotel
       public function geteventsbyidhotel($id_hotel)
       {

           $events = Evenement::where('id_hotel', $id_hotel)->get();
           return response()->json([
               'status' => 200,
               'event' => $events,
           ]);
       }
}
