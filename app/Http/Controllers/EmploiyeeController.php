<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Emploiyee;
use Session;
use Auth;

class EmploiyeeController extends Controller
{
   // index page
   public function index()
   {
       $emploiyee = DB::table('emploiyees')->get();
      
       return view('emploiyee.emploiyee',compact('emploiyee'));
   }
   // save record training
   /** save record trainers */
   public function saveRecord(Request $request)
   
   {
     $request->validate([
           'matricule'   => 'required',
           'nom'   => 'required',
           'service'  => 'required',
           'telephone'  => 'required' ]);
        DB::beginTransaction();
       try {
$emploiyee = new Emploiyee();

           $emploiyee->matricule   = $request->matricule;
           $emploiyee->nom   = $request->nom;
           $emploiyee->service  = $request->service;
           $emploiyee->telephone  = $request->telephone;
           $emploiyee->save();
           DB::commit();
           Toastr::success('Create new emploiyee successfully :)','Success');
           return redirect()->back();
       } catch(\Exception $e) {
           DB::rollback();
           Toastr::error('Add emploiyee fail :)','Error');
           return redirect()->back();
       }


   }
   // delete record
   public function deleteEmploiyee(Request $request)
   {
       try {

           Emploiyee::destroy($request->id);
           Toastr::success('emploiyee deleted successfully :)','Success');
           return redirect()->back();
       
       } catch(\Exception $e) {

           DB::rollback();
           Toastr::error('emploiyee delete fail :)','Error');
           return redirect()->back();
       }
   }
   // update record
   public function updateEmploiyee(Request $request)
   {
       DB::beginTransaction();
       try {

           $update = [
               'id'            => $request->id,
               'matricule'    => $request->matricule,
               'nom'  => $request->nom,
               'service' => $request->service,
               'telephone'       => $request->telephone,
             
           ];
           
           Emploiyee::where('id',$request->id)->update($update);
           DB::commit();
           Toastr::success('Updated emploiyee successfully :)','Success');
           return redirect()->back();
       } catch(\Exception $e) {
           DB::rollback();
           Toastr::error('Update emploiyee fail :)','Error');
           return redirect()->back();
       }
   }
}
