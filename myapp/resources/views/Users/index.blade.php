<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('storage/img/logowhite.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Employées</title>
</head>
<body>

    @include('Layout.nav')

    @if (session('succes'))
    <div class="alert alert-success m-3">
        {{ session('succes') }}
    </div>
    @endif

    @if (session('update'))
    <div class="alert alert-success m-3">
        {{ session('update') }}
    </div>
    @endif

    @if (session('delete'))
    <div class="alert alert-danger m-3">
        {{ session('delete') }}
    </div>
    @endif



      <div class="p-12">
          <div class="relative flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
            <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
              <div class="flex items-center justify-between gap-8 mb-8">
                <div>
                  <h5
                    class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    Employées list
                  </h5>
                  <p class="block mt-1 font-sans text-base antialiased font-normal leading-relaxed text-gray-700">
                    See information about all members
                  </p>
                </div>
                <div class="flex flex-col gap-2 shrink-0 sm:flex-row">
                  <button
                    class="select-none rounded-lg border border-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-gray-900 transition-all hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                    type="button">
                    <a href="{{route('Users.index')}}">view all</a>
                  </button>
                  <a href="{{route('Users.add')}}">
                      <button
                        class="flex select-none items-center gap-3 rounded-lg bg-gray-900 py-2 px-4 text-center align-middle font-sans text-xs font-bold uppercase text-white shadow-md shadow-gray-900/10 transition-all hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                        type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                          stroke-width="2" class="w-4 h-4">
                          <path
                            d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                          </path>
                        </svg>
                        Add member
                      </button>
                  </a>
                </div>
              </div>
              <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
                <div class="block w-full overflow-hidden md:w-max">
                  <nav>
                    <ul role="tablist" class="relative flex flex-row p-1 rounded-lg bg-blue-gray-50 bg-opacity-60">
                      <li role="tab"
                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center bg-transparent cursor-pointer select-none text-blue-gray-900"
                        data-value="all">
                        <div class="z-20 text-inherit">
                          &nbsp;&nbsp;All&nbsp;&nbsp;
                        </div>
                        <div class="absolute inset-0 z-10 h-full bg-white rounded-md shadow"></div>
                      </li>
                      <li role="tab"
                        class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center bg-transparent cursor-pointer select-none text-blue-gray-900"
                        data-value="monitored">
                        <div class="z-20 text-inherit">
                          &nbsp;&nbsp;Monitored&nbsp;&nbsp;
                        </div>
                      </li>
                    </ul>
                  </nav>
                </div>
                <div class="w-full md:w-72">
                  <form action="/users" class="relative h-10 w-full min-w-[200px]">
                    <div class="absolute grid w-5 h-5 top-2/4 right-3 -translate-y-2/4 place-items-center text-blue-gray-500">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                      </svg>
                    </div>
                    <input
                      class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 !pr-9 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                      placeholder=" "  name="search"/>
                    <label
                      class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                      Search
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-6 px-0 overflow-scroll">
              <table class="w-full mt-4 text-left table-auto min-w-max">
                <thead>
                  <tr>
                    <th
                      class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                      <p
                        class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                        Member
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                      </p>
                    </th>
                    <th
                      class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                      <p
                        class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                        Cin
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                      </p>
                    </th>
                    <th
                      class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                      <p
                        class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Salaries
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                      </p>
                    </th>
                    <th
                      class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                      <p
                        class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                        Date Début Travail
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                          stroke="currentColor" aria-hidden="true" class="w-4 h-4">
                          <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
                        </svg>
                      </p>
                    </th>
                    <th
                      class="p-4 transition-colors cursor-pointer border-y border-blue-gray-100 bg-blue-gray-50/50 hover:bg-blue-gray-50">
                      <p
                        class="flex items-center justify-between gap-2 font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                      </p>
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($user as $use)
                  <tr>
                    <td class="p-4 border-b border-blue-gray-50">
                      <div class="flex items-center gap-3">
                        <a href="{{route('Users.profile' ,$use->id)}}" title="voir profile">
                        <img src="{{ asset('storage/'.$use->image) }}"
                        alt="{{ $use->name }}" class="relative inline-block h-9 w-9 rounded-full object-cover object-center" />
                        </a>
                        <div class="flex flex-col">
                          <a href="{{route('Users.profile' ,$use->id)}}" title="voir profile">
                              <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                               {{$use->name}}
                              </p>
                          </a>
                          <a href="mailto:{{$use->email}}" title="send mail">
                              <p
                                class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                               {{$use->email}}
                              </p>
                          </a>
                        </div>
                      </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                      <div class="flex flex-col">
                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                            {{$use->cin}}
                        </p>
                      </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                      <div class="w-max">
                        <div
                          class="relative grid items-center px-2 py-1 font-sans text-xs font-bold text-green-900 uppercase rounded-md select-none whitespace-nowrap bg-green-500/20">
                          <span class=""> {{$use->salaries}} $ </span>
                        </div>
                      </div>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                      <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                        {{$use->Date_Début_travail}}
                      </p>
                    </td>
                    <td class="p-4 border-b border-blue-gray-50">
                      <a href="{{route('Users.edit' , $use->id )}}">
                          <button
                            class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-gray-900 transition-all hover:bg-gray-900/10 active:bg-gray-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="button">
                            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                class="w-4 h-4">
                                <path
                                  d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
                                </path>
                              </svg>
                            </span>
                          </button>
                      </a>
                      <a href="{{route('Users.delete' , $use->id )}}">
                        <button>
                            Delete
                        </button>
                    </a>
                    </td>
                  </tr>


                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="flex items-center justify-between p-4 border-t border-blue-gray-50">
             {{--  <p class="text-sm text-gray-600">
                {{ $use->appends(['search' => $search])->links() }}
              </p> --}}

            </div>
          </div>
      </div>
</body>
</html>
