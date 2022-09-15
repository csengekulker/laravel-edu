@include('master.header')

<h1>Admin About View</h1>

@foreach ( $names as $name ) 

    <h3>{{$name}}</h3>
@endforeach