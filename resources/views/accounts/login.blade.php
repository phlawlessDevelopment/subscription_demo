@extends('layout.app')
@section('title', 'Login')
@section('content')

<section class="section-center">
    <div class="w-layout-blockcontainer container w-container">
      <div class="form-wrapper _2-col">
        <h1 class="h1-form">Sign in</h1>
        <div class="w-form">
          <form id="wf-form-Form" name="wf-form-Form" data-name="Form" method="POST" class="pad-base" data-wf-page-id="66a3ce2c2e50de662ec44dcc" data-wf-element-id="0385b8bc-e74c-c47d-30ff-79cd7d655ccf" action="{{ url('accounts/login') }}">
          @csrf
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="form-group"><label for="email" class="form-label">Email</label>
            <input class="form-field w-input" maxlength="256" name="email" data-name="email" placeholder="" type="email" id="email"></div>
            <div class="form-group"><label for="password" class="form-label">Password</label><input class="form-field w-input" maxlength="256" name="password" data-name="password" placeholder="" type="password" id="password" required=""></div>
            <div class="form-group">
              <div class="form-link-wrap">Don&#x27;t have an account? <a href="../accounts/register.html" class="text-small link">Register here</a>
              </div>
            </div><input type="submit" data-wait="Please wait..." class="btn w-button" value="Sign in">
          </form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
