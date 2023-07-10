@extends('layouts.app')

@section('title', 'User Create')

@section('content')

@component('components.breadcrumb', [
'title' => 'Dashboard',
'dashboard_url' => 'admin-dashboard',
'activePage' => 'User Create'
])
@endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Create User
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="userRole">Select User Role <span class="text-danger">*</span></label>
                                <select id="userRole" class="form-control">
                                    @foreach($userRoles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="userEmail">Email address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="userEmail" placeholder="Enter User Email" required>
                            </div>
                            <div class="form-group">
                                <label for="userPassword">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="userPassword" placeholder="Enter Password" required value="password">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Create User</button>
                            <a href="{{ route('users.index') }}" class="btn btn-default float-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection