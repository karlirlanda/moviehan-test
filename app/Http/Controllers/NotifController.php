<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

use App\Notifications\emailnotification;

use Illuminate\Support\Facades\Notification;

class NotifController extends Controller
{
    public function sendnotification(Request $request)
    {
        $user=User::all();

        $details=[

            'greeting'=>$request->greeting,

            'body'=>$request->body,

            'actiontext'=>$request->actiontext,

            'actionurl'=>$request->actionurl,

            'lastline'=>$request->lastline,




        ];

        Notification::send($user, new emailnotification($details));
      
        return redirect()->back();



    }

}
