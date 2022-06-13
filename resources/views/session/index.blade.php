
<x-app-layout>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form action="{{ route('login') }}" method="POST">
      @csrf

        <div class="proDet">
          <span> <i class="fa-solid fa-envelope"></i></span>
          <div>
            <h5>البريد الاكترونى</h5>
            <input type="text" name="email" value="{{ old('email') }}" />
          </div>
        </div>


        <div class="proDet">
          <span> <i class="fa-solid fa-lock"></i></span>
          <div>
            <h5>كلمه المرور</h5>
            <input type="password" name="password" id="" />
          </div>
        </div>

        <button
          type="submit"
          class="btn grBtn"
        >
          تسجيل الدخول
        </button>

        <img src="{{ asset('assets/img/fire.jpg') }}" alt="" class="fire" />
    </form>

</x-app-layout>