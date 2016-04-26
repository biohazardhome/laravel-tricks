@extends('layouts.index')

@section('content')
	@if (!empty($errors) && count($errors->all()))
		<div class="alert alert-danger">
			<ul>
			    @foreach ($errors->all() as $error)
			        <li>{{ $error }}</li>
			    @endforeach
			</ul>
		</div>
	@endif

	<form action="/contact/store" method="POST">
		{{ csrf_field() }}

		<div class="form-group">
			<input type="text" name="name" placeholder="Name" required>
		</div>
		
		<div class="form-group">
			<input type="email" name="email" placeholder="Email" required>
		</div>

		<div class="form-group">
			<textarea name="message" placeholder="Message" required=""></textarea>
		</div>

		<button class="btn">Отправить</button>
	</form>
@endsection