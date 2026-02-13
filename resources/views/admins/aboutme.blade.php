<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update About</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white min-h-screen">

<main class="flex min-h-screen">
    <aside class="w-[400px] bg-gray-800 h-screen sticky top-0">
        @include('admins.adminpanel')
    </aside>

    <section class="flex-1 px-6 py-4 flex justify-center">
        <div class="w-full max-w-[900px]  bg-gray-900 rounded-xl shadow-lg p-8">

            <h1 class="text-3xl font-bold text-center text-[#B415FF] mb-6">
                Update About
            </h1>

            @if(session('success'))
                <script>
                    alert("{{ session('success') }}");
                </script>
            @endif

            <form action="/admin/about/update/{{ $about->id }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf

                {{-- Image --}}
                <div class="flex flex-col items-center gap-3">
                    <img src="{{ asset('images/' . $about->image) }}"
                         class="w-32 h-32 rounded-full object-cover border-4 border-[#B415FF]">
                    <input type="file" name="image"
                        class="w-full bg-gray-800 text-white rounded-lg p-2 border border-gray-700">
                </div>

                {{-- Para 1 --}}
                <textarea name="para1" rows="4"
                    class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700"
                >{{ old('para1', $about->para1) }}</textarea>

                {{-- Para 2 --}}
                <textarea name="para2" rows="4"
                    class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700"
                >{{ old('para2', $about->para2) }}</textarea>

                {{-- Experience --}}
                <input type="number" name="experience"
                    value="{{ old('experience', $about->experience) }}"
                    class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700">

                {{-- Projects --}}
                <input type="number" name="projects"
                    value="{{ old('projects', $about->projects) }}"
                    class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700">

                {{-- Working --}}
                <input type="number" name="working"
                    value="{{ old('working', $about->working) }}"
                    class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700">

                <button class="w-full bg-[#B415FF] hover:bg-purple-700 py-3 rounded-lg font-semibold">
                    Update About
                </button>
            </form>

        </div>
    </section>
</main>

</body>
</html>
