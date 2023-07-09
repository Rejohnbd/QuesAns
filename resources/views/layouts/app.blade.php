<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} :: @yield('title')</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="sidebar-mini control-sidebar-slide-open layout-navbar-fixed">
    <div class="wrapper">

        @if(Auth::user()->role->slug == 'admin')
        @include('components.admin.topbar')
        @include('components.admin.sidebar')
        @elseif(Auth::user()->role->slug == 'moderator')
        @include('components.moderator.topbar')
        @include('components.moderator.sidebar')
        @elseif(Auth::user()->role->slug == 'host')
        @include('components.host.topbar')
        @include('components.host.sidebar')
        @endif

        <div class="content-wrapper">
            @yield('content')
        </div>

        @include('components.footer')
    </div>

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>
    @yield('scripts')
    @if(Auth::user()->role->slug == 'moderator')
    <script>
        $(document).ready(function() {
            let countSidebarUnansQues = 0;
            let countSidebarAssignQues = 0;
            let countSidebarAnsweredQues = 0;
            $.ajax({
                url: "{{ route('moderator-sidebar-status') }}",
                method: 'POST',
                data: {
                    _token: '{{csrf_token()}}',
                },
                success: function(response) {
                    countSidebarUnansQues = response.unAnsweredQuestions;
                    countSidebarAssignQues = response.assignedQuestions;
                    countSidebarAnsweredQues = response.answeredQuestions;

                    $('#countSidebarUnansQues').text(countSidebarUnansQues);
                    $('#countSidebarAssignQues').text(countSidebarAssignQues);
                    $('#countSidebarAnsweredQues').text(countSidebarAnsweredQues);
                },
                error: function(err) {
                    console.log(err);
                }
            });

            setInterval(function() {
                $.ajax({
                    url: "{{ route('moderator-sidebar-status') }}",
                    method: 'POST',
                    data: {
                        _token: '{{csrf_token()}}',
                    },
                    success: function(response) {
                        if (response.unAnsweredQuestions > countSidebarUnansQues) {
                            toastr.info('New Question Added')
                        }

                        if (response.answeredQuestions < countSidebarAnsweredQues) {
                            toastr.success('Answered A Question')
                        }

                        countSidebarUnansQues = response.unAnsweredQuestions;
                        countSidebarAssignQues = response.assignedQuestions;
                        countSidebarAnsweredQues = response.answeredQuestions;

                        $('#countSidebarUnansQues').text(countSidebarUnansQues);
                        $('#countSidebarAssignQues').text(countSidebarAssignQues);
                        $('#countSidebarAnsweredQues').text(countSidebarAnsweredQues);
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }, 1000 * 60 * 0.5);
        });
    </script>
    @endif
    @if(Auth::user()->role->slug == 'host')
    <script>
        $(document).ready(function() {
            let countSidebarHostUnQues = 0;
            let countSidebarHostAnsQues = 0;

            $.ajax({
                url: "{{ route('host-sidebar-status') }}",
                method: 'POST',
                data: {
                    _token: '{{csrf_token()}}',
                },
                success: function(response) {
                    countSidebarHostUnQues = response.unAnsweredQuestions;
                    countSidebarHostAnsQues = response.answeredQuestions;

                    $('#countSidebarHostUnQues').text(countSidebarHostUnQues);
                    $('#countSidebarHostAnsQues').text(countSidebarHostAnsQues);
                },
                error: function(err) {
                    console.log(err);
                }
            });

            setInterval(function() {
                $.ajax({
                    url: "{{ route('host-sidebar-status') }}",
                    method: 'POST',
                    data: {
                        _token: '{{csrf_token()}}',
                    },
                    success: function(response) {
                        if (response.unAnsweredQuestions > countSidebarHostUnQues) {
                            toastr.info('New Question Added')
                        }

                        countSidebarHostUnQues = response.unAnsweredQuestions;
                        countSidebarHostAnsQues = response.answeredQuestions;

                        $('#countSidebarHostUnQues').text(countSidebarHostUnQues);
                        $('#countSidebarHostAnsQues').text(countSidebarHostAnsQues);
                    },
                    error: function(err) {
                        console.log(err);
                    }
                });
            }, 1000 * 60 * 0.25);
        });
    </script>
    @endif
</body>

</html>