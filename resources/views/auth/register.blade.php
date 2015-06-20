@extends('auth.master')

@section('content')
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

		      {!! BootForm::open(['url' => 'auth/register', 'class' => 'form-login']) !!}
		        <h2 class="form-login-heading">Register now</h2>
		        <div class="login-wrap">
		            {!! BootForm::text('name') !!}

                    {!! BootForm::email() !!}

		            {!! BootForm::password() !!}

		            {!! BootForm::password('password_confirmation', 'Confirm Password') !!}

                    {!! BootForm::select('role', null, $roles) !!}

		            {!! BootForm::submit('Register', ['class' => 'btn btn-theme btn-block']) !!}
                    <hr/>
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