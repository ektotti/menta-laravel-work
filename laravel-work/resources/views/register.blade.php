@extends('layouts.login')

@section('title','Register')

@section('form')
<form class="row" action="" method="POST">
    <div class="m-2 row d-flex justify-content-center">
        <label class="form-label col-2 m-0 px-4 text-end" for="name">Name</label>
        <input class="form-controll col-4" type="text" name="name" id="name">
    </div>
    <div class="m-2 row d-flex justify-content-center">
        <label class="form-label col-2 m-0 px-4 text-end" for="email">E-Mail Address</label>
        <input class="form-controll col-4" type="text" name="email" id="email">
    </div>
    <div class="m-2 row justify-content-center">
        <label class="form-label col-2 m-0 px-4 text-end" for="password">Password</label>
        <input class="form-controll col-4" type="password" name="password" id="password">
    </div>
    <div class="m-2 row justify-content-center">
        <label class="form-label col-2 m-0 px-4 text-end" for="confirm-password">ConfirmPassword</label>
        <input class="form-controll col-4" type="password" name="confirm-password" id="confirm-password">
    </div>
    <div class="col-6 mt-2 justify-content-end d-flex align-items-center">
        <input class="btn btn-primary mx-2" type="submit" value="Register">
    </div>
</form>
@endsection