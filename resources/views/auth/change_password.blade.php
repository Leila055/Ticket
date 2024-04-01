@extends('welcome')
@section('title','Change password')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="text-center text-muted mb-5 mt-5">Change your password</h1>
            <p class="text-center text-muted mb-3">Enter your new password</p>
            <form action="{{route('app_changepassword',['token'=>$activation_token])}}" method="POST">
              @csrf
                <!-- on inclus les messages alerts -->
             @include('alerts.alert-message')
             <label for="new-password" class="form-label">New password</label>
             <input type="password" name="new-password" id="new-password" class="form-control mb-3 @error('password-error') is-invalid  @enderror  @error('password-success') is-valid  @enderror" placeholder="Enter the new password" value="@if(Session::has('old-new-password')){{Session::get('old-new-password')}} @endif">
             <label for="new-password-confirm" class="form-label">New password confirm</label>
             <input type="password" name="new-password-confirm" id="new-password-confirm" class="form-control mb-3 @error('password-error-confirm') is-invalid  @enderror" placeholder="confirm your new password" value="@if(Session::has('old-new-password')){{Session::get('old-new-password-confirm')}} @endif">
             <div class="d-grid gap-2 mt-4 md-5">
                <button class="btn btn-primary" type="submit">New password</button>
             </div>
            </form>


        </div>
    </div>
</div>
@endsection
