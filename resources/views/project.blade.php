<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('images/icon.png') }}" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<main>
    <section id="project" class="max-w-[1440px] w-full px-4 sm:px-6 md:px-8 mx-auto py-4">
        <h1 class="text-[30px] sm:text-[35px] md:text-[45px] lg:text-[60px] font-bold text-center text-white py-5 sm:py-[30px] lg:py-20">My Projects</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 px-4 py-6 gap-6">
          @foreach($records as $record)
            <div class="card bg-black border-2 border-white rounded-xl p-4 w-full max-w-[400px] mx-auto hover:bg-pink-900 duration-300 hover:scale-105">
               <img 
               src="{{ asset('images/' . $record->image) }}"
                alt="{{ $record->name }}"
                class="w-full h-48 object-cover">
               <h1 class="text-[25px] font-bold text-white">{{ $record->name }}</h1>
               <p class="content text-[20px] font-medium text-white">{{ $record->description }}</p>
               <button class="btn text-gray-300 text-[20px] mt-[30px] hover:text-white transition-colors">Read More →</button>
            </div>
          @endforeach
        </div>
    </section>
</main>

<script>
// Handle all cards
document.querySelectorAll('.card').forEach(card => {
    const contentElement = card.querySelector('.content');
    const btn = card.querySelector('.btn');
    
    const fullText = contentElement.textContent;
    const wordsArray = fullText.trim().split(/\s+/);
    const wordLimit = 10; 
    let isExpanded = false;

    // Only truncate if text is longer than word limit
    if (wordsArray.length <= wordLimit) {
        // If text is short, hide the button
        btn.style.display = 'none';
        return; // Exit, no need to set up toggle
    }

    function render() {
        if (isExpanded) {
            // Show all words
            contentElement.textContent = fullText;
            btn.innerHTML = "Read Less ←";
        } else {
            // Show only limited words
            contentElement.textContent = wordsArray.slice(0, wordLimit).join(" ") + "...";
            btn.innerHTML = "Read More →";
        }
    }

    function toggleText() {
        isExpanded = !isExpanded;
        render();
    }

    // Add event listener to the button
    btn.addEventListener("click", toggleText);

    // Initial render
    render();
});
</script>

</body>
</html>