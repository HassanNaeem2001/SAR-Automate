<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class StudentController extends Controller
{
    public function addrole(Request $request)
    {
        $request->validate([
            'RoleName' => 'required',
        ]);
            $role = new Role();
            $role->RoleName = $request->RoleName;
            $role->save();
            return redirect()->back()->with('message', 'Role Added Successfully');
    }
}
