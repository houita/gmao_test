
@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
 
   
    <!-- Page Wrapper -->
        <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Machine liste</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Machine liste</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_machine"><i class="fa fa-plus"></i> Add New </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    
                                    <th>id </th>
                                    <th>ref_machine</th>
                                    <th>nom_machine</th>
                                    <th>date_service </th>
                                    <th>etat </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($machine as $key=>$machine )
                                <tr>
                                    <td>{{ ++$key }}</td>
                                   
                                    <td >{{ $machine->ref_machine }}</td>
                                    <td>{{ $machine->nom_machine }}</td>
                                    <td>{{ $machine->date_service }}</td>
                                    <td>{{ $machine->etat_machine }}</td>
                                  
                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
                <!-- Add Trainers List Modal -->
        <div id="add_machine" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New machine</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('form/machine/save') }}" method="POST">
                            @csrf
                                                     <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="col-form-label">ref_machine <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="ref_machine" name="ref_machine">
                                 </div>
                                
                                                                    <div class="form-group">

                                        <label class="col-form-label">nom_machine <span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" id="nom_machine" name="nom_machine">
                                  </div>
                                                              <div class="form-group">

                                        <label class="col-form-label">date_service <span class="text-danger">*</span></label>

                                        <input class="form-control" type="date" id="date_service" name="date_service">
                                 </div>
                                
                                                            <div class="form-group">

                                        <label class="col-form-label">etat_machine <span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" id="etat_machine" name="etat_machine">
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
        <!-- /Add Trainers List Modal -->

    
    </div>
       </div>
    <!-- /Page Wrapper -->
    @section('script')
   <script>
        $(document).on('click','.add_machine',function()
        {
          
        });
         </script> 
         
    @endsection
@endsection
