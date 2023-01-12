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
                <input type="text" class="form-control @error('name')
                    is-invalid
                @enderror" name='name' id="name"  placeholder="Full Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
              <input type="email" class="form-control @error('email')
              is-invalid
          @enderror" name='email' id="email" placeholder="Email">
          @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
              <input type="password" class="form-control @error('password')
              is-invalid
          @enderror" name='password' id="password" placeholder="Password">
              @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control @error('password1')
                is-invalid
            @enderror" name='password1' id="password1" placeholder="Confirm Password">
            @error('password1')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
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

