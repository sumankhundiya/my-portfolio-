<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projectss</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="relative bg-black">
    <aside
        class="absolute w-full max-w-[400px] min-h-screen bottom-0 top-0 left-0 bg-white text-black flex flex-col justify-center items-center gap-[30px]">
        <img src="{{ asset('images/photo.jpg')}}" alt="no img" class="h-[180px] w-[180px] rounded-full">
        <h1 class="text-[30px] font-bold">Suman Khundiya</h1>
        <div class="flex space-x-6">
            <a href="https://github.com/sumankhundiya"
                class="w-12 h-12 rounded-full border-2 bg-white flex items-center justify-center hover:bg-pink-600 transition duration-300">
                <i class="fab fa-github text-xl"></i>
            </a>
            <a href="https://www.linkedin.com/in/suman-khundiya-16255136b/"
                class="w-12 h-12 rounded-full border-2 bg-blue-300 flex items-center justify-center hover:bg-blue-600 transition duration-300">
                <i class="fab fa-linkedin-in text-xl"></i>
            </a>
        </div>
        <a href="/admin"  class="text-[22px] font-semibold"><i class='fa fa-home'></i> Home</a>
        <a href="/aboutme"  class="text-[22px] font-semibold "><i class='fas fa-user-edit'></i> About</a>
        <a href="/myskill"  class="text-[22px] font-semibold"><i class='fas fa-user-cog'></i> Skill</a>
        <a href="/myproject"  class="text-[22px] font-semibold"><i class='fas fa-project-diagram'></i> Projects</a>
        <a href="/contactme"  class="text-[22px] font-semibold"><i class='fa fa-address-card'></i> Contact</a>

        <p>&copy;SuMaN. All rights reserved.</p>
        <p class="text-gray-600 text-[18px]">Made with ❤️ by SuMaN</p>

        <a href="/logout"  class="text-[22px] font-semibold"><i class='fa fa-address-card'></i> Logout</a>
    </aside>      
    <section>
       
</section>
</body>

</html>