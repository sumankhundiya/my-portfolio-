
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">
<main>
    @include('admins.adminpanel')
<section class="max-w-[1200px] ml-[450px] px-4 py-8">

    <h1 class="text-[40px] font-bold text-center mb-6">Projects Manage</h1>

    <a href="/create"
       class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-700">
        Add Project
    </a>

    <div class="overflow-x-auto mt-6">
        <table class="w-full border border-white text-left">
            <thead class="bg-gray-800">
                <tr>
                    <th class="border px-4 py-2">Image</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Description</th>
                    <th class="border px-4 py-2">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($project as $projects)
                <tr class="hover:bg-pink-900 duration-300">
                    <td class="border px-4 py-2">
                        <img src="{{ asset('images/' . $projects->image) }}"
                             class="w-24 h-20 object-cover rounded">
                    </td>

                    <td class="border px-4 py-2 font-bold">
                        {{ $projects->name }}
                    </td>

                    <td class="border px-4 py-2">
                        {{ $projects->description }}
                    </td>

                    <td class="border px-6 py-2 whitespace-nowrap space-x-2">
                        <a href="/projects/{{ $projects->id }}/edit"
                           class="bg-blue-500 px-3 py-1 rounded hover:bg-blue-700">
                            Edit
                        </a>

                        <a href="/projects/{{ $projects->id }}/delete"
                           onclick="return confirm('Are you sure?')"
                           class="bg-red-500 px-3 py-1 rounded hover:bg-red-700">
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</section>
</main>

</body>
</html>
