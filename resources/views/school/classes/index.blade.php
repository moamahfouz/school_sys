@extends('school.layouts.school_app')

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        @include('layouts.flash')
        <!-- Page Heading -->

        <h1 class="h3 mb-2 text-gray-800">Classes</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <button class="float-right btn btn-success" data-toggle="modal" data-target="#addItem">Add Class <i class="fa fa-plus"></i> </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Teacher</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($rows as $idx=>$row)
                        <tr>
                            <td>{{$idx+1}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->teacher->name}}</td>
                            <td>
                                <a href="/school/classes/del/{{$row->id}}" class="btn btn-sm btn-danger">Delete <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    @include('school.classes.create')
    @include('school.classes.edit')
@endsection
