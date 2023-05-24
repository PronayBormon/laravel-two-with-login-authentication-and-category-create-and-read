<?php

namespace App\Http\Controllers\Admin;

use App\Models\check;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CheckRequest;

class CheckController extends Controller
{
    public function index()
    {
        return view('admin.check');
    }

    public function create( checkRequest $request)
    {
        $data = $request->validated();

        $check = new check();

        $check->name = request('name');
        $check->email = request('email');
        $check->password = request('password');
        
        

        if (request('image')) {
            $imageName = time().'.'.request('image')->extension();  
            $request->image->move(public_path('images'), $imageName);
            $check->image=$imageName;
        }

        
        $check->save();

        return redirect('admin/dashboard');
        
    }
}
