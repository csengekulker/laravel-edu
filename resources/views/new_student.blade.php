<h1>Fill out the form below</h1>
<form action="students" method="post">

    {{ csrf_field() }}

    <p>
        <label for=""> Name: </label>
        <input type="text" name="name" placeholder="Name">
    </p>
    <p>
        <label for=""> Email: </label>
        <input type="text" name="email" placeholder="Email">
    </p>
    <p>
        <label for=""> Phone: </label>
        <input type="text" name="phone" placeholder="Phone">
    </p>
    <p>
        <button type="submit">Submit</button>
    </p>
</form>