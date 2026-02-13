
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">
<main class="flex  min-h-screen">
     <aside class="w-[400px]  bg-gray-800 h-screen sticky top-0">
        @include('admins.adminpanel')
    </aside>
<section class="max-w-[1200px] ml-[150px]  px-4 py-8">

    <h1 class="text-[40px] font-bold text-center mb-6">Skills Manage</h1>

    <a href="#create"
       class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-700">
        Add Skills
    </a>

    <div class="overflow-x-auto mt-6">
        <table class="w-full border border-white text-left">
            <thead class="bg-gray-800">
                <tr>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Value</th>
                    <th class="border px-4 py-2">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($Skill as $Skills)
                <tr class="hover:bg-pink-900 duration-300">
                    <td class="border px-4 py-2 font-bold">
                        {{ $Skills->name }}
                    </td>

                    <td class="border px-4 py-2">
                        {{ $Skills->value }}
                    </td>

                    <td class="border px-6 py-2 whitespace-nowrap space-x-2">
                        <a href="#update"
                           class="bg-blue-500 px-3 py-1 rounded hover:bg-blue-700">
                            Edit
                        </a>

                        <a href="/Skills/{{ $Skills->id }}/delete"
                           onclick="return confirm('Are you sure?')"
                           class="bg-red-500 px-3 py-1 rounded hover:bg-red-700">
                            Delete
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <div class="flex gap-[50px] max-w-[1200px]">
         <div class="w-full max-w-[500px] border-2 border-gray-600 rounded-lg p-8 my-8">
        <h1 class="text-white text-[40px] text-center mb-6">Update Data</h1>

        <form id="update" action="/Skills/update" method="post" enctype="multipart/form-data"
              class="space-y-4">
              @csrf
            
               <input type="number"
                   name="id"
                   placeholder="Enter Skill ID"
                   class="bg-gray-400 border-2 border-gray-300 px-4 py-2 rounded-lg w-full placeholder-gray-200" />

            <input type="text"
                   name="name"
                   placeholder="Enter Skill Name"
                   class="bg-gray-400 border-2 border-gray-300 px-4 py-2 rounded-lg w-full placeholder-gray-200" />

            <input type="number"
                   name="value"
                   placeholder="Enter Skill Value"
                   class="bg-gray-400 border-2 border-gray-300 px-4 py-2 rounded-lg w-full placeholder-gray-200" />

            <label class="flex items-center gap-2 text-white">
                <input type="checkbox" name="update_data">
                Update Data
            </label>

            <button type="submit"
                    class="bg-white text-black rounded-md px-6 py-2 w-full">
                Submit
            </button>

        </form>
    </div>

         <div class="w-full max-w-[500px] border-2 border-gray-600 rounded-lg p-8 my-8">
        <h1 class="text-white text-[40px] text-center mb-6">Add Skills</h1>

        <form id="create" action="/Skills/create" method="post" enctype="multipart/form-data"
              class="space-y-4">
              @csrf
            
            <input type="text"
                   name="name"
                   placeholder="Enter Skill Name"
                   class="bg-gray-400 border-2 border-gray-300 px-4 py-2 rounded-lg w-full placeholder-gray-200" />

            <input type="number"
                   name="value"
                   placeholder="Enter Skill Value"
                   class="bg-gray-400 border-2 border-gray-300 px-4 py-2 rounded-lg w-full placeholder-gray-200" />

            <label class="flex items-center gap-2 text-white">
                <input type="checkbox" name="update_data">
                Add Skill
            </label>

            <button type="submit"
                    class="bg-white text-black rounded-md px-6 py-2 w-full">
                Submit
            </button>

        </form>
    </div>
    </div>
</div>

</section>
</main>

</body>
</html>
