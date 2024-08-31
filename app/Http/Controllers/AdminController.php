<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Student;
use App\Models\Faculty;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    //
    public function insert_batch(Request $req){
        $batchcode = $req->batchcode;
        $timings = $req->timings;
        $date = $req->date;
        $b = new Batch();
        $b->Batch_Code = $batchcode;
        $b->Batch_Timings = $timings;
        $b->Batch_Start_Date = $date;
        $b->save();
        return redirect()->back()->with('insertmessage','Batch Added Successfully');
    }
    public function insert_timings(Request $req){
        $batchcode = $req->batchcode;
        $timings = $req->timings;
        $date = $req->date;
        $b = new Batch();
        $b->Batch_Code = $batchcode;
        $b->Batch_Timings = $timings;
        $b->Batch_Start_Date = $date;
        $b->save();
        return redirect()->back()->with('insertmessage','Batch Added Successfully');
    }
    public function getbatch()
    {
        $batch = Batch::get();
        return View('admindash.addstudent',compact('batch'));

    }
    public function addstudent(Request $req)
    {
        $table = new Student();
        $table->Student_Id = $req->studentid;
        $table->Student_Name = $req->studentname;
        $table->Student_Email = $req->studentemail;
        $table->Student_Phone = $req->studentphone;
        $table->Student_Paternal_Phone = $req->studentparentalphone;
        $table->Student_Address = $req->studentaddress;
        $table->Student_Batch_Id = $req->batchlist;
        $table->save();
        return redirect()->back()->with('successmessage','Student has been added');

    }
    public function get_students()
    {
        $std = DB::table('students')->join('batches','batches.id','=','students.Student_Batch_Id')->get();
        return View('admindash.viewstudents',compact('std'));

    }
    public function getfaculties(){
        $fac = Faculty::get();
        return View('admindash.addbatch',compact('fac'));
    }
}

