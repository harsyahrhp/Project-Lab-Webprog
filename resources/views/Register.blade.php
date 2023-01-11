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
        <form action="/Register" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control" name='name' id="name"  placeholder="Full Name" is-invalid>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
              <input type="email" class="form-control" name='email' id="email" placeholder="Email">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" name='password' id="password" placeholder="Password">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name='password1' id="password1" placeholder="Confirm Password">
              </div>


    <div class="butn">
        <button type="submit" class="btn btn-warning">Register Now</button>
    </div>

          </form>
    </div>

    {{-- <div class="butn">
        <button type="submit" class="btn btn-warning">Register Now</button>
    </div> --}}
    </div>

@endsection

