@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">Dashboard
					<p> {{session('status')}} </p>
				</div>
				<div class="card-body">
					@if (Auth::user())
					<div class="alert alert-success" role="alert">
						<p class="h4">
							You are logged in! <br/>
							Welcome, {{Auth::user()->name}}
						</p>
					</div>
					@else
					<div class="alert alert-danger" role="alert">
						<p class="h4 text-center" style="padding-bottom:5px">Please login to continue</p>
						@include('auth.loginform')
					</div>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
