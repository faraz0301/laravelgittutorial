@extends('layouts.master')



@section('title')
    Registered Roles
@endsection


@section('content')
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Registered Roles</h4>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                        <th>Product Id</th>
                        <th>Product Name </th>
                        <th>User Type</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                        </thead>
                        <tbody>
                        @foreach ($users as $row)
                            <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->usertype}}</td>
                            <td>

                                <a href="url('role-edit')/{{$row->id}}')" class="btn btn-success">Edit</a>

                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">DELETE</a>
                            </td>

                        </tr>
                        @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>





@endsection

@section('scripts')

@endsection