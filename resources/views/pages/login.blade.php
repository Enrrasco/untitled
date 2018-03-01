@extends('layouts.default')
@section('content')
    <body class="text-center">
    <form class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Log in</h1>
        <label for="inputname" class="sr-only">Username</label>
        <input type="username" id="inputname" class="form-control" placeholder="User name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
    </form>
    </body>
@endsection