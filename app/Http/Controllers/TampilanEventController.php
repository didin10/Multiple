<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use Illuminate\Support\Facades\DB;
use \Validator,\Input,\Redirect,\Session;

class TampilanEventController extends Controller
{
    public function index()
    {

         $even = Events::all();
         return view('Tampilan_Event.tampilan_event',compact('even'));
    }
}
