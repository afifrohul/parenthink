{{-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button> --}}
<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex
                  mt-2
                  items-center
                  justify-center
                  focus:outline-none
                  text-white text-sm
                  sm:text-base
                  bg-amber-500
                  hover:bg-amber-600
                  rounded-md
                  py-2
                  w-full
                  transition
                  duration-150
                  ease-in
                  uppercase']) }}>
    {{ $slot }}
</button>
