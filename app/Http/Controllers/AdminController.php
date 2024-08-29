<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
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
}
