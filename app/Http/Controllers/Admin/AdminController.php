<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\File as Folder;
use App\Models\Biodata;
use App\Models\Promotion;
use App\Models\Role;
use App\Models\States;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class AdminController extends Controller
{
    // testing
    











    // main
    public function email(){
        Mail::to('nhibatarha@gmail.com')->send(new TestMail());
        return "ok";
    }
    public function index(){
        try {
            return view('admin.dashboard');
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
    public function upload_users(){
        try {
            $file = File::paginate(5);
            return view('admin.status', ['files' => $file]);
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
    public function show_user(){
        try {
            $show = Biodata::paginate(5);
            return view('admin.show.show_user', ['show' => $show]);
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
    public function upload_user($fid)
    {
        try {
            $enc_file = File::where('id', '=', $fid)->first();
            $states = States::all();
            if ($enc_file->status == 1) {
                return redirect('admin/upload_user');}
            $file = json_decode($enc_file);
            return view('admin.show.upload', ['file' => $file, 'fid' => $fid,'states'=>$states]);
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
            'occupation' => 'required',
            'caste' => 'required',
            'gotra' => 'required',
        ]);
        
        $biodata = new Biodata;
        $biodata->name = $data['name'];
        $biodata->age = $data['age'];
        $biodata->gender = $data['gender'][0];
        $biodata->state = $data['state'][0];
        $biodata->city = $data['city'];
        $biodata->dob = $data['dob'];
        $biodata->marital_status = $request->marital_status[0];
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

        $biodata->save();
        $file = File::where('id', $request->fid)->first();

        $file->status = 1;
        $file->update();
        return redirect('admin/upload_user')->with('message','User added successfully');
        } catch (\Throwable $th) {
            
            return abort(404);
        }
    }
    public function view($id)
    {
        try {
            $show=Biodata::where('biodatas.id','=',$id)->first();
            return view('admin.show.view',compact('show'));
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
    public function update(Request $request)
    {
        // try {
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
                'occupation' => 'required',
                'caste' => 'required',
                'gotra' => 'required',
            ]);

            $biodata = Biodata::where('fid', '=', $request->fid)->first();
            $biodata->name = $data['name'];
            $biodata->age = $data['age'];
            $biodata->gender = $data['gender'][0];
            $biodata->state = $data['state'][0];
            $biodata->city = $data['city'];
            $biodata->dob = $data['dob'];
            $biodata->marital_status = $request->marital_status[0];
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
                if($biodata->img){
                die('Has image');
                    Folder::delete($biodata->img);}
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
    
            $biodata->update();
            return redirect('admin/view/'.$request->fid)->with('message','User updated successfully');
            // } catch (\Throwable $th) {
            //     return abort(404);
            // }
    }
    public function edit($id){
        try {
            $show=Biodata::where('biodatas.id','=',$id)->first();
            $states = States::all();
            return view('admin.show.edit',compact('show'),['states'=>$states]);
        } catch (\Throwable $th) {
            return abort(404);
        }
    }
    public function subscribed(){
        try {
            $show = Promotion::all();
            return view('admin.subscribe.subscribe',compact('show'));
        } catch (\Throwable $th) {
            return abort(404);
        
        }
    }

    public function search(Request $request){
        if($request->search){
            $show=DB::table('biodatas')
            ->select('biodatas.name','biodatas.phone','biodatas.fid','biodatas.id','biodatas.gender')
            ->where('biodatas.name','LIKE','%'.$request->search.'%')
            ->orwhere('biodatas.phone','LIKE','%'.$request->search.'%')
            ->paginate(5);
            return view('admin.status', ['show' => $show]);
        }
        else{
            return redirect('admin/show_user')->with('message', 'empty search');
        }
    }
    public function search_file(Request $request){
        if($request->search){
            
            $file = File::where('filenames','LIKE','%'.$request->search.'%')
            ->orwhere('status','LIKE','%'.$request->search.'%')
            ->paginate(5);
            return view('admin.status', ['files' => $file]);
        }
        else{
            return redirect('admin/show_user')->with('message', 'empty search');
        }

    }
}
