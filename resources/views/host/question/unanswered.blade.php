@extends('layouts.app')

@section('title', 'Question List')

@section('content')

@component('components.breadcrumb', [
'title' => 'Dashboard',
'dashboard_url' => 'dashboard',
'activePage' => 'Question List'
])
@endcomponent
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header ui-sortable-handle" style="cursor: move;">
                    <h3 class="card-title">
                        <i class="ion ion-clipboard mr-1"></i>
                        Question List
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
                                <th>Assign Date Time</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($unAnsweredQuestions as $question)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $question->first_name }} {{ $question->last_name }}</td>
                                <td>{{ $question->phone }}</td>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->assign_time }}</td>
                                <td>
                                    <button data-id="{{ $question->id }}" data-question="{{ $question->question }}" class="btn btn-primary answerQuestion">View</button>
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
                        {{ $unAnsweredQuestions->render() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade show" id="answerQuestionModal" aria-modal="true" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('question-answered') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Question Answer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="question_id" id="questionId" />
                        <label>Question is: </label>
                        <p id="totalQuestion"></p>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-dismiss="modal" aria-label="Close">Close</button>
                    <button type="submit" class="btn btn-primary">Answered</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $('document').ready(function() {
        $('.answerQuestion').on('click', function() {
            let questionId = $(this).attr("data-id");
            let questionBody = $(this).attr("data-question");
            $('#questionId').val(questionId);
            $('#totalQuestion').text(questionBody);
            $('#answerQuestionModal').modal('show');
        });

        $('.btnRefresh').on('click', function() {
            window.location.reload();
        })
    });
</script>
@endsection