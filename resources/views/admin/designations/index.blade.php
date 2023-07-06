@extends('layouts.app')

@section('title', 'Designation List')

@section('content')

@component('components.breadcrumb', [
'title' => 'Designation',
'dashboard_url' => 'admin-dashboard',
'activePage' => 'Designation List'
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
                        <a href="{{ route('designations.create') }}" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Create Designation</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Designation</th>
                                <th>Number of Employee</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $designation)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $designation->name }}</td>
                                <td>
                                    <span class="badge bg-success ">0</span>
                                </td>
                                <td>
                                    Action
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4" class="text-center">No Designation Found</td>
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