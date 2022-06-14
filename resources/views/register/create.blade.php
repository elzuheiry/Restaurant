

<x-app-layout>

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form action="{{ route('register') }}" method="POST">
      @csrf

      <div class="proDet">
        <span> <i class="fas fa-user"></i></span>
        <div>
          <h5>{{ __('messages.name') }}</h5>
          <input type="text" name="name" value="{{ old('name') }}" />
        </div>
      </div>

      <div class="proDet">
        <span> <i class="fas fa-user"></i></span>
        <div>
          <h5>{{ __('messages.username') }}</h5>
          <input type="text" name="username" value="{{ old('username') }}" />
        </div>
      </div>

        <div class="proDet">
          <span> <i class="fa-solid fa-envelope"></i></span>
          <div>
            <h5>{{ __('messages.email') }}</h5>
            <input type="text" name="email" value="{{ old('email') }}" />
          </div>
        </div>


        <div class="proDet">
          <span> <i class="fa-solid fa-lock"></i></span>
          <div>
            <h5>{{ __('messages.password') }}</h5>
            <input type="password" name="password" id="" />
          </div>
        </div>

        <div class="proDet">
            <span> <i class="fa-solid fa-lock"></i></span>
            <div>
              <h5>{{ __('messages.password-conformation') }}</h5>
              <input type="password" name="password_confirmation" id="" />
            </div>
        </div>

        <button
          type="submit"
          class="btn grBtn"
        >
          {{ __('messages.sign-up') }}
        </button>
        <img src="{{ asset('assets/img/fire.jpg') }}" alt="" class="fire" />
    </form>

</x-app-layout>