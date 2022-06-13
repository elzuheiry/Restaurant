

<x-layout>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div class="proDet">
            <span> <i class="fa-solid fa-envelope"></i></span>
            <div>
              <h5>البريد الاكترونى</h5>
              <input type="email" name="email" value="{{ old('email') }}" required autofocus/>
            </div>
        </div>

        <button
          type="submit"
          class="btn grBtn"
        >
        {{ __('Email Password Reset Link') }}
        </button>

        <img src="{{ asset('assets/img/fire.jpg') }}" alt="" class="fire" />

        
    </form>

</x-layout>
