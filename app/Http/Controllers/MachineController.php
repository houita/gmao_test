<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Machine;
use Session;
use Auth;

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
            Toastr::success('Create new Machine successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Add Machine fail :)','Error');
            return redirect()->back();
        }


    }
    // delete record
    public function deleteMachine(Request $request)
    {
        try {

            Machine::destroy($request->id);
            Toastr::success('Machine deleted successfully :)','Success');
            return redirect()->back();
        
        } catch(\Exception $e) {

            DB::rollback();
            Toastr::error('Machine delete fail :)','Error');
            return redirect()->back();
        }
    }
    // update record
    public function updateMachine(Request $request)
    {
        DB::beginTransaction();
        try {

            $update = [
                'id'            => $request->id,
                'ref_machine'    => $request->ref_machine,
                'nom_machine'  => $request->nom_machine,
                'date_service' => $request->date_service,
                'etat_machine'       => $request->etat_machine,
              
            ];
            
            Machine::where('id',$request->id)->update($update);
            DB::commit();
            Toastr::success('Updated Machine successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Update Machine fail :)','Error');
            return redirect()->back();
        }
    }
}