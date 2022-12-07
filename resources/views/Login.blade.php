@extends('Structer')

@section('container')

<style>
    .login{
        width: 300px;
        margin-left: 25rem;
        margin-bottom: 10rem;
        margin-top: 5rem;
    }

    .butn{
        display: flex;
        justify-content: right;
    }
</style>



<div class="login">
    <div class="singin">
        <h3>Please Sign In</h3>
    </div>

    <div class="input">
        <form>
            <div class="mb-3">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
          </form>
    </div>

    <div class="butn">
        <button type="submit" class="btn btn-warning">Login</button>
    </div>
    </div>

@endsection

