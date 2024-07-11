<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tailwind Form</title>
</head>

<body class="flex justify-center h-screen">
    <div class="w-full max-w-2xl mx-auto my-5 shadow-md pb-4">
        <div class="h-[150px] md:h-[200px]">
            <img class="w-full rounded-t-lg h-[150px] md:h-[200px]" src="{{ asset('images/banner_final.jpg') }}"
                alt="Website Banner">
        </div>
        <div class="grid grid-cols-2 gap-x-4 gap-y-2 px-3 pt-2"> <!-- Adjusted grid and gaps -->
            <div class="col-span-1">
                <label class="block text-sm font-medium text-gray-700" for="firstName">First Name</label>
                <input type="text" name="firstName" id="firstName" maxlength="50"
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    placeholder="JUAN" required>
            </div>
            <div class="col-span-1">
                <label class="block text-sm font-medium text-gray-700" for="middleInitial">Middle Initial</label>
                <input type="text" name="middleInitial" id="middleInitial" maxlength="50"
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    placeholder="TAMAD" required>
            </div>
            <div class="col-span-1">
                <label class="block text-sm font-medium text-gray-700" for="lastName">Last Name</label>
                <input type="text" name="lastName" id="lastName" maxlength="50"
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    placeholder="DELA CRUZ" required>
            </div>
            <div class="col-span-1">
                <label class="block text-sm font-medium text-gray-700" for="emailAddress">Email Address</label>
                <input type="email" name="emailAddress" id="emailAddress" maxlength="50"
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    placeholder="YourEmail@gmail.com" required>
            </div>
            <div class="col-span-1">
                <label class="block text-sm font-medium text-gray-700" for="gender">Gender</label>
                <select name="gender" id="gender"
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="col-span-1">
                <label class="block text-sm font-medium text-gray-700" for="region">Region</label>
                <select id="region" name="region"
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    aria-label="Default select example" onchange="loadProvince(); changeColor(this);" required>
                    <option value="" disable selected>Select Region</option>
                </select>
            </div>
            <div class="col-span-1">
                <label class="block text-sm font-medium text-gray-700" for="province">Province</label>
                <select id="province" name="province"
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    aria-label="Default select example" onchange="loadMunicipality(); changeColor(this);" required>
                    <option value="" disable selected>Select Province</option>
                </select>
            </div>
            <div class="col-span-1">
                <label class="block text-sm font-medium text-gray-700" for="region">Municipality</label>
                <select id="municipality" name="municipality"
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    aria-label="Default select example" onchange="loadBarangay(); changeColor(this);" required>
                    <option value="" disable selected>Select Municipality</option>
                </select>
            </div>

            <div class="col-span-1">
                <label class="block text-sm font-medium text-gray-700" for="barangay">Barangay</label>
                <select id="barangay" name="barangay"
                    class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                    aria-label="Default select example" onchange="changeColor(this);" required>
                    <option value="" disable selected>Select Barangay</option>
                </select>
            </div>
        </div>
    </div>
</body>


{{-- <body class="flex justify-center min-h-screen">
    <div class="grid grid-cols-12 min-w-[600px] outline outline-1 outline-blue-200 rounded-lg shadow-lg gap-4">
        <div class=" col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-12 max-h-[40px]">
            <img class="w-full rounded-t-lg
            " src="{{ asset('images/banner_final.jpg') }}"
                alt="Website Banner">
        </div>
        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 min-h-[200px] pl-3">
            <label class="block text-sm font-medium text-gray-700 mb-1" for="firstName">First Name</label>
            <input type="text" name="firstName" id="firstName" maxlength="50" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" placeholder="JUAN" required>
        </div>
        <div class="col-span-12 sm:col-span-12 md:col-span-6 lg:col-span-6 min-h-[200px] pr-3">
            <label class="block text-sm font-medium text-gray-700 mb-1" for="middleName">Middle Name</label>
            <input type="text" name="middleName" id="middleName" maxlength="50" class="w-full border border-gray-300 px-3 py-2 rounded-lg shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500" placeholder="TAMAD" required>
        </div>
    </div>
</body> --}}

</html>
