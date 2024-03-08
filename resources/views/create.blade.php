<form method="POST" action="/products">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="description" placeholder="description">

    <button type="submit">Test Me</button>
</form>

<form method="DELETE" action="/products/1">
    @csrf 
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Delete Me</button>
</form>