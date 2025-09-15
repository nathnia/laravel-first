<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <head>
        <meta charset="UTF-8">
        <title>Student Table</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body class="bg-gray-100 flex items-center justify-center min-h-screen">

        <div class="w-3/4 shadow-lg rounded-lg p-6">
            <h1 class="text-2xl font-bold mb-4 text-white">Student List</h1>

            <table class="min-w-full rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-2 ">No</th>
                        <th class="px-4 py-2 ">Name</th>
                        <th class="px-4 py-2 ">Email</th>
                        <th class="px-4 py-2 ">Phone Number</th>
                        <th class="px-4 py-2 ">Address</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($student as $s)
                    <tr class="hover:bg-gray-700 text-white" >
                        <td class="px-4 py-2 ">{{ $loop->iteration }}</td>
                        <td class="px-4 py-2 ">{{ $s['name'] }}</td>
                        <td class="px-4 py-2 ">{{ $s['email'] }}</td>
                        <td class="px-4 py-2 ">{{ $s['phone_number'] }}</td>
                        <td class="px-4 py-2 ">{{ $s['address'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </body>
</x-layout>