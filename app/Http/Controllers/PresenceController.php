<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Emploiyee;
use Session;
use Auth;

class PresenceController extends Controller
{
 
   /** save record emploiyee */
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
  
}
