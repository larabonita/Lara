@extends('app')

@section('content')

<div class="container-fluid">

	<country-select cs-required></country-select>

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Investor Type</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('firstname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">First Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('firstname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Last Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('lastname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Company Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('lastname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Address</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('lastname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">City</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('lastname') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Country</label>
							<div class="col-md-6">
								<country-select></country-select>
								<input type="text" class="form-control" name="name" value="{{ old('lastname') }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Postal Code</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('lastname') }}">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection
