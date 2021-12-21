@extends('layouts.base')

@section('mainManu')
<a class="text-muted mx-3" href="login">login</a>
<a class="text-muted" href="register/create">register</a>
@endsection

@section('title','Login')

@section('mainContent')
<form class="row" action="" method="POST">
    <div class="m-2 row d-flex justify-content-center">
        <label class="form-label col-2 m-0 px-4 text-end" for="email">E-Mail Address</label>
        <input class="form-controll col-4" type="text" name="email" id="email">
    </div>
    <div class="m-2 row justify-content-center">
        <label class="form-label col-2 m-0 px-4 text-end" for="password">Password</label>
        <input class="form-controll col-4" type="password" name="password" id="password">
    </div>
    <div class="col-12 mt-2 justify-content-center d-flex align-items-center">
        <input class="btn btn-primary mx-2" type="submit" value="Login">
        <a class="text-muted" href="">forget your password?</a>
    </div>
</form>
@endsection