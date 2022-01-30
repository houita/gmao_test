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
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_emploiyee"><i class="fa fa-plus"></i> Add New </a>
                    </div>
                </div>
            </div>
               <!-- /Page Header -->
            
             <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table dataTable" id="t_emploiyee">
                            <thead>
                                <tr>
                                    
                                    <th>#</th>
                                    <th>matricule</th>
                                    <th>nom</th>
                                    <th>service </th>
                                    <th>telephone </th>
                                    <th>Action </th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($emploiyee as $key=>$emploiyee )
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td hidden class="e_id">{{ $emploiyee->id }}</td>
                                    <td class="matricule">{{ $emploiyee->matricule }}</td>
                                    <td class="nom">{{ $emploiyee->nom }}</td>
                                    <td class="service">{{ $emploiyee->service }}</td>
                                    <td class="telephone">{{ $emploiyee->telephone }}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item edit_emploiyee" href="#" data-toggle="modal" data-target="#edit_emploiyee"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item delete_emploiyee" href="#" data-toggle="modal" data-target="#delete_emploiyee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
  
      
        <div id="add_emploiyee" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add New emploiyee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('form/emploiyee/save') }}" method="POST">
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
        <!-- Edit emploiyee List Modal -->
        <div id="edit_emploiyee" class="modal custom-modal fade" role="dialog">
  
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Update empoloiyee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('form/emploiyee/update') }}" method="POST">
                            @csrf
                                   <input type="hidden" class="form-control" id="e_id" name="id" value="">  
                                                     <div class="row">

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label class="col-form-label">matricule <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" id="e_matricule" name="matricule">
                                 </div>
                                
                                                                    <div class="form-group">

                                        <label class="col-form-label">nom <span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" id="e_nom" name="nom">
                                  </div>
                                                              <div class="form-group">

                                        <label class="col-form-label">service <span class="text-danger">*</span></label>

                                        <input class="form-control" type="date" id="e_service" name="date_service">
                                 </div>
                                
                                                            <div class="form-group">

                                        <label class="col-form-label">telephone <span class="text-danger">*</span></label>

                                        <input class="form-control" type="text" id="e_telephone" name="telephone">
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
     
        <!-- /Edit emploiyee List Modal -->
        
        <!-- Delete emploiyee List Modal -->
        <div class="modal custom-modal fade" id="delete_emploiyee" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Training List</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <form action="{{ route('form/emploiyee/delete') }}" method="POST">
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
    $('#t_emploiyee').DataTable({
        "paging":   true,
        "ordering": true,
        "info":     true
    });
} );
</script>
   <script>
        $(document).on('click','.add_emploiyee',function()
        {
          
        });
         </script> 
    {{-- update js --}}
  <script>
        $(document).on('click','.edit_emploiyee',function()
        {
            var _this = $(this).parents('tr');
            $('#e_id').val(_this.find('.e_id').text());
            $('#e_matricule').val(_this.find('.matricule').text());
            $('#e_nom').val(_this.find('.nom').text());
            $('#e_service').val(_this.find('.service').text());
            $('#e_telephone').val(_this.find('.telephone').text());  
          
        });
    </script>

    {{-- delete model --}}
    <script>
        $(document).on('click','.delete_emploiyee',function()
        {
            var _this = $(this).parents('tr');
            $('.e_id').val(_this.find('.e_id').text());
        });
    </script>
    @endsection
@endsection