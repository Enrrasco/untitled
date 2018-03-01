@extends('layouts.default')

@section('content')
    <form role="form" id="contact-form" class="contact-form" method="POST" action="{{route('contact.store')}}">
        {{ csrf_field() }}
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Message</th>
            <th scope="col">Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td><a href="http://www.firstmessage.com/html/">First Message</a></td>
            <td><button type="button" class="btn btn-primary">Delete</button></td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td><a href="http://www.secondmessage.com/html/">Second Message</a></td>
            <td><button type="button" class="btn btn-primary">Delete</button></td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td><a href="http://www.thirdmessage.com/html/">Third Message</a></td>
            <td><button type="button" class="btn btn-primary">Delete</button></td>
        </tr>
        </tbody>
    </table>
    </form>
@endsection