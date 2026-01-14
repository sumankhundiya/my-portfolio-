{{-- SUCCESS ALERT --}}
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
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">


    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
   <main>
        <section id="work" class="max-w-[1440px] w-full px-4 sm:px-6 md:px-8 mx-auto py-4">
        <h1 class="text-[30px] sm:text-[35px] md:text-[45px] lg:text-[60px] font-bold text-center text-white py-5 sm:py-[30px] lg:py-20">My Working Projects</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-4 py-6 gap-6">
          @foreach($data as $datas)
            <div class="card bg-black border-2 border-white rounded-xl p-4 w-full max-w-[400px] mx-auto hover:bg-pink-900 duration-300 hover:scale-105">
               <img 
               src="{{ asset('images/' . $datas->img) }}"
                alt="Project image"
                class="w-full h-48 object-cover">
            </div>
          @endforeach
</div>
<div class="w-full text-center py-6">
<button class=" border-2 border-white bg-black text-white rounded-full px-8 py-4 text-[20px] hover:bg-white hover:text-black">Show More →</button>
</div>
</section>
    </main>

    </body>
    </html>

