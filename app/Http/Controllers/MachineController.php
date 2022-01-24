<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Machine;
use Session;

class MachineController extends Controller
{
    // index page
    public function index()
    {
        $machine = DB::table('machines')->get();
       
        return view('machine.machine',compact('machine'));
    }
    // save record training
    /** save record trainers */
    public function saveRecord(Request $request)
    
    {
      $request->validate([
            'ref_machine'   => 'required',
            'nom_machine'   => 'required',
            'date_service'  => 'required',
            'etat_machine'  => 'required' ]);
         DB::beginTransaction();
        try {
$machine = new Machine();

        $machine->ref_machine   = $request->ref_machine;
            $machine->nom_machine   = $request->nom_machine;
            $machine->date_service  = $request->date_service;
            $machine->etat_machine  = $request->etat_machine;
            $machine->save();
            DB::commit();
            Toastr::success('Create new Trainers successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Add Trainers fail :)','Error');
            return redirect()->back();
        }

       

    }

}