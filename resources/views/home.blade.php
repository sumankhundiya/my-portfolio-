<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/abs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">


   <script src="https://cdn.tailwindcss.com"></script>


    <style>
      *{
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="bg-black" style="font-family: 'Lato', 'Montserrat', sans-serif;">


    <!-- Header -->
      <header class="w-full px-4 sm:px-6 md:px-8 max-w-[1400px] mx-auto py-4 md:py-6 lg:py-8">
        <div class="flex flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-4">
                <img src="{{ asset('images/icon.png') }}" alt="Logo" class="w-10 h-10 rounded-full shadow-md">
            <span class="text-[24px] sm:text-[26px] md:text-[28px] text-white">SuMaN</span>
</div>

           <div id="menu" class="lg:hidden">
    <i class="fa-solid fa-bars text-white text-3xl"></i>
</div>

            <nav id="sidebar"
                class="fixed top-0 right-[-150%] h-full w-[50%] bg-black z-50 transition-all duration-500 lg:static lg:right-0 lg:h-auto lg:w-auto lg:bg-transparent">

                <!-- Cross -->
               <div class="flex justify-center p-6 lg:hidden">
    <button id="cross">
        <i class="fa-solid fa-xmark text-white text-3xl"></i>
    </button>
</div>


                <ul class="text-white text-[20px] flex flex-col lg:flex-row gap-6 justify-center items-center">
                    <a href="#home" class="hover:text-purple-400 cursor-pointer">Home</a>
                    <a href="#about" class="hover:text-purple-400 cursor-pointer">About Me</a>
                    <a href="#project" class="hover:text-purple-400 cursor-pointer">Projects</a>
                    <a href="#contact" class="hover:text-purple-400 cursor-pointer">Contact</a>
                </ul>
            </nav>


            <a style="font-family: 'outfit';" href="#contact"
                class="hidden lg:block order-2 sm:order-3 text-[16px] sm:text-[18px] md:text-[20px] font-aght text-white px-4 sm:px-5 md:px-6 py-3 sm:py-4 bg-gradient-to-r from-purple-500 to-yellow-700 rounded-full hover:from-purple-600 hover:to-yellow-800 transition-all">
                Contact With Me
            </a>
        </div>
    </header>

    <!-- Hero -->
     <section id="home" class="px-4 sm:px-6 md:px-8">
             <div class="flex flex-col justify-center items-center my-4 md:my-6">
                <div class="w-full sm:w-2/3 md:w-1/2 flex justify-center">
                    <img src="{{ asset('images/' . $profile->image) }}" alt="profile"
                        class="rounded-[50%] shadow-lg w-60 h-60 sm:w-72 sm:h-72 md:w-80 md:h-80 object-cover">
                </div>

                <div class="text-center w-full max-w-[90%] sm:max-w-[85%] md:max-w-[1000px] mt-6 md:mt-8">
                    <h1 style="font-family: 'Outfit';"
                        class="text-[32px] sm:text-[48px] md:text-[60px] lg:text-[70px] font-bold text-[#B415FF] leading-[120%]  px-2">
                        I'm {{$profile->name}},<br class="sm:hidden"><span class="text-white"> {{$profile->title}}</span>
                    </h1>

                    <h3
                        class="text-white text-[16px] sm:text-[18px] md:text-[20px] lg:text-[22px] font-medium leading-[120%] my-2 md:my-6 max-w-[95%] sm:max-w-[800px] mx-auto text-center tracking-[0.5px] px-2">
                        {{$profile->description}}
                    </h3>

                    <div class="flex flex-col sm:flex-row my-6 md:my-8 gap-4 justify-center">
                        <a style="font-family: 'outfit';" href="#contact"
                            class="text-[16px] sm:text-[17px] md:text-[18px] font-aght text-white px-6 md:px-7 py-4 md:py-5 bg-gradient-to-r from-purple-500 to-yellow-700 rounded-full hover:from-purple-600 hover:to-yellow-800 transition-all">
                            Contact With Me
                        </a>
                        <a href="pdf" target="_blank" style="font-family: 'outfit';"
                            class="text-[16px] sm:text-[17px] md:text-[18px] font-aght text-white px-6 md:px-12 py-3 md:py-4 border-2 border-white rounded-full hover:bg-white hover:text-black transition-all">
                            My Resume
                         </a>
                    </div>
                </div>
            </div>
        </section>

   @include ('about')

    @include('project')

    @include('contact')

<footer class="w-full px-4 sm:px-6 md:px-8 max-w-[1400px] mx-auto py-8 md:py-10 lg:py-12">
    <div class="flex flex-col lg:flex-row  justify-between items-start gap-8 lg:gap-0">
        <div class="max-w-[500px] w-full">
            <h1 class="text-[40px] md:text-[50px] lg:text-[60px] font-bold text-white mb-4">SuMaN</h1>
            <p class="text-[16px] md:text-[18px] lg:text-[20px] text-gray-300 leading-relaxed">
                I am a PHP Web Developer from Hisar Haryana, India with intern as a PHP Developer in Innovative
                        Coding Campus.
            </p>
        </div>

        <div class="max-w-[450px] w-full lg:w-auto mt-[100px]">
           <form action="/email" method="post">
            @csrf
            <div class="flex flex-col sm:flex-row items-start sm:items-center gap-4">
               <input 
                     type="email" 
                     name="emailforsubscribe" 
                    placeholder="Enter Your Email" 
                     class="px-6 py-4 bg-gray-900  text-gray-300 rounded-full text-[16px] md:text-[18px] w-3/4 focus:outane-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                     />
                <button 
                    type="submit" 
                    name="btn" 
                    class="text-white px-8 py-4 text-[18px] md:text-[20px] bg-gradient-to-r from-purple-500 to-yellow-700 rounded-full font-semibold hover:shadow-xl hover:shadow-pink-500/30 transition-all duration-300 transform hover:scale-105 min-w-[150px]"
                >
                    Subscribe
                </button>
            </div>
                              @error('emailforsubscribe')
                             <span class="text-red-500 ml-8 mt-4 text-[18px]">
                               {{ $message }}
                             </span>
                        @enderror
            </form>
        </div>
    </div>

    <!-- Social anks & Copyright -->
    <div class="mt-12 pt-8 border-t border-gray-800">
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <!-- Social Media anks -->
            <div class="flex gap-6">
                <a href="https://www.linkedin.com/in/suman-khundiya-16255136b/" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <i class="fab fa-linkedin text-[24px]"></i>
                </a>
                <a href="https://github.com/sumankhundiya" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <i class="fab fa-github text-[24px]"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <i class="fab fa-twitter text-[24px]"></i>
                </a>
                <a href="https://www.instagram.com/coder3661/" class="text-gray-400 hover:text-white transition-colors duration-300">
                    <i class="fab fa-instagram text-[24px]"></i>
                </a>
            </div>

            <!-- Copyright -->
            <div class="text-center md:text-right">
                <p class="text-gray-500 text-[14px] md:text-[16px]">
                    &copy; <span id="currentYear"></span> SuMaN. All rights reserved.
                </p>
                <p class="text-gray-600 text-[12px] mt-1">Made with ❤️ by SuMaN</p>
            </div>
        </div>
    </div>
</footer>
<script>
    const menu = document.getElementById('menu');
    const cross = document.getElementById('cross');
    const sidebar = document.getElementById('sidebar');

    // Open sidebar
    menu.addEventListener("click", () => {
        sidebar.classList.remove("-right-[150%]");
        sidebar.classList.add("right-0");
    });

    // Close sidebar
    cross.addEventListener("click", () => {
        sidebar.classList.add("-right-[150%]");
        sidebar.classList.remove("right-0");
    });
</script>


</html>