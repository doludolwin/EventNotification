<form method="POST" action="/users/{{ Auth::id() }}/notifications/{{$notifications->id}}">
	{{method_field('DELETE')}}
	{{ csrf_field() }}
	<button type="submit">@include('notifications.'.snake_case(class_basename($notifications->type)))</button>
</form>