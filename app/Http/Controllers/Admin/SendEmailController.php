<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\File as Folder;
use App\Models\Biodata;
use App\Models\Promotion;
use App\Models\Role;
use App\Models\States;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

// use App\Mail\TestMail;
// use Illuminate\Support\Facades\Mail;
class SendEmailController extends Controller
{
    public function index()
    {
        Mail::raw('emaeryhj lavish pyari', function ($message) {
            $message->from('nhibatarha69@gmial.com', 'John Doe');
            // $message->sender('nhibatarha69@gmial.com', 'John Doe');
            $message->to('nhibatarha69@gmial.com', 'John Doe');
            // $message->cc('john@johndoe.com', 'John Doe');
            // $message->bcc('john@johndoe.com', 'John Doe');
            // $message->replyTo('john@johndoe.com', 'John Doe');
            $message->subject('Subject');
            // $message->priority(3);
            // $message->attach('pathToFile');
        });

        // Mail::to('nhibatarha@gmail.com')->send(new TestMail());
        return "ok";
        // if (Mail::failures()) {
        //     return response()->Fail('Sorry! Please try again latter');
        // } else {
        //     return response()->success('Great! Successfully send in your mail');
        // }
    }
}
