<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Biodata;
use App\Models\Promotion;
use PhpParser\Node\Stmt\TryCatch;

class AdminController extends Controller
{
    public function index()
    {
        try {
            return view('admin.dashboard');
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
    public function upload_users()
    {
        // $file = File::all();
        // return view('admin.status', ['files' => $file]);
        try {
            $file = File::all();
            return view('admin.status', ['files' => $file]);
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
    public function show_user()
    {
        try {
            $show = Biodata::all();
            // dd($show);
            return view('admin.show.show_user', ['show' => $show]);
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
    public function upload_user($fid)
    {
        try {
            $enc_file = File::where('id', '=', $fid)->first();
            // die(dd($enc_file));
            if ($enc_file->status == 1) {
                return redirect('admin/upload_user');}
            $file = json_decode($enc_file);
            return view('admin.show.upload', ['file' => $file, 'fid' => $fid]);
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
    public function submit(Request $request)
    {
        try {
        
        $data = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'state' => 'required',
            'dob' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            // 'education' => 'required',
            // 'img' => 'required',
            'occupation' => 'required',
            'caste' => 'required',
            // 'rashi' => 'required',
            // 'nakshatra' => 'required'
            'gotra' => 'required',
            // 'religion' => 'required',
        ]);
        
        $biodata = new Biodata;
        $biodata->name = $data['name'];
        $biodata->age = $data['age'];
        $biodata->gender = $data['gender'][0];
        $biodata->state = $data['state'];
        $biodata->city = $data['city'];
        $biodata->dob = $data['dob'];
        $biodata->fathername = $data['father_name'];
        $biodata->mothername = $data['mother_name'];
        $biodata->grandfathername = $request->grandfather_name;
        $biodata->grandmothername = $request->grandmother_name;
        $biodata->phone = $data['phone'];
        $biodata->height = $request->height;
        $biodata->address = $request->address;
        $biodata->education = $request->education;
        $biodata->employed_in = $request->employed_in[0];
        if ($request->hasfile('img')) {
            $ext = $request->img->getClientOriginalExtension();
            $whitelist = array('png', 'jpeg', 'jpg');
            if (in_array($ext, $whitelist)) {
                $name = time() . rand(1, 100) . '.' . $request->img->getClientOriginalExtension();
                $request->img->move(public_path('files/profile_img'), $name);
                $biodata->img = $name;
                
            }
        }
        $biodata->occupation = $data['occupation'];
        $biodata->annualincome = $request->income;
        $biodata->rashi = $request->rashi[0];
        $biodata->nakshatra = $request->nakshatra[0];
        $biodata->religion = $request->religion;
        $biodata->caste = $data['caste'][0];
        $biodata->gotra = $data['gotra'];
        $biodata->description = $request->description;
        if ($request->manglik == "on") {
            $biodata->manglik = 1;
        }

        $biodata->fid = $request->fid;
        // die(dd($request));

        $biodata->save();
        $file = File::where('id', $request->fid)->first();

        $file->status = 1;
        $file->update();
        // die(dd($file));
        return redirect('admin/show_user');
        } catch (\Throwable $th) {
            
            return abort(404);
        }
    }
    public function view($id)
    {
        // dd($id);
        try {
            $show=Biodata::where('biodatas.id','=',$id)->first();
            // dd($show);
            return view('admin.show.view',compact('show'));
        } catch (\Throwable $th) {
            return abort(404);
            // return view('admin.view');
            // return view('admin.view',compact('show'));
        }
    }
    public function update(Request $request)
    {
        try {
        // die('Works');
            $data = $request->validate([
                'name' => 'required',
                'age' => 'required',
                'gender' => 'required',
                'city' => 'required',
                'state' => 'required',
                'dob' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'address' => 'required',
                'phone' => 'required',
                // 'education' => 'required',
                // 'img' => 'required',
                'occupation' => 'required',
                'caste' => 'required',
                // 'rashi' => 'required',
                // 'nakshatra' => 'required'
                'gotra' => 'required',
                // 'religion' => 'required',
            ]);

            $biodata = Biodata::where('fid', '=', $request->fid)->first();
            $biodata->name = $data['name'];
            $biodata->age = $data['age'];
            $biodata->gender = $data['gender'][0];
            $biodata->state = $data['state'];
            $biodata->city = $data['city'];
            $biodata->dob = $data['dob'];
            $biodata->fathername = $data['father_name'];
            $biodata->mothername = $data['mother_name'];
            $biodata->grandfathername = $request->grandfather_name;
            $biodata->grandmothername = $request->grandmother_name;
            $biodata->phone = $data['phone'];
            $biodata->height = $request->height;
            $biodata->address = $request->address;
            $biodata->education = $request->education;
            $biodata->employed_in = $request->employed_in[0];
            if ($request->hasfile('img')) {
                if($biodata->hasfile('img')){
                    unlink($biodata->img);}
                $ext = $request->img->getClientOriginalExtension();
                $whitelist = array('png', 'jpeg', 'jpg');
                if (in_array($ext, $whitelist)) {
                    $name = time() . rand(1, 100) . '.' . $request->img->getClientOriginalExtension();
                    $request->img->move(public_path('files/profile_img'), $name);
                    $biodata->img = $name;
                    
                }
            }
            $biodata->occupation = $data['occupation'];
            $biodata->annualincome = $request->income;
            $biodata->rashi = $request->rashi[0];
            $biodata->nakshatra = $request->nakshatra[0];
            $biodata->religion = $request->religion;
            $biodata->caste = $data['caste'][0];
            $biodata->gotra = $data['gotra'];
            $biodata->description = $request->description;
            if ($request->manglik == "on") {
                $biodata->manglik = 1;
            }
    
            $biodata->fid = $request->fid;
            // die(dd($request));
    
            $biodata->update();
            // die(dd($file));
            return redirect('admin/view'.$request->fid);
            } catch (\Throwable $th) {
                
                return abort(404);
            }
    }
    public function edit($id){
        // return view('admin.edit',compact('show'));
        try {
            $show=Biodata::where('biodatas.id','=',$id)->first();
            // dd($show);
            return view('admin.edit',compact('show'));
        } catch (\Throwable $th) {
            return abort(404);
            // return view('admin.view');
            // return view('admin.view',compact('show'));
        }
    }
    public function subscribed(){
        // return view('admin.edit',compact('show'));
        // $show = Promotion::all();
        //     dd($show);
        try {
            $show = Promotion::all();
            // dd($show);
            return view('admin.subscribe.subscribe',compact('show'));
        } catch (\Throwable $th) {
            return abort(404);
        
        }
    }
}
