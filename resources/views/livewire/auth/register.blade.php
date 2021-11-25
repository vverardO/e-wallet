@section('title') Register @endsection
<div>
    @error('email')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
    @enderror
    <form wire:submit.prevent="register" >
        <h1 class="h3 mb-3 fw-normal">Please register</h1>
        <div class="form-floating">
            <input type="text" wire:model="name" class="form-control" id="floatingName" placeholder="name">
            <label for="floatingName">Name</label>
        </div>
        <div class="form-floating">
            <input type="email" wire:model="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
            <label for="floatingEmail">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" wire:model.lazy="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    </form>

    <div class="mt-6">
        <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">
            <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                Already registered?
            </a>
        </p>
    </div>
</div>

@section('css')
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="text"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-top-right-radius: 0;
            border-top-left-radius: 0;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
@endsection
