@extends('layouts.greenkin')

@section('title', 'Services - Greenkin')

@section('content')

    <!-- Header -->
    <header class="relative w-full h-[300px] flex items-center justify-center overflow-hidden">
        <!-- Image de fond -->
        <div class="absolute inset-0 z-0">
            <img src="{{asset('images/GreenKin/nos_services.png')}}" alt="Nos services" class="w-full h-full object-cover">
            <!-- Overlay pour assombrir l'image et faire ressortir le texte -->
            <div class="absolute inset-0 bg-[#0D4B4A]/40"></div>
        </div>

        <!-- Texte centré -->
        <div class="relative z-10 text-center px-6">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white">Nos <span class="text-green-500">Services</span> </h1>
            <div class="w-20 h-1 bg-green-500 mx-auto mt-6"></div>
        </div>
    </header>
    
    <!-- Service 1 -->
    <div id="collecte" class="p-4"></div>
    <section class="py-14 mt-2 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                
                <!-- Contenu Texte -->
                <div class="flex-1">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-[#0D4B4A] mb-6">Collecte Fiable et Ponctuelle</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 text-justify">
                        Fini les incertitudes. Nous garantissons des passages réguliers selon des horaires fixes, respectés à la lettre. Votre confort et la propreté de votre quartier sont notre priorité absolue, sans aucun retard.
                    </p>                    
                    <!-- Liste des avantages -->
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700">
                            <span class="mr-3 text-green-500">✓</span> Horaires garantis par suivi GPS
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="mr-3 text-green-500">✓</span> Notification avant chaque passage
                        </li>
                    </ul>
                    <div class="mt-8 w-full">
                        <a href="{{route('greenkin.offres')}}" class="group bg-[#136A33] text-white px-8 py-4 rounded-xl font-medium mx-auto hover:bg-[#64B331] transition duration-300 shadow-lg text-center">
                            Souscrire
                            <i class="fas fa-arrow-right ml-1 text-sm group-hover:ml-1.5 transition duration-600"></i>
                        </a>
                    </div>
                </div>
                <!-- Image illustrative -->
                <div class="flex-1 w-full">
                    <img src="{{asset('images/GreenKin/collecte.png')}}" alt="Collecte de déchets fiable" class="rounded-3xl shadow-2xl w-full h-[400px] object-cover">
                </div>
                
            </div>
        </div>
    </section>

    <!-- Service 2 -->
    <div id="recyclage" class="p-4"></div>
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                
                <!-- Contenu Texte -->
                <div class="flex-1">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-[#0D4B4A] mb-6">Recyclage et Valorisation Locale</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 text-justify">
                        Nous transformons vos déchets en ressources. Grâce à notre réseau de partenaires kinois, nous favorisons une économie circulaire locale, créant ainsi de la valeur tout en assainissant notre environnement.
                    </p>
                    
                    <!-- Liste des impacts -->
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700">
                            <span class="mr-3 text-green-500">♻️</span> Soutien aux artisans et entreprises locales
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="mr-3 text-green-500">♻️</span> Réduction drastique des déchets mis en décharge
                        </li>
                    </ul>
                    <div class="mt-8 w-full">
                        <a href="{{route('greenkin.offres')}}" class="group bg-[#136A33] text-white px-8 py-4 rounded-xl font-medium mx-auto hover:bg-[#64B331] transition duration-300 shadow-lg text-center">
                            Souscrire
                            <i class="fas fa-arrow-right ml-1 text-sm group-hover:ml-1.5 transition duration-600"></i>
                        </a>
                    </div>
                </div>

                <!-- Image illustrative -->
                <div class="flex-1 w-full">
                    <img src="{{asset('images/GreenKin/recycage.jfif')}}" alt="Recyclage local" class="rounded-3xl shadow-2xl w-full h-[400px] object-cover">
                </div>
                
            </div>
        </div>
    </section>

    <!-- Service 3 -->
    <div id="desinfection" class="p-4"></div>
    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                
                <!-- Contenu Texte -->
                <div class="flex-1">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-[#0D4B4A] mb-6">Désinfection Professionnelle</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 text-justify">
                        Assurez un environnement sain pour votre famille ou vos employés. Nos solutions de désinfection ciblées éliminent efficacement les bactéries, les insectes nuisibles et les odeurs persistantes grâce à des produits certifiés et respectueux de l'environnement.
                    </p>
                    
                    <!-- Liste des avantages -->
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700">
                            <span class="mr-3 text-green-500">🛡️</span> Traitement anti-bactérien haute performance
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="mr-3 text-green-500">🛡️</span> Élimination sécurisée des nuisibles
                        </li>
                    </ul>
                    <div class="mt-8 w-full">
                        <a href="{{route('greenkin.offres')}}" class="group bg-[#136A33] text-white px-8 py-4 rounded-xl font-medium mx-auto hover:bg-[#64B331] transition duration-300 shadow-lg text-center">
                            Souscrire
                            <i class="fas fa-arrow-right ml-1 text-sm group-hover:ml-1.5 transition duration-600"></i>
                        </a>
                    </div>
                </div>

                <!-- Image illustrative -->
                <div class="flex-1 w-full">
                    <img src="{{asset('images/GreenKin/desinfection.png')}}" alt="Désinfection professionnelle" class="rounded-3xl shadow-2xl w-full h-[400px] object-cover">
                </div>
                
            </div>
        </div>
    </section>

    <!-- Service 4 -->
    <div id="digital" class="p-4"></div>
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                
                <!-- Contenu Texte -->
                <div class="flex-1">
                    <h3 class="text-3xl md:text-4xl font-extrabold text-[#0D4B4A] mb-6">Suivi Digital Simplifié</h3>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6 text-justify">
                        Prenez le contrôle total de vos services de propreté. Notre plateforme moderne vous permet de gérer votre abonnement, consulter vos factures et suivre vos prochaines collectes en quelques clics, directement depuis votre smartphone.
                    </p>
                    
                    <!-- Liste des avantages -->
                    <ul class="space-y-3">
                        <li class="flex items-center text-gray-700">
                            <span class="mr-3 text-green-500">📱</span> Espace client accessible 24/7
                        </li>
                        <li class="flex items-center text-gray-700">
                            <span class="mr-3 text-green-500">📱</span> Paiements sécurisés et suivis
                        </li>
                    </ul>
                    <div class="mt-8 w-full">
                        <a href="{{route('greenkin.offres')}}" class="group bg-[#136A33] text-white px-8 py-4 rounded-xl font-medium mx-auto hover:bg-[#64B331] transition duration-300 shadow-lg text-center">
                            Souscrire
                            <i class="fas fa-arrow-right ml-1 text-sm group-hover:ml-1.5 transition duration-600"></i>
                        </a>
                    </div>
                </div>

                <!-- Image illustrative -->
                <div class="flex-1 w-full">
                    <img src="{{asset('images/GreenKin/suivi.png')}}" alt="Suivi digital GreenKin" class="rounded-3xl shadow-2xl w-full h-[400px] object-cover">
                </div>
                
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-[#ffffff] font-sans">
        <div class="max-w-5xl mx-auto px-6">

            <div class="bg-[#0D4B4A] rounded-[2rem] p-10 md:p-16 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl">

                <!-- Texte -->
                <div class="text-white">

                    <h4 class="text-3xl md:text-4xl font-bold mb-4">
                        Prêt à assainir votre environnement ?
                    </h4>

                    <p class="text-[#E8E8E8]/80 text-lg leading-relaxed max-w-md text-justify font-normal">
                        Rejoignez les centaines de foyers et entreprises à Kinshasa qui nous font confiance. Choisissez la formule adaptée à vos besoins dès maintenant.
                    </p>

                </div>
                <!-- Boutons -->
                <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                    <a href="{{route('greenkin.offres')}}"
                        class="bg-[#136A33] text-white px-8 py-4 rounded-xl font-medium hover:bg-[#64B331] transition duration-300 shadow-lg text-center">
                        Nos offres
                    </a>
                    <a href="{{route('greenkin.contact')}}"
                        class="bg-transparent border-2 border-[#64B331] text-white px-8 py-4 rounded-xl font-medium hover:bg-[#64B331] transition duration-300 text-center">
                        Nous contacter
                    </a>
                </div>
            </div>

        </div>
    </section>

@endsection