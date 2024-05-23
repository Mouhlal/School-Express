<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Docs</title>
</head>
<body>
    @include('Layout.nav')

    <div class="relative mb-3">
        <h6 class="mb-0">
          <button
            class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-slate-700 rounded-t-1 group text-dark-500"
            data-collapse-target="animated-collapse-1"
          >
            <span>What is Material Tailwind?</span>
            <i class="absolute right-0 pt-1 text-base transition-transform fa fa-chevron-down group-open:rotate-180"></i>
          </button>
        </h6>
        <div
          data-collapse="animated-collapse-1"
          class="h-0 overflow-hidden transition-all duration-300 ease-in-out"
        >
          <div class="p-4 text-sm leading-normal text-blue-gray-500/80">
            We're not always in the position that we want to be at. We're constantly
            growing. We're constantly making mistakes. We're constantly trying to
            express ourselves and actualize our dreams.
          </div>
        </div>
      </div>
      <div class="relative mb-3">
        <h6 class="mb-0">
          <button
            class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-slate-700 rounded-t-1 group text-dark-500"
            data-collapse-target="animated-collapse-2"
          >
            <span>How to use Material Tailwind?</span>
            <i class="absolute right-0 pt-1 text-base transition-transform fa fa-chevron-down group-open:rotate-180"></i>
          </button>
        </h6>
        <div
          data-collapse="animated-collapse-2"
          class="h-0 overflow-hidden transition-all duration-300 ease-in-out"
        >
          <div class="p-4 text-sm leading-normal text-blue-gray-500/80">
            We're not always in the position that we want to be at. We're constantly
            growing. We're constantly making mistakes. We're constantly trying to
            express ourselves and actualize our dreams.
          </div>
        </div>
      </div>
      <div class="relative mb-3">
        <h6 class="mb-0">
          <button
            class="relative flex items-center w-full p-4 font-semibold text-left transition-all ease-in border-b border-solid cursor-pointer border-slate-100 text-slate-700 rounded-t-1 group text-dark-500"
            data-collapse-target="animated-collapse-3"
          >
            <span>What can I do with Material Tailwind?</span>
            <i class="absolute right-0 pt-1 text-base transition-transform fa fa-chevron-down group-open:rotate-180"></i>
          </button>
        </h6>
        <div
          data-collapse="animated-collapse-3"
          class="h-0 overflow-hidden transition-all duration-300 ease-in-out"
        >
          <div class="p-4 text-sm leading-normal text-blue-gray-500/80">
            We're not always in the position that we want to be at. We're constantly
            growing. We're constantly making mistakes. We're constantly trying to
            express ourselves and actualize our dreams.
          </div>
        </div>
      </div>

</body>
</html>
