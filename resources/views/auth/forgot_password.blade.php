@extends('welcome')
@section('title','Forgot password')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="text-center text-muted mb-5 mt-5">Forgot password</h1>
            <p class="text-center text-muted mb-3">please enter tour email address.we'll send you a link to reset your password</p>
            <form method="POST" action="{{route('app_forgotpasword')}}">
                @csrf
                 <!-- on inclus les messages alerts -->
             @include('alerts.alert-message')

             <label for="email-send" class="form-label">Email</label>
             <input type="email" name="email-send" id="email-send" class="form-control @error('email-error') is-invalid  @enderror" placeholder="please entre your address email" value="@if(Session::has('old_email')){{Session::get('old_email')}} @endif" required>
             <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit" >Reset Password</button>
             </div>
             <p class="text-center text-muted">Back to <a href="{{route('login')}}">login</a></p>
            </form>

        </div>
    </div>
</div>
@endsection
