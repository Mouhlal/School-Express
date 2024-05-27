<style>
    .gradient {
      background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
    }
  </style>
 <header class='flex gradient py-3 px-6 sm:px-10 font-[sans-serif] min-h-[70px] tracking-wide relative z-50'>
    <div class='flex flex-wrap items-center justify-between gap-4 w-full'>
      <a href="/"><img src="{{ asset('storage/img/logo2.png') }}" alt="logo" class='w-12 md:w-16 md:left-10 relative' />
      </a>

      <div id="collapseMenu"
        class="max-lg:hidden lg:!flex lg:items-center max-lg:before:fixed max-lg:before:bg-black max-lg:before:opacity-40 max-lg:before:inset-0 max-lg:before:z-50">
        <button id="toggleClose" class='lg:hidden fixed top-2 right-4 z-[100] rounded-full bg-white p-3'>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 fill-black" viewBox="0 0 320.591 320.591">
            <path
              d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
              data-original="#000000"></path>
            <path
              d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
              data-original="#000000"></path>
          </svg>
        </button>

        <ul
          class='lg:!flex lg:gap-x-6 max-lg:space-y-3 max-lg:fixed max-lg:bg-[#e0e5e8] max-lg:w-2/3 max-lg:min-w-[300px] max-lg:top-0 max-lg:left-0 max-lg:px-10 max-lg:py-4 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto z-50'>
          <li class='mb-6 hidden max-lg:block'>
            <a href="javascript:void(0)"><img src="{{ asset('storage/img/logo2.png') }}"  alt="logo"
                class='w-36' />
            </a>
          </li>
          @auth
          @if(auth()->user()->isAdmin)
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href="{{route('Layout.dashboard')}}" class='text-black hover:text-white text-base flex items-center hover:underline transition duration-300'>
                Dashboard
            </a>
          </li>
          @endif
          @endauth
          @auth
          @if(auth()->user()->isAdmin)
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href="{{route('Users.index')}}" class='text-black hover:text-white text-base flex items-center hover:underline transition duration-300'>
                Employées
            </a>
          </li>
          @endif
          @endauth
          @auth
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href="{{route('Produits.index')}}" class='text-black hover:text-white text-base flex items-center hover:underline transition duration-300'>
              Produits
            </a>
          </li>
          @endauth
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href="{{route('Layout.docs')}}" class='text-black hover:text-white text-base flex items-center hover:underline transition duration-300'>
                Docs
            </a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href="{{route('Layout.collections')}}" class='text-black hover:text-white text-base flex items-center hover:underline transition duration-300'>
                Collections
            </a>
          </li>
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href="{{route('Layout.contact')}}" class='text-black hover:text-white text-base flex items-center hover:underline transition duration-300'>
                Contact
            </a>
          </li>
          @auth
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href="{{route('Users.profile',auth()->user()->id)}}" class='text-black hover:text-white text-base flex items-center hover:underline transition duration-300'>
              Profile
            </a>
          </li>
          @endauth
          @auth
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href='{{route('Users.deconnecter')}}' class='text-black hover:text-white text-base flex items-center hover:underline transition duration-300'>
              Deconnexion
            </a>
          </li>
          @endauth
          @guest
          <li class='max-lg:border-b max-lg:py-3 px-3'>
            <a href='{{route('login')}}' class='text-black hover:text-white text-base flex items-center hover:underline transition duration-300'>
              Login
            </a>
          </li>
          @endguest
        </ul>
      </div>

      <div class='flex items-center max-lg:ml-auto md:hidden'>
        <input type="text" placeholder="Enter ...."
          class=" border-2 border-black text-sm w-full px-5 bg-transparent rounded-full h-9 outline-none"></input>
        <button id="toggleOpen" class='lg:hidden ml-7'>
          <svg class="w-7 h-7 fill-white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>
<script>

  var toggleOpen = document.getElementById('toggleOpen');
  var toggleClose = document.getElementById('toggleClose');
  var collapseMenu = document.getElementById('collapseMenu');

  function handleClick() {
    if (collapseMenu.style.display === 'block') {
      collapseMenu.style.display = 'none';
    } else {
      collapseMenu.style.display = 'block';
    }
  }

  toggleOpen.addEventListener('click', handleClick);
  toggleClose.addEventListener('click', handleClick);
</script>
