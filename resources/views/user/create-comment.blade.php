<h1>Create Comment</h1>

<form action="{{route('comments.store')}}" method="post">
    @csrf
    <input type="text" name="comment" placeholder="write comment">
    <input type="text" name="product_id" value="4" hidden>
    <input type="submit">
</form>