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

      <main id="contact">
             <section class="max-w-[1440px] w-full px-4 sm:px-6 md:px-8 mx-auto py-4">
        <h1 class="text-[30px] sm:text-[35px] md:text-[45px] lg:text-[60px] font-bold text-center text-white py-5 sm:py-[30px] lg:py-20">Get in touch</h1>
            <div class="w-full mx-auto px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <div class="fade-in-up">
                        
                        <h3 class="text-[50px] font-bold mb-6 text-white">Let's talk!</h3>
                        <p class="text-[18px] text-gray-400 mb-8">
                                I'm currently available. Send me a message about anything you want me to work on.
                        </p>
                        
                        <div class="space-y-6">
                            <div class="flex items-center">
                                <div class="mr-4 text-pink-500 text-xl">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h4 class="text-[18px] font-bold text-white">Email</h4>
                                    <a href="mailto:sumankhundiya75@gmail.com" class="text-[18px] text-gray-400">sumankhundiya75@gmail.com</a>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="mr-4 text-blue-500 text-xl">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h4 class="text-[18px] font-bold text-white">Phone</h4>
                                    <a href="tel:+91 8570883649" class="text-[18px] text-gray-400">+91 8570883649</a>
                                </div>
                            </div>
                            
                            <div class="flex items-center">
                                <div class="mr-4 text-green-500 text-xl">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h4 class="text-[18px] font-bold text-white">Location</h4>
                                    <a href="https://www.google.com/maps?q=Hansi,Haryana" target="_blank" class="text-[18px] text-gray-400">Haryana Hissar, Hansi</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="flex space-x-6 mt-8">
                            <a href="https://github.com/sumankhundiya" class="w-12 h-12 rounded-full border-2 bg-white flex items-center justify-center hover:bg-pink-600 transition duration-300">
                                <i class="fab fa-github text-xl"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/suman-khundiya-16255136b/" class="w-12 h-12 rounded-full border-2 bg-blue-300 flex items-center justify-center hover:bg-blue-600 transition duration-300">
                                <i class="fab fa-linkedin-in text-xl"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-full bg-white border-2 flex items-center justify-center hover:bg-sky-500 transition duration-300">
                                <i class="fab fa-twitter text-xl"></i>
                            </a>
                            <a href="https://wa.me/8570883649" target="_blank" class="w-12 h-12 rounded-full bg-green-300 border-2 flex items-center justify-center hover:bg-green-600 transition duration-300">
                                <i class="fab fa-whatsapp text-xl"></i>
                            </a>
                        </div>
                    </div>
                    
                    <div class="fade-in-up">
                        <form method="post" action="/form" class="">
                            @csrf
                            <div>
                                <label for="name" class="block text-[22px] mt-4 mb-2 font-medium text-white">Enter Your Name</label>
                                <input type="text" name="name" class="w-full px-4 py-5 text-[22px] bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Your Name">
                                <span class="text-red-500 text-[18px]">@error('name') {{$message}} @enderror</span>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-[22px] mt-4 mb-2 font-medium text-white">Enter Your Email</label>
                                <input type="email" name="email" class="w-full px-4 py-5 text-[22px] bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="name@example.com">
                                <span class="text-red-500 text-[18px]">@error('email') {{$message}} @enderror</span>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-[22px] mt-4 mb-2 font-medium text-white">Send Your Message</label>
                                <textarea name="message" rows="5" class="w-full px-4 py-5 text-[22px] bg-gray-800 text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-500" placeholder="Hello Suman,I want to Contact you for ........."></textarea>
                                <span class="text-red-500 text-[18px]">@error('message') {{$message}} @enderror</span>
                            </div>
                            
                            <button type="submit" name="btn" onclick="add()" class="text-white px-8 py-3 mt-4 text-[22px] bg-gradient-to-r from-purple-500 to-yellow-700 rounded-full font-semibold hover:shadow-xl hover:shadow-pink-500/30 transition duration-300">
                                Send Message
                            </button>
                        </form>
                    </div>
                </div>   
            </div>
        </div>
    </section>

    </main>

    </body>
    </html>
