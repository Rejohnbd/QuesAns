@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@component('components.breadcrumb', [
'title' => 'Dashboard',
'dashboard_url' => 'admin-dashboard'
])
@endcomponent

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $countRoles }}</h3>
                    <p>User Roles</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <a href="{{ route('user-roles') }}" class="small-box-footer">Show Detials <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $countUser }}</h3>
                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('users.index') }}" class="small-box-footer">Show Detials <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $employeeUser }}</h3>
                    <p>Total Employee</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('users.index') }}" class="small-box-footer">Show Detials <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>{{ $clientUser }}</h3>
                    <p>Total Client</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="{{ route('users.index') }}" class="small-box-footer">Show Detials <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection