<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Alexco</title>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">
    <div class="min-h-screen flex flex-col items-center justify-center">
        <!-- Company Logo and Name -->
        <div class="text-center mb-8">
            <img src="{{ asset('images/logo1.jpg') }}" alt="Alexco Logo" class="w-32 h-32 mx-auto mb-4 rounded-lg shadow-lg">
            <p class="text-lg text-gray-400 mt-2">The Futuristic Lifestyle</p>
        </div>

        <!-- Welcome Message -->
        <div class="text-center">
            <h2 class="text-5xl font-bold mb-4">Welcome to the Future</h2>
            <p class="text-lg mb-8">Join us in revolutionizing smart homes with cutting-edge solar technology!</p>
            <a href="{{ route('form') }}" class="bg-purple-600 px-6 py-3 rounded-lg text-white hover:bg-purple-700 transition duration-300">Get Started</a>
        </div>
    </div>
</body>
</html>