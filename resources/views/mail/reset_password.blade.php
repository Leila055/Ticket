<h1>Hi {{$name}} please reset your password! </h1>

<p>
      we received a request to change your password.
      if you are not initiator of this request,please let us for security of your account.
     <br>If you are the initiator click to link below to reset your password.<br>
     <a href="{{route('app_changepassword',['token'=>$activation_token])}}" target="_blank">Reset password</a>
</p>
<p>
    Ticket security team.
</p>
