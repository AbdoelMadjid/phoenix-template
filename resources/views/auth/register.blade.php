<x-guest-layout>
    <div class="text-center mb-4">
        <h3 class="text-body-highlight">Sign Up</h3>
        <p class="text-body-tertiary fs-9">Create your account today</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3 text-start">
            <label class="form-label" for="name">Name</label>
            <div class="form-icon-container">
                <input class="form-control form-icon-input @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Full Name" />
                <span class="fas fa-user text-body fs-9 form-icon"></span>
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-1" />
        </div>

        <!-- Email Address -->
        <div class="mb-3 text-start">
            <label class="form-label" for="email">Email address</label>
            <div class="form-icon-container">
                <input class="form-control form-icon-input @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="name@example.com" />
                <span class="fas fa-envelope text-body fs-9 form-icon"></span>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <!-- Password -->
        <div class="mb-3 text-start">
            <label class="form-label" for="password">Password</label>
            <div class="form-icon-container">
                <input class="form-control form-icon-input @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
                <span class="fas fa-key text-body fs-9 form-icon"></span>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4 text-start">
            <label class="form-label" for="password_confirmation">Confirm Password</label>
            <div class="form-icon-container">
                <input class="form-control form-icon-input" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                <span class="fas fa-key text-body fs-9 form-icon"></span>
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
        </div>

        <button type="submit" class="btn btn-primary w-100 mb-3">Sign Up</button>

        <div class="text-center">
            <a class="fs-9 text-primary text-decoration-none fw-bold" href="{{ route('login') }}">Already registered? Sign in</a>
        </div>
    </form>
</x-guest-layout>
