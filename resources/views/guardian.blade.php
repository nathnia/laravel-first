<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <head>
        <meta charset="UTF-8">
        <title>Guardian Table</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 flex items-center justify-center min-h-screen">

        <!-- Wrapper to center the table -->
        <div class="w-full max-w-6xl mx-auto shadow-lg rounded-lg p-6 bg-gray-900">
            <h1 class="text-2xl font-bold mb-4 text-white text-center">Guardian List</h1>

            <div class="overflow-x-auto">
                <table class="w-full table-auto border-collapse rounded-lg overflow-hidden">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-6 py-3 border border-gray-700">ID</th>
                            <th class="px-6 py-3 border border-gray-700">Name</th>
                            <th class="px-6 py-3 border border-gray-700">Job</th>
                            <th class="px-6 py-3 border border-gray-700">Phone</th>
                            <th class="px-6 py-3 border border-gray-700">Email</th>
                        </tr>
                    </thead>
                    <tbody class="text-center text-white">
                        @foreach($guardians as $g)
                        <tr class="hover:bg-gray-700">
                            <td class="px-6 py-3 border border-gray-700">{{ $loop->iteration }}</td>
                            <td class="px-6 py-3 border border-gray-700">{{ $g['name'] }}</td>
                            <td class="px-6 py-3 border border-gray-700">{{ $g['job'] }}</td>
                            <td class="px-6 py-3 border border-gray-700">{{ $g['phone'] }}</td>
                            <td class="px-6 py-3 border border-gray-700">{{ $g['email'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </body>
</x-layout>