<x-guest-layout>
    <div class="text-center mb-4">
        <h3 class="text-body-highlight">Sign In</h3>
        <p class="text-body-tertiary fs-9">Get access to your account</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="mb-3 text-start">
            <label class="form-label" for="email">Email address</label>
            <div class="form-icon-container">
                <input class="form-control form-icon-input @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="name@example.com" />
                <span class="fas fa-user text-body fs-9 form-icon"></span>
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <!-- Password -->
        <div class="mb-3 text-start">
            <div class="d-flex justify-content-between align-items-center mb-1">
                <label class="form-label mb-0" for="password">Password</label>
                @if (Route::has('password.request'))
                    <a class="fs-9 text-primary text-decoration-none fw-semibold" href="{{ route('password.request') }}">
                        Forgot password?
                    </a>
                @endif
            </div>
            <div class="form-icon-container">
                <input class="form-control form-icon-input @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
                <span class="fas fa-key text-body fs-9 form-icon"></span>
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <!-- Remember Me -->
        <div class="row flex-between-center mb-4">
            <div class="col-auto">
                <div class="form-check mb-0">
                    <input class="form-check-input" id="remember_me" type="checkbox" name="remember" />
                    <label class="form-check-label mb-0 text-body-tertiary fs-9" for="remember_me">Remember me</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100 mb-3">Sign In</button>

        @if (Route::has('register'))
            <div class="text-center">
                <a class="fs-9 text-primary text-decoration-none fw-bold" href="{{ route('register') }}">Create an account</a>
            </div>
        @endif
    </form>
</x-guest-layout>
