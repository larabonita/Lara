
@extends('app')

@section('content')

	<div class="container">
		<div class="content">
			<div class="title">Laravel 5</div>
			<div class="quote">{{ Inspiring::quote() }}</div>
		</div>
	</div>


	<div ng-controller="RegisterController">
		<country-select></country-select>
</div>

@endsection

