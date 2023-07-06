<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Laravel') }} :: @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/versions.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <script src="{{ asset('assets/js/modernizer.js') }}"></script>
</head>

<body class="host_version">
    @yield('content')

    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header tit-up">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Submit Your Question</h4>
                </div>
                <div class="modal-body customer-box">
                    <form role="form" class="form-horizontal">
                        <div class="form-group">
                            <div class="col-sm-12">
                                <input class="form-control" name="name" placeholder="Enter Name" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <textarea class="form-control" name="question" placeholder="Enter Question" col="3" type="text"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 d-flex justify-content-between">
                                <button type="submit" class="btn btn-light btn-radius btn-brd grd1">Submit</button>
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="btn btn-light btn-radius btn-brd grd1">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('assets/js/all.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/timeline.min.js') }}"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>
</body>

</html>