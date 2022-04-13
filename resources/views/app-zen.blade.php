<!-- component -->
<!DOCTYPE html>
<html class="h-full" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="./tailwind.css" />
  <title>{{ config('app.name', 'Laravel') }}</title>
  <style>
  html {
    font-size: 14px;
    line-height: 1.285;
  }

  html,
  body {
    width: 100%;
    height: 100%;
  }

  /* can be configured in tailwind.config.js */
  .group:hover .group-hover\:block {
    display: block;
  }

  .focus\:cursor-text:focus {
    cursor: text;
  }

  .focus\:w-64:focus {
    width: 16rem;
  }


  .hover\:border-green-500:hover {
    border-color: #78a300;
  }

  </style>
  <!-- Fonts -->
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body class="h-full antialiased">
  <!-- you can clone or fork the repo if you want -->
  <!-- https://github.com/bluebrown/tailwind-zendesk-clone   -->

  <div class="flex h-full w-full overflow-hidden bg-secondary-50 text-secondary-800 antialiased">
    <!-- section body side nav -->
    <nav aria-label="side bar" aria-orientation="vertical"
      class="md:flex flex-none flex-col items-center border-r text-center bg-secondary-900 text-secondary-400 hidden">
      <div class="flex h-16 w-full items-center ">
        <img class="mx-auto h-6 w-6 hidden"
          src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/leaves.png" />
        <x-logo class="mx-auto h-12 w-12" />
      </div>

      <ul class="">
        <li>
          <a title="Home" href="{{route('home') }}"
            class="flex h-16 w-full items-center bg-secondary-700 px-6 text-white">
            <i class="mx-auto">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                  d="M12 6.453l9 8.375v9.172h-6v-6h-6v6h-6v-9.172l9-8.375zm12 5.695l-12-11.148-12 11.133 1.361 1.465 10.639-9.868 10.639 9.883 1.361-1.465z" />
              </svg>
            </i>
          </a>
        </li>
        <li>
          <a title="Views" href="#views" class="flex h-16 w-full items-center px-6 hover:text-white">
            <i class="mx-auto">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                  d="M18.546 3h-13.069l-5.477 8.986v9.014h24v-9.014l-5.454-8.986zm-3.796 12h-5.5l-2.25-3h-4.666l4.266-7h10.82l4.249 7h-4.669l-2.25 3zm-9.75-4l.607-1h12.787l.606 1h-14zm12.18-3l.607 1h-11.573l.607-1h10.359zm-1.214-2l.606 1h-9.144l.607-1h7.931z" />
              </svg>
            </i>
          </a>
        </li>
        <li>
          <a title="Customer Lists" href="#customer-lists" class="flex h-16 w-full items-center px-6 hover:text-white">
            <i class="mx-auto">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                  d="M19 7.001c0 3.865-3.134 7-7 7s-7-3.135-7-7c0-3.867 3.134-7.001 7-7.001s7 3.134 7 7.001zm-1.598 7.18c-1.506 1.137-3.374 1.82-5.402 1.82-2.03 0-3.899-.685-5.407-1.822-4.072 1.793-6.593 7.376-6.593 9.821h24c0-2.423-2.6-8.006-6.598-9.819z" />
              </svg>
            </i>
          </a>
        </li>
        <li>
          <a title="Reporting" href="#reporting" class="flex h-16 w-full items-center px-6 hover:text-white">
            <i class="mx-auto">
              <svg class="h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path d="M5 19h-4v-4h4v4zm6 0h-4v-8h4v8zm6 0h-4v-13h4v13zm6 0h-4v-19h4v19zm1 2h-24v2h24v-2z" />
              </svg>
            </i>
          </a>
        </li>
        <li>
          <a title="Admin" href="{{route('profile.show')}}"
            class=" flex h-16 w-full items-center px-6 hover:text-white">

            <x-heroicon-s-cog class="h-6 w-6 fill-current" />
          </a>
        </li>
      </ul>

      <div class="mt-auto flex h-16 w-full items-center">
        <img style="filter: invert(85%);" class="mx-auto h-8 w-10"
          src="https://raw.githubusercontent.com/bluebrown/tailwind-zendesk-clone/master/public/assets/chi.png" />
      </div>
    </nav>

    <!-- content -->
    <x-layout.content />
  </div>
</body>

</html>
