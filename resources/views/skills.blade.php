<!DOCTYPE html>
<html>
<head>
    <title>Skills</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex justify-center items-center h-screen">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-center mb-4">Skills</h1>
        <table class="table-auto border border-gray-500 rounded-lg my-4">
            <tbody>
                <tr>
                    <td class="border border-gray-500 px-4 py-2">Coding Languages:</td>
                    <td class="border border-gray-500 px-4 py-2">{{ $coding_languages }}</td>
                </tr>
                <tr>
                    <td class="border border-gray-500 px-4 py-2">Frameworks:</td>
                    <td class="border border-gray-500 px-4 py-2">{{ $frameworks }}</td>
                </tr>
                <tr>
                    <td class="border border-gray-500 px-4 py-2">Tools:</td>
                    <td class="border border-gray-500 px-4 py-2">{{ $tools }}</td>
                </tr>
                <tr>
                    <td class="border border-gray-500 px-4 py-2">Soft Skills:</td>
                    <td class="border border-gray-500 px-4 py-2">{{ $soft_skills }}</td>
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
