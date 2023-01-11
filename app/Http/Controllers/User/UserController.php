<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Promotion;
use App\Models\Biodata;
use App\Models\States;
use App\Models\Cities;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        // die("hello");
        try {
            return view('user.dashboard');
        } catch (\Throwable $th) {
            // return view('user.dashboard');
            return abort(404);
        }
    }
    public function contact()
    {
        return view('user.contact.index');
    }
    public function endingPage()
    {
        return view('user.thank');
    }
    public function upload(Request $request)
    {
        // die($request->file('file'));
        try {
            $files = [];
            // die('hello');
            if ($request->hasfile('file')){
                die('hello');
                foreach ($request->file('file') as $file) {
                    // die('hell');
                    $ext = $file->getClientOriginalExtension();
                    $whitelist = array('pdf', 'doc', 'png', 'jpeg', 'jpg', 'txt', 'xlsx');
                    if (in_array($ext, $whitelist)) {
                        $name = time() . rand(1, 100) . '.' . $file->getClientOriginalExtension();
                        $file->move(public_path('files'), $name);
                        $files[] = $name;
                    } else {
                        return redirect('/')->with('message', 'File type is not supported.');
                    }
                }
                die('hel');
                $file = json_encode($files);
                // die('hello');
                // $newFile = new File;
                // die($newFile);
                // $newFile->filenames = $file;
                // $newFile->save();
                // die('hello');
                File::create(['filenames' => $file]);
                return redirect('/thankyou');
            } else {
                return redirect('/')->with('message', 'File Required.');
            }
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
    public function subscribe(Request $request)
    {
        // try {
        // die($request->email);
        $email = $request->validate([
            'email' => 'required',
        ]);
        if (empty($email['email'])) {
            // die('heii');
            return redirect('/thankyou')->with('message', 'Please enter proper email address.');
        }
        // die('hekk');
        $email = $email['email'];
        // die($email);
        // DB::insert('insert into promotion (email) values (?)', [$email]);
        // $data = new Promotion;
        // $data->email = $email;
        // $data->save();
        Promotion::create(['email' => $email]);
        // die($email['email']);
        return redirect('/');
        // } catch (\Throwable $th) {
        //     die(':(');
        //     return abort(404);
        // }
    }

    public function profile(Request $request, $id)
    {
        $data = Biodata::where('id', $id)->first();
        // die(dd($data->name));
        return view('user.single.single_page_display', ['values' => $data]);
    }
    public function listing()
    {
        $data = Biodata::select('id', 'name', 'caste', 'religion', 'dob', 'education', 'occupation', 'img', 'gender');
        
        $data = $data->paginate(5);
        $states = States::all();
        // die(dd($states));
        return view('user.listing.listing', ['values' => $data, 'states' => $states]);
    }
    public function filter(Request $request)
    {
        $data = Biodata::query();
        // dd($request->filter);
        if ($request->filter) {
            $data->whereIn('gender', $request->filter);
            // dd($data->get());
        }
        if ($request->caste) {
            $data->whereIn('caste', $request->caste);
        }
        if ($request->state) {
            $data->whereIn('state', $request->state);
        }
        $states = States::all();
        return view('user.listing.listing', ['values' => $data->paginate(100), 'states' => $states]);
    }
}
