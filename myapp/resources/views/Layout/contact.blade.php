<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="shortcut icon" href="{{ asset('storage/img/logowhite.png') }}" type="image/x-icon">
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: 'Manrope', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100">
    @include('Layout.nav')

    <section id="contact" class="py-16 flex items-center justify-center min-h-screen">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-gray-800 text-white rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative shadow-lg">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no"
                    src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=maroc+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                    style="filter: grayscale(0) contrast(1.2) opacity(0.8);"></iframe>
                <div class="bg-white bg-opacity-75 relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="font-semibold text-gray-900">ADDRESS</h2>
                        <p class="mt-1 text-gray-600">123 Sidi Maarouf, Casablanca, Morocco</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="font-semibold text-gray-900">EMAIL</h2>
                        <a href="mailto:your@email.com" class="text-primary leading-relaxed">akramemouhlal@gmail.com</a>
                        <h2 class="font-semibold text-gray-900 mt-4">PHONE</h2>
                        <a href="tel:+212642039816" class="leading-relaxed">+212 642039816</a>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg shadow-lg p-8 flex flex-col md:ml-auto w-full mt-8 md:mt-0">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Get in Touch</h2>
                <p class="mb-5 text-gray-600">Have questions, suggestions, or just want to say hello? We'd love to hear from you! Drop us a message and we'll get back to you as soon as possible.</p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message" class="w-full bg-gray-100 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button type="submit" class="bg-[#d53369] border-0 py-2 px-6 focus:outline-none text-white hover:bg-black rounded text-lg">Submit</button>
            </div>
        </div>
    </section>

    <script src="assets/js/script.js"></script>
</body>

</html>
