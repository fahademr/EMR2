@extends('layouts.admin')

@section('content')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

		      {!! BootForm::open(['url' => 'auth/login', 'class' => 'form-login']) !!}
		        <h2 class="form-login-heading">Sign in now</h2>
		        <div class="login-wrap">
		            {!! BootForm::text('email') !!}

		            {!! BootForm::password() !!}

                    {!! BootForm::checkbox('remember') !!}
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a href="{{ url('password/email') }}"> Forgot Password?</a>
		                </span>
		            </label>
		            {!! BootForm::submit('SIGN IN', ['class' => 'btn btn-theme btn-block']) !!}
		            <hr>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="{{ url('auth/register') }}">
		                    Create an account
		                </a>
		            </div>

		        </div>
                {!! BootForm::close() !!}
	  	</div>
	  </div>
@stop

@section('scripts')
    <script>
        $.backstretch("/assets/img/doc.jpg", {speed: 500});
    </script>
@stop