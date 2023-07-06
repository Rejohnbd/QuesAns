@extends('layouts.app')

@section('title', 'User List')

@section('content')

@component('components.breadcrumb', [
'title' => 'Dashboard',
'dashboard_url' => 'admin-dashboard',
'activePage' => 'User List'
])
@endcomponent

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        To Do List
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Create User</button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>User Name</th>
                                <th>User Email</th>
                                <th>User Role</th>
                                <th>Profile Status</th>
                                <th>Active Status</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($allUsers as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <span class="badge @if($user->role->slug == 'admin') bg-success @elseif($user->role->slug == 'client') bg-info @else bg-warning @endif">{{ $user->role->name }}</span>
                                </td>
                                <td>
                                    @if($user->profile_status)
                                    <span class="badge bg-success">Completed</span>
                                    @else
                                    <span class="badge bg-danger">Incomplete</span>
                                    @endif
                                </td>
                                <td>
                                    @if($user->active_status)
                                    <span class="badge bg-success">Active</span>
                                    @else
                                    <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    Action
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">No User Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $allUsers->render() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection