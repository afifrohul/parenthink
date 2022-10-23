<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('assets/img-admin/parenthink.png') }}" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <title>Login | Parenthink</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css-admin/style.css')}}">
  </head>
  {{-- <body class="bg-gradient-to-r from-teal-900 to-teal-700 font-sans-ubuntu"> --}}
  <body class="bg-gradient-to-b from-amber-100 to-amber-300 font-sans-ubuntu">
    <div
      class="min-h-screen flex flex-col items-center justify-center bg-bottom bg-no-repeat bg-contain"
    style="background-image: url({{ asset('assets/img-admin/bg.png') }})">
        <div>
            <a href="/">
                <img src="{{asset('assets/img-admin/parenthink.png')}}" class="flex-none" width="150" height="150">
            </a>
        </div>
      <div
        class="
          flex flex-col
          card-blur
          shadow-lg
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-full
          md:w-3/4
          lg:w-2/6
        "
      >
      {{-- <div
        class="
          flex flex-col
          bg-white
          shadow-md
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-full
          md:w-3/4
          lg:w-2/6
        "
      > --}}
        <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
          Welcome Back
        </div>
        <div class="mt-4 self-center text-xl sm:text-sm text-gray-800">
          Enter your credentials to login
        </div>

        <x-auth-validation-errors class="mt-2" :errors="$errors" />

        <div class="mt-4">
          <form method="POST" action="{{ route('login') }}"">
            @csrf
            <div class="flex flex-col mb-5">
              <label
                for="email"
                class="mb-1 text-xs tracking-wide text-gray-800"
                >E-Mail Address:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <i class="fas fa-at text-amber-400"></i>
                </div>

                <x-input id="email" class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-md
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-amber-400
                  " type="email" name="email" :value="old('email')" required autofocus placeholder="Enter your email"/>
              </div>
            </div>
            <div class="flex flex-col mb-6">
              <label
                for="password"
                class="mb-1 text-xs sm:text-sm tracking-wide text-gray-800"
                >Password:</label
              >
              <div class="relative">
                <div
                  class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  "
                >
                  <span>
                    <i class="fas fa-lock text-amber-400"></i>
                  </span>
                </div>

                <x-input id="password" class="text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-md
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-amber-400"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Enter your password" />

              </div>
            </div>

            <div class="flex items-center mt-4">
                <x-button class="w-full justify-center mt-2">
                    {{ __('L o g  i n') }}
                    <svg
                    class="h-6 w-6 ml-2"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"
                    />
                  </svg>
                </x-button>
            </div>
          </form>
          <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Create new account?') }}
                </a>
            </div>
        </div>
      </div>
      <div class="flex justify-center items-center mt-6">
        {{-- <a
          href="http://hmifunej.id"
          target="_blank"
          class="
            inline-flex
            items-center
            text-gray-700
            font-medium
            text-xs text-center
          "
        > --}}
          <span class="text-gray-800"
            >© Copyright 2022
            </span
          >
        </a>
      </div>
    </div>
  </body>
</html>