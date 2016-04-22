
<form action="/contact/store" method="POST">
	{{ csrf_token() }}

	<input type="text" name="name" placeholder="Name" required>
	<input type="email" name="email" placeholder="email" required>

	<textarea name="message" placeholder="message" required=""></textarea>

	<button>Отправить</button>
</form>