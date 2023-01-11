
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
class SendEmailController extends Controller
{
    public function index()
    {
        Mail::to('nhibatarha@gmail.com')->send(new TestMail());
        return "ok";
        // if (Mail::failures()) {
        //     return response()->Fail('Sorry! Please try again latter');
        // } else {
        //     return response()->success('Great! Successfully send in your mail');
        // }
    }
}
