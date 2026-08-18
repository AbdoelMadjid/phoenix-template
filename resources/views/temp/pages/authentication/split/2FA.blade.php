@extends('layouts.auth')

@section('title', '2Fa')

@section('content')
<div class="row vh-100 g-0">
        <div class="col-lg-6 position-relative d-none d-lg-block">
          <div class="bg-holder" style="background-image:url(../../../assets/img/bg/40.png);"></div>
          <!--/.bg-holder-->
        </div>
        <div class="col-lg-6">
          <div class="row flex-center h-100 g-0 px-4 px-sm-0">
            <div class="col col-sm-6 col-lg-7 col-xl-6"><a class="d-flex flex-center text-decoration-none mb-4" href="{{ url("/") }}">
                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{ asset("assets/img/icons/logo.png") }}" alt="phoenix" width="58"></div>
              </a>
              <div class="text-center">
                <h4 class="text-body-highlight">Enter the verification code</h4>
                <p class="text-body-tertiary mb-0">An email containing a 6-digit verification code has been sent to the email address - exa*********.com </p>
                <p class="fs-10 mb-5">Don’t have access? <a href="#!">Use another method</a></p>
                <form class="verification-form" data-2fa-form="data-2fa-form">
                  <div class="d-flex align-items-center gap-2 mb-3"><input class="form-control px-2 text-center" type="number"><input class="form-control px-2 text-center" type="number"><input class="form-control px-2 text-center" type="number"><span>-</span><input class="form-control px-2 text-center" type="number"><input class="form-control px-2 text-center" type="number"><input class="form-control px-2 text-center" type="number"></div>
                  <div class="form-check text-start mb-4"><input class="form-check-input" id="2fa-checkbox" type="checkbox"><label for="2fa-checkbox">Don’t ask again on this device</label></div><button class="btn btn-primary w-100 mb-5" type="submit" disabled="disabled">Verify</button><a class="fs-9" href="#!">Didn’t receive the code? </a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
