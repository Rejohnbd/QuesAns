@extends('layouts.master')

@section('title', 'Question')

@section('content')
<div class="all-title-box">
    <div class="container text-center">
        <h1>Question/Answer<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
    </div>
</div>
<div id="contact" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Your Question</h3>
            <p class="lead">Please submit your question using below form</p>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 customer-box">
                <div id="formWrapper">
                    <form action="{{ route('submit-question') }}" method="post">
                        @csrf
                        <div class="form-horizontal">
                            <div class="row">
                                <div class="col-sm-6 col-6">
                                    <div class="form-group">
                                        <input class="form-control" name="first_name" id="nameValue" placeholder="Enter First Name" type="text" required>
                                        <div class="invalid-feedback" id="nameError">Please Provide Name</div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-6">
                                    <input class="form-control" name="last_name" id="nameValue" placeholder="Enter Last Name" type="text" required>
                                    <div class="invalid-feedback" id="nameError">Please Provide Name</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" type="tel" required />
                                        <input id="country_code" type="hidden" name="country_code">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="question" id="questionValue" placeholder="Enter Question" col="8" type="text" required></textarea>
                                        <div class="invalid-feedback" id="questionError">Please provide Question.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 d-flex justify-content-between">
                                    <button type="submit" class="btn btn-light btn-radius btn-brd grd1">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/intl-tel-input/css/intlTelInput.css') }}">
@endsection

@section('scripts')
<script src="{{ asset('assets/plugins/intl-tel-input/js/intlTelInput.js') }}"></script>
<script>
    var input = document.querySelector("#phone");
    var iti = window.intlTelInput(input, {
        // allowDropdown: false,
        // autoInsertDialCode: true,
        // autoPlaceholder: "off",
        // dropdownContainer: document.body,
        // excludeCountries: ["us"],
        // formatOnDisplay: false,
        // geoIpLookup: function(callback) {
        //   fetch("https://ipapi.co/json")
        //     .then(function(res) { return res.json(); })
        //     .then(function(data) { callback(data.country_code); })
        //     .catch(function() { callback("us"); });
        // },
        // hiddenInput: "full_number",
        // initialCountry: "auto",
        // localizedCountries: { 'de': 'Deutschland' },
        // nationalMode: false,
        // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
        // placeholderNumberType: "MOBILE",
        // preferredCountries: ['cn', 'jp'],
        // separateDialCode: true,
        // showFlags: false,
        utilsScript: "{{ asset('assets/plugins/intl-tel-input/js/utils.js') }}"
    });

    var iti = window.intlTelInputGlobals.getInstance(input);

    input.addEventListener('input', function() {
        var countryCode = iti.getSelectedCountryData().dialCode;
        document.getElementById('country_code').value = countryCode;
    });

    // $(document).ready(function() {
    //     $('#submitQuestion').on('click', function() {
    //         $('#questionValue').removeClass('is-invalid');
    //         $('#questionError').css('display', 'none');
    //         $('#nameValue').removeClass('is-invalid');
    //         $('#nameError').css('display', 'none');

    //         let name = $('#nameValue').val();
    //         let question = $('#questionValue').val();

    //         if (name.length < 5) {
    //             $('#nameValue').addClass('is-invalid');
    //             $('#nameError').css('display', 'block');
    //         }
    //         if (question.length < 10) {
    //             $('#questionValue').addClass('is-invalid');
    //             $('#questionError').css('display', 'block');
    //         }
    //         if (name.length > 5 && question.length > 10) {
    //             $.ajax({
    //                 url: "{{ route('submit-question') }}",
    //                 method: 'POST',
    //                 data: {
    //                     name: name,
    //                     question: question,
    //                     _token: '{{csrf_token()}}',
    //                 },
    //                 success: function(response) {
    //                     console.log(response)
    //                     if (response.status) {
    //                         $('#formWrapper').css('display', 'none');
    //                         $('#successWrapper').css('display', 'block');
    //                         setTimeout(function() {
    //                             $('#login').modal('hide');
    //                         }, 3000);
    //                     }
    //                 },
    //                 error: function(err) {
    //                     $('#login').modal('hide');
    //                     console.log(err);
    //                 }
    //             });
    //         }
    //     });
    // });
</script>
@endsection