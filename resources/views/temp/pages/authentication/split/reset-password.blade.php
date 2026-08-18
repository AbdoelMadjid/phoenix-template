@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
<div class="row vh-100 g-0">
        <div class="col-lg-6 position-relative d-none d-lg-block">
          <div class="bg-holder" style="background-image:url(../../../assets/img/bg/35.png);"></div>
          <!--/.bg-holder-->
        </div>
        <div class="col-lg-6">
          <div class="row flex-center h-100 g-0 px-4 px-sm-0">
            <div class="col col-sm-6 col-lg-7 col-xl-6"><a class="d-flex flex-center text-decoration-none mb-4" href="{{ url("/") }}">
                <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="{{ asset("assets/img/icons/logo.png") }}" alt="phoenix" width="58"></div>
              </a>
              <div class="text-center mb-6">
                <h4 class="text-body-highlight">Reset new password</h4>
                <p class="text-body-tertiary">Type your new password</p>
                <form class="mt-5">
                  <div class="position-relative mb-2" data-password="data-password"><input class="form-control form-icon-input pe-6" id="password" type="password" placeholder="Type new password" data-password-input="data-password-input"><button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button></div>
                  <div class="position-relative mb-4" data-password="data-password"><input class="form-control form-icon-input pe-6" id="confirmPassword" type="password" placeholder="Cofirm new password" data-password-input="data-password-input"><button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button></div><button class="btn btn-primary w-100" type="submit">Set Password</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
