{!! Form::open(['action' => 'Admin\LoginAuthorController@setLogin', 'method' => 'POST']) !!}
<h3>Form Login For Author</h3>
{!! Form::label('username', 'Username') !!}
{!! Form::text('username') !!}
{!! Form::label('password', 'Password') !!}
{!! Form::password('password') !!}
{!! Form::submit('Login') !!}
{!! Form::close() !!}