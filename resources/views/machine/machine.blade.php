
@extends('layouts.master')
@section('content')
@include('navbar.navbar')
@include('sidebar.sidebar')

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
                        <table class="table table-striped custom-table mb-0 datatabl" id="t_machine">
                            <thead>
                                <tr>
                                    
                                    <th>#</th>
                                    <th>ref_machine</th>
                                    <th>nom_machine</th>
                                    <th>date_service </th>
                                    <th>etat </th>
                                    

                                    <th>Action </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($machine as $key=>$machine )
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td hidden class="e_id">{{ $machine->id }}</td>
                                    <td  class="ref_machine">{{ $machine->ref_machine }}</td>
                                    <td class="nom_machine"   >{{ $machine->nom_machine }}</td>
                                    <td class="date_service"  >{{ $machine->date_service }}</td>
                                    <td class="etat_machine"  >{{ $machine->etat_machine }}</td>
      <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item edit_machine" href="#" data-toggle="modal" data-target="#edit_machine"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item delete_machine" href="#" data-toggle="modal" data-target="#delete_machine"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
                <!-- Add machine List Modal -->
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
        <!-- /Add machine List Modal -->
        <!-- Edit machine List Modal -->
        <div id="edit_machine" class="modal custom-modal fade" role="dialog">
        ="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update machine</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('form/machine/update') }}" method="POST">
                            @csrf
                                   <input type="hidden" class="form-control" id="e_id" name="id" value="">  
                                                     <div class="row">

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label class="col-form-label">ref_machine <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="e_ref_machine" name="ref_machine">
                                 </div>
                                
                                                                    <div class="form-group">

                                        <label class="col-form-label">nom_machine <span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" id="e_nom_machine" name="nom_machine">
                                  </div>
                                                              <div class="form-group">

                                        <label class="col-form-label">date_service <span class="text-danger">*</span></label>

                                        <input class="form-control" type="date" id="e_date_service" name="date_service">
                                 </div>
                                
                                                            <div class="form-group">

                                        <label class="col-form-label">etat_machine <span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" id="e_etat_machine" name="etat_machine">
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
     
        <!-- /Edit Training List Modal -->
        
        <!-- Delete Training List Modal -->
        <div class="modal custom-modal fade" id="delete_machine" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Training List</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <form action="{{ route('form/machine/delete') }}" method="POST">
                                @csrf
                       <input type="hidden" name="id" class="e_id" value="">
                       

                       
                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary continue-btn submit-btn">Delete</button>
                                   </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                   </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Training List Modal -->
    
    </div>
    
    <!-- /Page Wrapper -->
    @section('script')
    <script>
    $(document).ready(function() {
    $('#t_machine').DataTable();
} );
</script>
   <script>
        $(document).on('click','.add_machine',function()
        {
          
        });
         </script> 
    {{-- update js --}}
  <script>
        $(document).on('click','.edit_machine',function()
        {
            var _this = $(this).parents('tr');
            $('#e_id').val(_this.find('.e_id').text());
            $('#e_ref_machine').val(_this.find('.ref_machine').text());
            $('#e_nom_machine').val(_this.find('.nom_machine').text());
            $('#e_date_service').val(_this.find('.date_service').text());
            $('#e_etat_machine').val(_this.find('.etat_machine').text());  
          
        });
    </script>

    {{-- delete model --}}
    <script>
        $(document).on('click','.delete_machine',function()
        {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.e_id').text());
        });
    </script>
    @endsection
@endsection
