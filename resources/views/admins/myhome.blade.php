@if(session('admin_login'))
   Welcome Admin
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white min-h-screen">

<main class="flex">
    {{-- Sidebar --}}
    @include('admins.adminpanel')

    {{-- Content --}}
    <section class="flex-1 px-6 py-4 flex justify-center">
        <div class="w-full max-w-[900px] ml-[300px] bg-gray-900 rounded-xl shadow-lg p-8">

            <h1 class="text-3xl font-bold text-center text-[#B415FF] mb-6">
                Update Profile
            </h1>

            @if(session('success'))
                <div class="mb-4 text-green-400 text-center font-medium">
                  @if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif

                </div>
            @endif

            {{-- Profile Form --}}
            <form action="/admin/profile/update/{{ $profile->id }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                @csrf

                {{-- Current Image --}}
                <div class="flex flex-col items-center gap-3">
                    <img src="{{ asset('images/' . $profile->image) }}"
                         class="w-32 h-32 rounded-full object-cover border-4 border-[#B415FF]"
                         alt="Profile Image">
                    <label class="text-sm text-gray-400">Current Profile Photo</label>
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-300">Change Photo</label>
                    <input type="file" name="image"
                           class="w-full bg-gray-800 text-white rounded-lg p-2 border border-gray-700 focus:outline-none">
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-300">Name</label>
                    <input type="text" name="name"
                           value="{{ old('name', $profile->name) }}"
                           placeholder="Enter name"
                           class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700 focus:border-[#B415FF] focus:outline-none">
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-300">Title</label>
                    <input type="text" name="title"
                           value="{{ old('title', $profile->title) }}"
                           placeholder="Enter title"
                           class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700 focus:border-[#B415FF] focus:outline-none">
                </div>

                <div>
                    <label class="block mb-1 text-sm text-gray-300">About</label>
                    <textarea name="about" rows="4"
                              class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700 focus:border-[#B415FF] focus:outline-none"
                              placeholder="About yourself">{{ old('about', $profile->description) }}</textarea>
                </div>

                <button type="submit"
                        class="w-full bg-[#B415FF] hover:bg-purple-700 transition text-white font-semibold py-3 rounded-lg">
                    Update Profile
                </button>
            </form>

        </div>
    </section>
</main>

</body>
</html>
@else 
<script>
     alert(" Login Plz ");
     window.location.href = "{{ url('/login') }}";
</script>
     
@endif
