@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<section class="bg-black min-h-screen flex items-center justify-center">
    <div class="w-full max-w-[500px] border-2 border-gray-600 rounded-lg p-8">
        <h1 class="text-white text-[40px] text-center mb-6">Update Data</h1>

        <form action="/project/{{$project->id}}/update" method="post" enctype="multipart/form-data"
              class="space-y-4">
              @csrf

            <input type="text"
                   name="project_name"
                   placeholder="Enter Project Name"
                   class="bg-gray-400 border-2 border-gray-300 px-4 py-2 rounded-lg w-full placeholder-gray-200" />
                   @error('project_name')
    <p class="text-red-500 text-sm">{{ $message }}</p>
@enderror

            <input type="file"
                   name="project_img"
                   class="bg-gray-400 border-2 border-gray-300 px-4 py-2 rounded-lg w-full" />
            @error('project_img')
    <p class="text-red-500 text-sm">{{ $message }}</p>
@enderror

            <textarea name="description"
                      placeholder="Enter Project Description"
                      class="bg-gray-400 border-2 border-gray-300 px-4 py-2 rounded-lg w-full placeholder-gray-200"></textarea>
                      @error('description')
    <p class="text-red-500 text-sm">{{ $message }}</p>
@enderror

            <label class="flex items-center gap-2 text-white">
                <input type="checkbox" name="update_data">
                Update Data
                @error('update_data')
    <p class="text-red-500 text-sm">{{ $message }}</p>
@enderror
            </label>

            <button type="submit"
                    class="bg-white text-black rounded-md px-6 py-2 w-full">
                Submit
            </button>

        </form>
    </div>
</section>
</body>
</html>
