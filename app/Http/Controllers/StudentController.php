<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Staff;
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
    public function viewrole()
    {
        $roles = Role::all();
        return view('StaffViews.allroles', compact('roles'));
    }
    public function addstaff(Request $req)
    {
        $req->validate([
            'fullname' => 'required',
            'email' => 'required',
            'rolelist' => 'required',
            'password' => 'required',
            'phonenumber' => 'required',
            'employeeimage' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $staff = new Staff();
        $staff->StaffName = $req->fullname;
        $staff->StaffEmail = $req->email;
        $staff->StaffRole = $req->rolelist;
        $staff->StaffPhone = $req->phonenumber;
        $staff->StaffAddress = $req->address;
        $staff->StaffHomePhone = $req->homephone;
        $staff->StaffPassword = $req->password;
        $image = $req->file('employeeimage');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('StaffImages'), $imageName);
        $staff->StaffImage = $imageName;
        $staff->save();
        return redirect()->back()->with('message', 'Staff Added Successfully');
    }
}
