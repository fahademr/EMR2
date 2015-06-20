@extends('layouts.admin')

@section('content')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

		      {!! BootForm::open(['url' => 'password/email', 'class' => 'form-login']) !!}
		        <h2 class="form-login-heading">Reset Password</h2>
		        <div class="login-wrap">
		            {!! BootForm::text('email') !!}
		            <br>

		            {!! BootForm::submit('Send Reset Link', ['class' => 'btn btn-theme btn-block']) !!}
		            <hr>
		            <div class="registration">
		                Already have an account yet?<br/>
		                <a class="" href="{{ url('/') }}">
		                    Login here.
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