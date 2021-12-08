<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FirebaseService;

class FirebaseController extends Controller
{
    public function index()
    {
        $firebase = (new FirebaseService())->sendNotif([]);

        dd($firebase);

        $user->notify( new SendNotification() );
    }
}
