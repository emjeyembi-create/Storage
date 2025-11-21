@include('components.Header')
@if ($errors->any())
    <div style="color:red">
        @foreach ($errors->all() as $error)
        @endforeach
    </div>
@endif
<form action="{{route(register)}}" method="POST">
    @csrf
    <p>Name</p>
    <input type="text" name="name"required>
    <p>Email</p>
    <input type="email" name="email"required>
    <p>Password</p>
    <input type="password" name="password"required>
    <p>Confirm Password</p>
    <input type="password" name="password"required>
    <input type="Submit">
</form>

@include('components.Footer')