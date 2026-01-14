<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">


    <link href="https://unpkg.com/tailwindcss@1.9.6/dist/tailwind.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-color: black;
            --secondary-color: white;
        }

        .first {
            background-color: var(--primary-color);
            color: var(--secondary-color);
        }
    </style>
</head>
<body>
<section id="about" class="max-w-[1440px] w-full px-4 sm:px-6 md:px-8 mx-auto py-4">
             <h1 class="text-[30px] sm:text-[35px] md:text-[45px] lg:text-[60px] font-bold text-center text-white py-5 sm:py-[30px] lg:pb-20">About Me</h1>
            <div class="flex flex-col items-center xl:items-start xl:flex-row  gap-16  px-4">
                <img src="{{ asset('images/photo.jpg') }}" class="w-[300px] h-[300px] rounded-lg">
                <div class="flex flex-col justify-center items-center px-4 gap-4 w-full">
                    <p class="text-white text-[16px] sm:text-[18px] md:text-[20px]">Bachelor’s degree student with a
                        strong willingness to learn,
                        explore, and grow professionally.
                        Passionate about building skills through projects and real-world practice.</p>
                    <p class="text-white text-[16px] sm:text-[18px] md:text-[20px]">I am an intern student passionate
                        about learning and building
                        professional skills. I am a quick
                        learner, adaptable, and eager to contribute to organizational goals while improving my technical
                        and communication abilities.</p>

                    <div class="w-full mt-5">
                        <div class="flex items-center duration-300 hover:scale-110 gap-[30px]">
                            <span class="text-[16px] sm:text-[18px] md:text-[20px] text-white whitespace-nowrap">HTML &
                                CSS</span>
                            <hr
                                class="w-[650px]  h-2.5 border-0 bg-gradient-to-r from-purple-500 to-yellow-700 rounded-full">
                        </div>
                        <div class="flex items-center duration-300 hover:scale-110 gap-4">
                            <span
                                class="text-[16px] sm:text-[18px] md:text-[20px] text-white whitespace-nowrap">PHP</span>
                            <hr
                                class="w-[700px]  h-2.5 border-0 bg-gradient-to-r from-purple-500 to-yellow-700 rounded-full">
                        </div>
                        <div class="flex items-center duration-300 hover:scale-110 gap-4 ">
                            <span
                                class="text-[16px] sm:text-[18px] md:text-[20px] text-white whitespace-nowrap">MYSQL</span>
                            <hr
                                class="w-[700px] h-2.5 border-0 bg-gradient-to-r from-purple-500 to-yellow-700 rounded-full">
                        </div>
                        <div class="flex items-center duration-300 hover:scale-110 gap-4">
                            <span
                                class="text-[16px] sm:text-[18px] md:text-[20px] text-white whitespace-nowrap">Laravel</span>
                            <hr
                                class="w-[700px] h-2.5 border-0 bg-gradient-to-r from-purple-500 to-yellow-700 rounded-full">
                        </div>
                        <div class="flex items-center duration-300 hover:scale-110 gap-4">
                            <span class="text-[16px] sm:text-[18px] md:text-[20px] text-white whitespace-nowrap">Talwind
                                CSS</span>
                            <hr
                                class="w-[600px] h-2.5 border-0 bg-gradient-to-r from-purple-500 to-yellow-700 rounded-full">
                        </div>


                    </div>
                </div>
            </div>
            <div class="w-full max-w-[1200px] mx-auto flex flex-col sm:flex-row justify-between px-4 mt-[100px]">
                <div class="flex flex-col justify-center duration-300 hover:scale-110">
                    <h3 class="text-white text-[24px] text-center font-bold ">6+</h3>
                    <p class="text-white text-[22px] text-center font-bold ">MONTH EXPERIENCE</p>
                </div>
                <hr class="bg-white h-0.5 w-full sm:w-20 sm:rotate-90 mb-10 sm: mt-10">
                <div class="flex flex-col justify-center duration-300 hover:scale-110">
                    <h3 class="text-white text-[24px] text-center font-bold ">4+</h3>
                    <p class="text-white text-[22px] text-center font-bold ">PROJECT COMPLETE</p>
                </div>
                <hr class="bg-white h-0.5  w-full sm:w-20 sm:rotate-90 mb-10 sm: mt-10">
                <div class="flex flex-col justify-center duration-300 hover:scale-110">
                    <h3 class="text-white text-[24px] text-center font-bold ">2+</h3>
                    <p class="text-white text-[22px] text-center font-bold ">WORKING PROJECTS</p>
                </div>
            </div>
           
</section>
</body>
    </html>
