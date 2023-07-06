@extends('layouts.app')

@section('title', 'Role List')

@section('content')

@component('components.breadcrumb', [
'title' => 'User Role List',
'dashboard_url' => 'admin-dashboard',
'activePage' => 'User Role List'
])
@endcomponent

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User Role List Table</h3>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Role Name</th>
                                <th>Number of User</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($allRoles as $role)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $role->name }}</td>
                                <td><span class="badge bg-success">{{ $role->userCounts->count() }}</span></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No User Role Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection