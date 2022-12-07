@extends('Structer')

@section('container')

<style>
    .register{
        width: 600px;
        margin-left: 15rem;
        margin-bottom: 10rem;
        margin-top: 5rem;
    }

    .butn{
        display: flex;
        justify-content: right;
    }
</style>



<div class="register">
    <div class="singin">
        <h3>Register Form</h3>
    </div>

    <div class="input">
        <form>
            <div class="mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
              </div>
            <div class="mb-3">
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
              </div>
          </form>
    </div>

    <div class="butn">
        <button type="submit" class="btn btn-warning">Register Now</button>
    </div>
    </div>

@endsection

