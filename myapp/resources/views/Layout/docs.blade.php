<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Docs Page</title>
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
          <i class="bi bi-clipboard-fill"></i>  Terms , Services
        </h3>
      </div>

      <!-- Accordion Section -->
      <div id="accordion" class="space-y-4">
        <div class="accordion-item border border-gray-200 rounded-lg">
          <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
            <span>Éligibilité</span>
            <i class="fas fa-chevron-right"></i>
          </div>
          <div class="accordion-content text-gray-600">
            Vous devez avoir au moins 18 ans pour utiliser notre Site. En utilisant notre Site, vous déclarez et garantissez que vous avez au moins 18 ans.          </div>
        </div>

        <div class="accordion-item border border-gray-200 rounded-lg">
          <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
            <span>Stockage Sécurisé</span>
            <i class="fas fa-chevron-right"></i>
          </div>
          <div class="accordion-content text-gray-600">
            Les données personnelles des utilisateurs sont stockées sur des serveurs sécurisés protégés par des pare-feu et des systèmes de détection d'intrusion. Nous utilisons des protocoles de sécurité standard de l'industrie pour protéger les données stockées.
        </div>
        </div>

        <div class="accordion-item border border-gray-200 rounded-lg">
          <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
            <span>Privacy</span>
            <i class="fas fa-chevron-right"></i>
          </div>
          <div class="accordion-content text-gray-600">
            Votre vie privée est importante. Reportez-vous à notre Politique de confidentialité pour plus de détails sur la manière dont nous collectons, utilisons et divulguons vos informations.          </div>
        </div>

        <div class="accordion-item border border-gray-200 rounded-lg">
          <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
            <span>Mises à Jour de Sécurité</span>
            <i class="fas fa-chevron-right"></i>
          </div>
          <div class="accordion-content text-gray-600">
            Nous mettons régulièrement à jour notre infrastructure et nos logiciels pour intégrer les derniers correctifs de sécurité et prévenir les vulnérabilités.          </div>
        </div>

        <div class="accordion-item border border-gray-200 rounded-lg">
          <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
            <span>Résiliation</span>
            <i class="fas fa-chevron-right"></i>
          </div>
          <div class="accordion-content text-gray-600">
            ous nous réservons le droit de suspendre ou de résilier votre accès au site, sans préavis ni responsabilité, pour quelque raison que ce soit, y compris si vous violez ces CGU.          </div>
        </div>

        <div class="accordion-item border border-gray-200 rounded-lg">
          <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
            <span>Propriété</span>
            <i class="fas fa-chevron-right"></i>
          </div>
          <div class="accordion-content text-gray-600">
            Vous conservez tous les droits de propriété sur le contenu que vous publiez sur notre site.
        </div>
        </div>

        <div class="accordion-item border border-gray-200 rounded-lg">
          <div class="accordion-header py-4 px-6 cursor-pointer flex justify-between items-center font-bold text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-t-lg">
            <span>Responsabilité</span>
            <i class="fas fa-chevron-right"></i>
          </div>
          <div class="accordion-content text-gray-600">
            Vous êtes seul responsable du contenu que vous publiez. Vous vous engagez à ne pas publier de contenu illégal, offensant ou violant les droits d'autrui.
        </div>
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
