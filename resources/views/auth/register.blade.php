@extends('layouts.core')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <br>
        <br>
        <div class="row">
            <div class="login-form">
                <form action="{{ url("/auth/register") }}" method="POST">
                    @csrf 
                    <h2 class="text-center">Register</h2>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>
                        {{$error}}
                        </li>
                        @endforeach
                    </ul>
                    </div>
                    @endif 
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" required="required">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="username" required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>       
                </form>
                <p class="text-center"><a href="{{ route('login') }}">Have a account?</a></p>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
@endsection

