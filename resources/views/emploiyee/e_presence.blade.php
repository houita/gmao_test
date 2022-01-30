@extends('layouts.master')
@section('content')
@include('navbar.navbar')
@include('sidebar.sidebar')

    {{-- message --}}
    {!! Toastr::message() !!}
 
   

        <div class="page-wrapper">
      
      <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Emploiyee liste</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Emploiyee liste</li>
                        </ul>
                    </div>
                    
                </div>
            </div>
               <!-- /Page Header -->
            
     
  
      
        <div id="add_emploiyee" >
            <div class="respensive" >
                <div class="modal-content">
                    <div class="modal-header">
                        
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('form/presence/save') }}" method="POST">
                            @csrf
                              <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">matricule <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="matricule" name="matricule">
                                    </div>
                                
                                        <div class="form-group">

                                        <label class="col-form-label">nom<span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" id="nom" name="nom">
                                  </div>
                                          <div class="form-group">

                                        <label class="col-form-label">service <span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" id="service" name="service">
                                 </div>
                                
                                        <div class="form-group">

                                        <label class="col-form-label">telephone <span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" id="telephone" name="telephone">
                                </div>
                                
                            <div class="submit-section">
                                <button type="submit" class="btn btn-primary submit-btn">Submit</button>
                            </div>
                                 </div>     </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add emploiyee List Modal -->
        </div>
    </div>
    
    <!-- /Page Wrapper -->
    @section('script')
   
  
    @endsection
@endsection