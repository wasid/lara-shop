@extends('layouts.master')

@section('title')
Lara Shop
@endsection

@section('content')
	<div class="row main">
				<div class="panel-heading">
	               <div class="panel-title text-center">
	               		<h1 class="title">Sign Up</h1>
	               		<hr />
	               	</div>
	            </div> 
				<div class="main-login main-center">
					@if(count($errors) > 0)
					<div class="alert alert-danger">
					    @foreach($errors->all() as $error)
					        <p>{{$error}}</p>
					    @endforeach
					</div>
					@endif				    
					<form class="form-horizontal" method="post" action="{{ route('user.signup') }}">
						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						{{ csrf_field() }}
					</form>
				</div>
			</div>
@endsection