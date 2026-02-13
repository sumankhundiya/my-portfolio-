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
    </style>
</head>
<body>
<section id="about" class="max-w-[1440px] w-full px-4 sm:px-6 md:px-8 mx-auto py-4">
             <h1 class="text-[30px] sm:text-[35px] md:text-[45px] lg:text-[60px] font-bold text-center text-white py-5 sm:py-[30px] lg:pb-20">About Me</h1>
            <div class="flex flex-col items-center xl:items-start xl:flex-row  gap-16  px-4">
                <img src="{{ asset('images/'.$about->image) }}" class="w-[300px] h-[300px] rounded-lg">
                <div class="flex flex-col justify-center items-center px-4 gap-4 w-full">
                    <p class="text-white text-[16px] sm:text-[18px] md:text-[20px]">{{ $about->para1 }}</p>
                    <p class="text-white text-[16px] sm:text-[18px] md:text-[20px]">{{ $about->para2 }}</p>

                    <div class="w-full mt-5">
                        
                       @foreach($skill as $skills)
                        <div class="flex items-center duration-300 hover:scale-110 gap-[30px]">
                            <span class="text-[16px] sm:text-[18px] md:text-[20px] text-white whitespace-nowrap">{{ $skills->name }}</span>
                            <hr
                                class=" w-[{{$skills->value }}%] h-2.5 border-0 bg-gradient-to-r from-purple-500 to-yellow-700 rounded-full">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="w-full max-w-[1200px] mx-auto flex flex-col sm:flex-row justify-between px-4 mt-[100px]">
                <div class="flex flex-col justify-center duration-300 hover:scale-110">
                    <h3 class="text-white text-[24px] text-center font-bold ">{{$about->experience}} +</h3>
                    <p class="text-white text-[22px] text-center font-bold ">MONTH EXPERIENCE</p>
                </div>
                <hr class="bg-white h-0.5 w-full sm:w-20 sm:rotate-90 mb-10 sm: mt-10">
                <div class="flex flex-col justify-center duration-300 hover:scale-110">
                    <h3 class="text-white text-[24px] text-center font-bold ">{{ $about->projects }} +</h3>
                    <p class="text-white text-[22px] text-center font-bold ">PROJECT COMPLETE</p>
                </div>
                <hr class="bg-white h-0.5  w-full sm:w-20 sm:rotate-90 mb-10 sm: mt-10">
                <div class="flex flex-col justify-center duration-300 hover:scale-110">
                    <h3 class="text-white text-[24px] text-center font-bold ">{{ $about->working}} +</h3>
                    <p class="text-white text-[22px] text-center font-bold ">WORKING PROJECTS</p>
                </div>
            </div>
           
</section>
</body>
    </html>
