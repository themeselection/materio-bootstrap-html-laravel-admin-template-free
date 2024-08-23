@extends('layouts/blankLayout')

@section('title', 'Forgot Password Basic - Pages')

@section('page-style')
@vite([
  'resources/assets/vendor/scss/pages/page-auth.scss'
])
@endsection

@section('content')
<div class="position-relative">
  <div class="authentication-wrapper authentication-basic container-p-y">
    <div class="authentication-inner py-6 mx-4">

      <!-- Logo -->
      <div class="card p-7">
        <!-- Forgot Password -->
        <div class="app-brand justify-content-center mt-5">
          <a href="{{url('/')}}" class="app-brand-link gap-3">
            <span class="app-brand-logo demo">@include('_partials.macros',["height"=>20])</span>
            <span class="app-brand-text demo text-heading fw-semibold">{{ config('variables.templateName') }}</span>
          </a>
        </div>
        <!-- /Logo -->
        <div class="card-body mt-1">
          <h4 class="mb-1">Forgot Password? 🔒</h4>
          <p class="mb-5">Enter your email and we'll send you instructions to reset your password</p>
          <form id="formAuthentication" class="mb-5" action="{{url('/')}}" method="GET">
            <div class="form-floating form-floating-outline mb-5">
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus>
              <label>Email</label>
            </div>
            <button class="btn btn-primary d-grid w-100 mb-5">Send Reset Link</button>
          </form>
          <div class="text-center">
            <a href="{{url('auth/login-basic')}}" class="d-flex align-items-center justify-content-center">
              <i class="ri-arrow-left-s-line ri-20px me-1_5"></i>
              Back to login
            </a>
          </div>
        </div>
      </div>
      <!-- /Forgot Password -->
      <img src="{{asset('assets/img/illustrations/tree-3.png')}}" alt="auth-tree" class="authentication-image-object-left d-none d-lg-block">
      <img src="{{asset('assets/img/illustrations/auth-basic-mask-light.png')}}" class="authentication-image d-none d-lg-block" height="172" alt="triangle-bg">
      <img src="{{asset('assets/img/illustrations/tree.png')}}" alt="auth-tree" class="authentication-image-object-right d-none d-lg-block">
    </div>
  </div>
</div>
@endsection
