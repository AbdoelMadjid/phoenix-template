@extends('layouts.auth')

@section('title', 'Sign Out')

@section('content')
<div class="container">
        <div class="row flex-center min-vh-100 py-5">
          <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4 col-xxl-3">
            <div class="text-center mb-6 mx-auto"><img class="mb-7 d-dark-none" src="{{ asset("assets/img/spot-illustrations/1.png") }}" alt="phoenix"><img class="mb-7 d-light-none" src="{{ asset("assets/img/spot-illustrations/dark_1.png") }}" alt="phoenix">
              <div class="mb-6">
                <h4 class="text-body-highlight">Come back soon!</h4>
                <p class="text-body-tertiary">Thanks for using Phoenix. <br class="d-lg-none">You are now successfully signed out.</p>
              </div>
              <div class="d-grid"><a class="btn btn-primary" href="{{ url('pages/authentication/simple/sign-in') }}"><span class="fas fa-angle-left me-2"></span>Go to sign in page</a></div>
            </div>
          </div>
        </div>
      </div>
@endsection
