<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Contact</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-black text-white">

<main class="flex min-h-screen">
    
    <!-- Sidebar -->
    <aside class="w-[400px] bg-gray-800 h-screen sticky top-0">
        @include('admins.adminpanel')
    </aside>

    <!-- Content -->
    <section class="flex-1 px-8 py-10">
        <div class="max-w-[700px] mx-auto bg-gray-900 rounded-xl shadow-lg p-8">

            <h1 class="text-[36px] font-bold text-center mb-6">Manage Contact</h1>

            {{-- Success Message --}}
            @if(session('success'))
                <div class="bg-green-600 text-white px-4 py-3 rounded mb-5">
                    {{ session('success') }}
                </div>
            @endif

            <form action="/admin/contact/update/{{ $contact->id }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

                <!-- Email -->
                <div>
                    <label class="block mb-1 text-sm text-gray-300">Email</label>
                    <input type="email" name="email"
                           value="{{ old('email', $contact->email) }}"
                           class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700 focus:border-purple-500 focus:outline-none">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Number -->
                <div>
                    <label class="block mb-1 text-sm text-gray-300">Phone Number</label>
                    <input type="text" name="number"
                           value="{{ old('number', $contact->number) }}"
                           class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700 focus:border-purple-500 focus:outline-none">
                    @error('number')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Location -->
                <div>
                    <label class="block mb-1 text-sm text-gray-300">Location</label>
                    <input type="text" name="location"
                           value="{{ old('location', $contact->location) }}"
                           class="w-full bg-gray-800 text-white rounded-lg p-3 border border-gray-700 focus:border-purple-500 focus:outline-none">
                    @error('location')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Button -->
                <button type="submit"
                        class="w-full bg-purple-600 hover:bg-purple-700 transition text-white font-semibold py-3 rounded-lg">
                    Update Contact
                </button>

            </form>
        </div>
    </section>

</main>
</body>
</html>
