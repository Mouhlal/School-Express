<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQ Page</title>
  <link rel="shortcut icon" href="{{asset('storage/img/logowhite.png')}}" type="image/x-icon">
  @vite('resources/css/app.css')
  <style>
    .accordion-content {
      transition: max-height 0.3s ease-out, padding 0.3s ease;
      overflow: hidden;
      max-height: 0;
      padding: 0;
    }
    .accordion-content.show {
      max-height: 500px; /* Arbitrary max-height to allow transition */
      padding: 1rem 1.5rem;
    }
  </style>
</head>
<body class="bg-gray-100">

    @include('Layout.nav')
  <div class="container mx-auto mt-10">
    <div class="bg-white shadow-lg rounded-lg p-6">
      <div class="text-center mb-6">
        <h3 class="text-3xl font-black text-rose-400 mb-4">
          <i class="bi bi-question-circle-fill"></i>  Frequently Asked Questions
        </h3>
      </div>

      <!-- Accordion Section -->
      <div id="accordion" class="space-y-5">
        <div class="accordion-item border border-gray-200 rounded-lg">
            <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
              <span>How do I create an account?</span>
              <i class="fas fa-chevron-right"></i>
            </div>
            <div class="accordion-content text-gray-600">
              Only admin can create an account .
            </div>
          </div>
        <div class="accordion-item border border-gray-200 rounded-lg">
          <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
            <span>How do I reset my password?</span>
            <i class="fas fa-chevron-right"></i>
          </div>
          <div class="accordion-content text-gray-600">
            If you've forgotten your password, you can contact the admin and following her instructions .
          </div>
        </div>

        <div class="accordion-item border border-gray-200 rounded-lg">
            <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
              <span>Do you offer international shipping?</span>
              <i class="fas fa-chevron-right"></i>
            </div>
            <div class="accordion-content text-gray-600">
              Yes, we offer international shipping to most countries worldwide. However, shipping rates and delivery times may vary depending on the destination. Please refer to our shipping policy or contact our customer support for more information about international shipping options.
          </div>
          </div>

        <div class="accordion-item border border-gray-200 rounded-lg">
          <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
            <span>How do I update my profile information?</span>
            <i class="fas fa-chevron-right"></i>
          </div>
          <div class="accordion-content text-gray-600">
            You can update your profile information by navigating to the "Profile" section of your account settings and making the desired changes.
          </div>
        </div>

        <div class="accordion-item border border-gray-200 rounded-lg">
            <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
              <span>How can I contact customer support?</span>
              <i class="fas fa-chevron-right"></i>
            </div>
            <div class="accordion-content text-gray-600">
                You can contact our customer support team by emailing schoolgear@gmail.com .
          </div>




      </div>

      <div class="flex justify-between mt-6">
        <a href="{{route('Layout.contact')}}" class="inline-block px-4 py-2 bg-rose-400 text-white font-semibold rounded-md transition duration-300 hover:bg-gray-800 hover:text-white">
          Contact Us?
        </a>
        <a href="/"  class="inline-block px-4 py-2 bg-rose-400 text-white font-semibold rounded-md transition duration-300 hover:bg-gray-800 hover:text-white">
           Home
        </a>
      </div>
    </div>
  </div>

  <script>
    document.querySelectorAll('.accordion-header').forEach(header => {
      header.addEventListener('click', () => {
        const content = header.nextElementSibling;
        content.classList.toggle('show');
        const icon = header.querySelector('i');
        icon.classList.toggle('fa-chevron-right');
        icon.classList.toggle('fa-chevron-down');
      });
    });
  </script>
</body>
</html>
