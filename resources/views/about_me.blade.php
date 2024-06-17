<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex justify-center items-center h-screen">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-center mb-4">About Me</h1>
        <table class="table-auto border border-gray-500 rounded-lg my-4">
            <tbody>
                <tr>
                    <td class="border border-gray-500 px-4 py-2">Name:</td>
                    <td class="border border-gray-500 px-4 py-2">{{ $name }}</td>
                </tr>
                <tr>
                    <td class="border border-gray-500 px-4 py-2">Gender:</td>
                    <td class="border border-gray-500 px-4 py-2">{{ $gender }}</td>
                </tr>
                <tr>
                    <td class="border border-gray-500 px-4 py-2">Birthdate:</td>
                    <td class="border border-gray-500 px-4 py-2">{{ $birthdate }}</td>
                </tr>
                <tr>
                    <td class="border border-gray-500 px-4 py-2">Address:</td>
                    <td class="border border-gray-500 px-4 py-2">{{ $address }}</td>
                </tr>
                <tr>
                    <td class="border border-gray-500 px-4 py-2">Email:</td>
                    <td class="border border-gray-500 px-4 py-2">{{ $email }}</td>
                </tr>
            </tbody>
        </table>

        <div class="flex justify-center">
            <button class="rounded-md bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 mt-4 mr-2" onclick="location.href='{{ route('about.me') }}'">About Me</button>
            <button class="rounded-md bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 mt-4 mr-2" onclick="location.href='{{ route('skills') }}'">Skills</button>
            <button class="rounded-md bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 mt-4" onclick="location.href='{{ route('hobbies') }}'">Hobbies</button>
        </div>
    </div>
</body>
</html>
