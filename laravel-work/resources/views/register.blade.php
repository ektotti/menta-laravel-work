@extends('layouts.base')

@section('mainManu')
<a class="text-muted mx-3" href="login">login</a>
<a class="text-muted" href="register">register</a>
@endsection

@section('title','Register')

@section('mainContent')
<form class="row" action="register" method="POST">
    @csrf

    <div class="m-2 row d-flex flex-column">
        @error('name')
        <p class="col-7 align-self-end mb-2 text-start px-0 ">エラー：{{$message}}</p>
        @enderror
        <div class="row d-flex">
            <label class="form-label col-5 m-0 px-2 text-end" for="name">Name</label>
            <input class="form-controll mx-2 col-4" type="text" name="name" id="name">
        </div>
    </div>
    
    <div class="m-2 row d-flex flex-column">
        @error('email')
        <p class="col-7 align-self-end mb-2 text-start px-0 ">エラー：{{$message}}</p>
        @enderror
        <div class="row d-flex">
            <label class="form-label col-5 m-0 px-2 text-end" for="email">E-Mail Address</label>
            <input class="form-controll mx-2 col-4" type="text" name="email" id="email">
        </div>
    </div>
    
    <div class="m-2 row d-flex flex-column">
        @error('password')
        <p class="col-7 align-self-end mb-2 text-start px-0 ">エラー：{{$message}}</p>
        @enderror
        <div class="row d-flex">
            <label class="form-label col-5 m-0 px-2 text-end" for="password">Password</label>
            <input class="form-controll mx-2 col-4" type="password" name="password" id="password">
        </div>
    </div>
    
    <div class="m-2 row d-flex flex-column">
        @error('confirm-password')
        <p class="col-7 align-self-end mb-2 text-start px-0 ">エラー：{{$message}}</p>
        @enderror
        <div class="row d-flex">
            <label class="form-label col-5 m-0 px-2 text-end" for="confirm-password">ConfirmPassword</label>
            <input class="form-controll mx-2 col-4" type="password" name="confirm-password" id="confirm-password">
        </div>
    </div>
    
    <div class="col-6 mt-2 justify-content-end d-flex align-items-center">
        <input class="btn btn-primary mx-2" type="submit" value="Register">
    </div>
</form>
@endsection