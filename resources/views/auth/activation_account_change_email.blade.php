@extends('welcome')
@section('title', 'change yout email address')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4 mx-auto">
                        <h1 class="text-center text-muted mb-3 mt-5">Account Activation</h1>
                         <!-- on inclus les messages alerts -->
                         @include('alerts.alert-message')

                        <form method="POST" action="{{route('app_activation_account_change_email',['token'=>$token])}}">
                          @csrf
                          <div class="mb-3">
                            <label for="new-email" class="form-label"> New email address</label>
                            <input class="form-control @if(Session::has('danger')) is-invalid  @endif" type="email" name="new-email" id="vnew-email" value="@if(Session::has('new_email')){{Session::get('new_email')}} @endif" placeholder="enter the new email addresss" required>
                          </div>
                          <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Change</button>
                        </div>
                    </form>
        </div>
    </div>
</div>
@endsection
