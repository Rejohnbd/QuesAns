@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@component('components.breadcrumb', [
'title' => 'Dashboard',
'dashboard_url' => 'dashboard'
])
@endcomponent

<div class="container-fluid">
    <div class="row">
        <div class="col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $answeredQuestions }}</h3>
                    <p>Answered Question</p>
                </div>
                <div class="icon">
                    <i class="far fa-question-circle"></i>
                </div>
                <a href="" class="small-box-footer">Show Detials <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $assignedQuestions }}</h3>
                    <p>Unanswered Question</p>
                </div>
                <div class="icon">
                    <i class="far fa-question-circle"></i>
                </div>
                <a href="" class="small-box-footer">Show Detials <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection