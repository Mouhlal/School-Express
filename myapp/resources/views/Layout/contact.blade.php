<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="shortcut icon" href="{{asset('storage/img/logowhite.png')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    @vite('resources/css/app.css')
</head>

<body>
    @include('Layout.nav')


    <section id="contact" class="bg-white py-16 flex items-center justify-center min-h-screen">
        <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
            <div class="lg:w-2/3 md:w-1/2 bg-blue-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
                <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no"
                    src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=maroc+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                    style="filter: grayscale(0) contrast(1.2) opacity(0.6);"></iframe>
                <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                    <div class="lg:w-1/2 px-6">
                        <h2 class="font-bold text-gray-dark">ADDRESS</h2>
                        <p class="mt-1">123 Sidi Maarouf, Casablanca, Moroco</p>
                    </div>
                    <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
                        <h2 class="font-bold text-gray-dark">EMAIL</h2>
                        <a href="mailto:your@email.com" class="text-primary leading-relaxed">akramemouhlal@gmail.com</a>
                        <h2 class="font-bold text-gray-dark mt-4">PHONE</h2>
                        <a href="tel:123-456-7890" class="leading-relaxed">+212 642039816</a>
                    </div>
                </div>
            </div>

            <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
                <h2 class="text-primary text-lg mb-2 font-medium">Get in Touch</h2>
                <p class="mb-5 text-gray-txt">Have questions, suggestions, or just want to say hello? We'd love to hear from you! Drop us a message and we'll get back to you as soon as possible.</p>
                </p>
                <div class="relative mb-4">
                    <label for="name" class="leading-7 text-sm text-gray-dark">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-txt  text-base outline-none text-gray-txt py-1 px-3 leading-8">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-dark">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-txt text-base outline-none text-gray-txt py-1 px-3 leading-8">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-dark">Message</label>
                    <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-txt  h-32 text-base outline-none text-gray-txt py-1 px-3 resize-none"></textarea>
                </div>
                <button type="submit" class="text-white italic bg-pink-600 bg-primary border-0 py-3 px-6 focus:outline-none hover:bg-secondary rounded text-lg">Submit</button>
            </div>
        </div>
    </section>


    <script src="assets/js/script.js"></script>
</body>

</html>
