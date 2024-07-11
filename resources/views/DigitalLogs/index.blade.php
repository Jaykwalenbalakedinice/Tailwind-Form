<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="flex items-center justify-center h-screen">
    <div class="min-h-[400px] min-w-[600px] items-center justify-center grid grid-cols-12 rounded-lg outline outline-1 outline-blue-900 shadow-md">
        <div class="text-white col-span-12 md:col-span-12 bg-blue-700 h-full">
            <img src="{{ asset('images/banner_final.jpg') }}" alt="Website Banner">
        </div>
        <div class="text-white col-span-12 h-full min-h-[200px]">
            <div class="text-center mt-8">
                <a href="{{ route('DigitalLogs.digitalForm') }}">
                    <button
                        class="bg-green-700 hover:bg-green-500 ease-in duration-100 text-white font-bold py-4 min-w-[400px] rounded-md">
                        Login
                    </button>
                </a>
            </div>
            <div class="text-center mt-5">
                <button
                    class="bg-red-700 hover:bg-red-500 ease-in duration-100 text-white font-bold py-4 min-w-[400px] rounded-md">
                    <a href="">Logout</a>
                </button>
            </div>
        </div>
    </div>
</body>

</html>
