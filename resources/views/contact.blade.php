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

	<input type="text" name="name" placeholder="Name" required>
	<input type="email" name="email" placeholder="email" required>

	<textarea name="message" placeholder="message" required=""></textarea>

	<button>Отправить</button>
</form>