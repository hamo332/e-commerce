<h1>Create Message</h1>

<form action="{{route('messages.store')}}" method="post">
    @csrf
    <input type="text" name="title" placeholder="write title">
    <input type="text" name="body" placeholder="write body">
    <input type="submit">
</form>