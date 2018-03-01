@extends('layouts.default')
@section('content')
    <body class="text-center">
    <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Sign up</h1>
        <label for="name" class="sr-only">Name</label>
        <input type="name" id="inputName" class="form-control" placeholder="Name" required>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword2" class="sr-only">Password2</label>
        <input type="password2" id="confirmPassword" class="form-control" placeholder="Confirm Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
    </form>
    </body>
@endsection