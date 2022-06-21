

<x-app-layout>

    <h3>مرحبا : {{Auth::user()->name}}</h3>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('success')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form action="{{ route('users.update', Auth::id()) }}" method="POST">
        @csrf
        @method('PATCH')

        <div class="proDet">
            <span> <i class="fa-solid fa-envelope"></i></span>
            <div>
            <h5>{{ __('messages.name') }}</h5>
            <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" />
            </div>
        </div>

        <div class="proDet">
            <span> <i class="fa-solid fa-envelope"></i></span>
            <div>
            <h5>{{ __('messages.username') }}</h5>
            <input type="text" name="username" value="{{ old('username', Auth::user()->username) }}" />
            </div>
        </div>

        <div class="proDet">
            <span> <i class="fa-solid fa-envelope"></i></span>
            <div>
            <h5>{{ __('messages.email') }}</h5>
            <input type="text" name="email" value="{{ old('email', Auth::user()->email) }}" />
            </div>
        </div>

        <div class="proDet">
            <span> <i class="fa-solid fa-envelope"></i></span>
            <div>
            <h5>{{ __('messages.phone') }}</h5>
            <input type="text" name="phone" value="{{ old('phone', Auth::user()->phone) }}" />
            </div>
        </div>

        <div class="proDet">
            <span> <i class="fa-solid fa-envelope"></i></span>
            <div>
            <h5>{{ __('messages.address') }}</h5>
            <input type="text" name="address" value="{{ old('address', Auth::user()->address) }}" />
            </div>
        </div>

        <button
            type="submit"
            class="btn grBtn"
        >
            {{ __('messages.update') }}
        </button>

        <img src="{{ asset('assets/img/fire.jpg') }}" alt="" class="fire" />
    </form>

</x-app-layout>