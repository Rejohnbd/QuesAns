@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@component('components.breadcrumb', [
'title' => 'Dashboard',
'dashboard_url' => 'moderator-dashboard',
'activePage' => 'Unanswered Question'
])
@endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Unanswered Question
                    </h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-primary btn-sm float-right btnRefresh"><i class="fas fa-sync-alt"></i> Refresh</button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Question</th>
                                <th>Create Date Time</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($unansweredQuestions as $question)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $question->first_name }} {{ $question->last_name }}</td>
                                <td>{{ $question->phone }}</td>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->created_at }}</td>
                                <td>
                                    <button data-id="{{ $question->id }}" class="btn btn-primary assingQuestion">
                                        <i class="fas fa-download"></i> Assign
                                    </button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center">No Unanswered Question</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        {{ $unansweredQuestions->render() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" id="assingQustionModal" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('assign-question') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Question Assign To Host User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="question_id" id="questionId" />
                        <label for="assingToHost">Select Host</label>
                        <select class="custom-select rounded-0" name="host_id" id="assingToHost">
                            @foreach($allHosts as $host)
                            <option value="{{ $host->id }}">{{ $host->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-primary">Assing To Host</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('document').ready(function() {
        $('.assingQuestion').on('click', function() {
            let questionId = $(this).attr("data-id");
            $('#questionId').val(questionId);
            $('#assingQustionModal').modal('show');
        });

        $('.btnRefresh').on('click', function() {
            window.location.reload();
        })
    });
</script>
@endsection