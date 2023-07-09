@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@component('components.breadcrumb', [
'title' => 'Dashboard',
'dashboard_url' => 'moderator-dashboard',
'activePage' => 'Answered Question'
])
@endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Answered Question
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Question</th>
                                <th>Host Name</th>
                                <th>Answer Date Time</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($answeredQuestions as $question)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $question->first_name }} {{ $question->last_name }}</td>
                                <td>{{ $question->phone }}</td>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->answer_time }}</td>
                                <td>
                                    Action
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center">No Answered Question</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $answeredQuestions->render() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection