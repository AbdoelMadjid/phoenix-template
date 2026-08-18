@extends('layouts.auth')

@section('title', 'Lock Screen')

@section('content')
<div class="row vh-100 g-0">
        <div class="col-lg-6 position-relative d-none d-lg-block">
          <div class="bg-holder" style="background-image:url(../../../assets/img/bg/33.png);"></div>
          <!--/.bg-holder-->
        </div>
        <div class="col-lg-6">
          <div class="row flex-center h-100 g-0 px-4 px-sm-0">
            <div class="col col-sm-6 col-lg-7 col-xl-6">
              <div class="text-center mb-5">
                <div class="avatar avatar-4xl mb-4"><img class="rounded-circle" src="{{ asset("assets/img/team/30.webp") }}" alt=""></div>
                <h2 class="text-body-highlight"> <span class="fw-normal">Hello </span>John Smith</h2>
                <p class="text-body-tertiary">Enter your password to access the admin</p>
              </div>
              <div class="position-relative" data-password="data-password"><input class="form-control mb-3" id="password" type="password" placeholder="Enter Password" data-password-input="data-password-input"><button class="btn px-3 py-0 h-100 position-absolute top-0 end-0 fs-7 text-body-tertiary" data-password-toggle="data-password-toggle"><span class="uil uil-eye show"></span><span class="uil uil-eye-slash hide"></span></button></div><a class="btn btn-primary w-100" href="{{ url('pages/authentication/split/sign-in') }}">Sign In</a>
            </div>
          </div>
        </div>
      </div>
@endsection
