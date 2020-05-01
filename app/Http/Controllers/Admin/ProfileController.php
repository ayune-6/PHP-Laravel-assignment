<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create'); //view...Controllerで特定のViewを表示させたいときに使用
    }
    
    public function create()
    {
        return redirect('admin/profile/create'); //redirect...Controllerで特定のページへリダイレクトさせたいときに使用
    }
    
    public function edit()
    {
        return view('admin.profile.edit');
    }
    
    public function update()
    {
        return redirect('admin/profile/edit');
    }
    
}
