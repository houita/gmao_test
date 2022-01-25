@extends('layouts.master')
@section('content')
@include('navbar.navbar')
@include('sidebar.sidebar')

    {{-- message --}}
      {!! Toastr::message() !!}
    <!-- Sidebar -->
  
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->

            <!-- /Page Header -->
        </div>
        <!-- /Page Content -->

        <!-- Add Trainers List Modal -->

        <!-- /Add Trainers List Modal -->
        
        <!-- Edit Trainers List Modal -->

        <!-- /Edit Trainers List Modal -->
        
        <!-- Delete Trainers List Modal -->

        <!-- /Delete Trainers List Modal -->
    </div>
    <!-- /Page Wrapper -->
    <!-- /Page Wrapper -->
    @section('script')
    
    @endsection
@endsection
