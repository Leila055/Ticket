<h1>Hi {{$name}} please confirm your email! </h1>

<p>
Please activate your account by coping and pasting the activation code.
    <br>Activation code : {{$activation_code}}.<br>
    or by clicking the following link: <br>
    <a href="{{route('app_activation_account_link',['token'=>$activation_token])}}" target="_blank">confirm your account</a>
</p>
<p>
    Ticket team.
</p>
