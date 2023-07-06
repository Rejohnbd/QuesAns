@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@component('components.breadcrumb', [
'title' => 'Dashboard',
'dashboard_url' => 'moderator-dashboard',
'activePage' => 'Assigned Question'
])
@endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Assigned Question
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Question</th>
                                <th>Host Name</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($assignedQuestions as $question)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $question->name }}</td>
                                <td>{{ $question->question }}</td>
                                <td></td>
                                <td>
                                    Action
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No Answered Question</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $assignedQuestions->render() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection