@extends('layouts.master')


@section('title')
    Edit-Registered
    @endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Role For Registered User</h1>
                    </div>
                    <div class="card-body">
                     <form action="">
                         <div class="form-group">
                             <label>Name</label>
                             <input type="text" name="user-name" value="{{$users->name}}" class="form-control">
                         </div>
                         <div class="form-group">
                             <lable>Give Role</lable>
                             <select name="usertype" class="form-control">
                                 <option value="admin">Admin</option>

                                 <option value="vendor">Vendor</option>

                             </select>
                         </div>
                     </form>

                    </div>

                </div>

            </div>

        </div>

    </div>


    @endsection


@section('scripts')

    @endsection
