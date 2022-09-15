<h1>Add new car</h1>
<form action="cars" method="post">

    {{ csrf_field() }}

    <p>
        <label for=""> License plate: </label>
        <input type="text" name="license" placeholder="License plate">
    </p>
    <p>
        <label for=""> Brand: </label>
        <input type="text" name="brand" placeholder="brand">
    </p>
    <p>
        <label for=""> Color: </label>
        <input type="text" name="color" placeholder="Color">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>