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
        <form action="/Login" method="post">
            @csrf
            <div class="mb-3">
              <input type="email" class="form-control @error('email')
                  is-invalid
              @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="Email" required>

              @error('email')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>

            <div class="butn">
                <button type="submit" class="btn btn-warning">Login</button>
            </div>

          </form>
    </div>


    </div>

@endsection

