@if(session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>   
@endif


@if(session('error'))
    <script>
        alert("{{ session('error') }}");
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
    <section class="bg-black pt-[200px] h-screen">
        <div class="mx-auto  w-full px-8 py-8 max-w-[500px] border-2 h-[50vh] rounded-lg">
            <h1 class="text-white text-[40px] text-center">Admin Login</h1>
            <form action="admin" method="post" class="space-y-2 py-4 flex flex-col justify-center items-center">
                @csrf
                <input type="text" name="username" placeholder="Enter Admin Name"
                    class="bg-gray-400 border-gray-300 border-2 px-4 py-2 placeholder-gray-200 rounded-lg w-full" />
                           <span class="text-red-500 text-[18px]">@error('username') {{$message}} @enderror</span>
                <br><br />
                <input type="password" name="password" placeholder="Enter Admin Password"
                    class="bg-gray-400 border-gray-300 border-2 px-4 py-2 placeholder-gray-200 rounded-lg w-full" />
                           <span class="text-red-500 text-[18px]">@error('password') {{$message}} @enderror</span>
                <br><br />
                <label class="flex items-center gap-2 text-white">
                    <input type="checkbox">
                    Remember Me
                </label>
                <button class="bg-white text-black rounded-md px-6 py-2 w-[200px]">Submit</button>
            </form>
        </div>
    </section>
</body>

</html>
