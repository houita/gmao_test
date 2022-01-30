<div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Training</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Training</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_training"><i class="fa fa-plus"></i> Add New </a>
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
                                    <th>#</th>
                                    <th>ref_machine</th>
                                    <th>nom_machine</th>
                                    <th>date_service </th>
                                    <th>etat </th>
                                    <th>Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($training as $key=>$training )
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td hidden class="e_id">{{ $machine->id }}</td>
                                    <td class="ref_machine">{{ $machine->ref_machine }}</td>
                                    <td class="nom_machine">{{ $machine->nom_machine }}</td>
                                    <td class="date_service">{{ $machine->date_service }}</td>
                                    <td class="etat_machine">{{ $machine->etat_machine }}</td>
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