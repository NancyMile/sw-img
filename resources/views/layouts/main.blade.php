<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply bg-white uppercase rounded-md mt-2 px-4 py-2 text-center text-sm font-medium text-sky-700 shadow-sm hover:bg-sky-50 h-10  object-fill;
        }

        .input {
            @apply shadow-sm appearance-none border min-[358px]:h-[44px] min-[358px]:w-[358px] w-[480px] h-[37.77px] py-2 px-3 text-sky-700 leading-tight focus:outline-none rounded-md border-sky-300;
        }

        .image-container {
            @apply  object-fill h-[200px] w-[200px] min-[358px]:h-[358px] min-[358px]:w-[358px] lg:h-[412px] lg:w-[480px] rounded-md bg-white shadow-md shadow-black/5;
        }

        .frame {
            @apply rounded-md bg-sky-50 py-10 px-4 text-center text-sky-500 shadow-md shadow-black/5 ;
        }

        .title {
            @apply font-sans font-bold text-sky-500 text-sm lg:text-5xl;
        }
        .label {
            @apply font-sans font-normal text-sky-900 text-sm flex items-start;
        }
    </style>
    {{-- blade-formatter-enable --}}
</head>
<body  class="container mx-auto mt-10 mb-10 max-w-4xl bg-trueGray-100">
    @yield('content')
    @livewireScripts
</body>
</html>
