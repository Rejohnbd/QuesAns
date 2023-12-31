@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

@component('components.breadcrumb', [
'title' => 'Dashboard',
'dashboard_url' => 'moderator-dashboard'
])
@endcomponent

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $totalQuestions }}</h3>
                    <p>Total Question</p>
                </div>
                <div class="icon">
                    <i class="far fa-question-circle"></i>
                </div>
                <a href="" class="small-box-footer">Show Detials <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-6">
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

        <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $unAnsweredQuestions }}</h3>
                    <p>Unanswered Question</p>
                </div>
                <div class="icon">
                    <i class="far fa-question-circle"></i>
                </div>
                <a href="{{ route('unanswered-question') }}" class="small-box-footer">Show Detials <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection