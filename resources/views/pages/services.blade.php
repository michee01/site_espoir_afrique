@extends('layouts.espoir')

@section('title', 'Services - Espoir-Afrique')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <header class="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{asset('images/EA/hero2.png')}}" alt="Nos services" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30"></div>
        </div>

        <div class="relative z-10 text-center px-6">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">
                Nos <span class="text-[#f5a335]">services</span> 
            </h1>
            <p class="text-gray-200 max-w-xl mx-auto text-lg">
                Découvrez nos solutions complètes, du nettoyage de bureaux à l'aménagement de vos espaces verts, avec une qualité irréprochable.
            </p>
        </div>
    </header>

    <!-- Service 1 : Entretien et Nettoyage -->
    <section id="entretien" class="py-14 bg-white">
        <div class="max-w-7xl mx-auto py-6 px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h4 class="text-3xl md:text-4xl font-extrabold text-[#001f93] mb-6 tracking-tight">
                    Entretien et Nettoyage Professionnel
                </h4>
                <p class="text-gray-700 mb-8 leading-relaxed font-medium text-justify">
                    Nous intervenons avec rigueur et efficacité pour transformer vos espaces. Que ce soit pour le maintien d'une image 
                    professionnelle ou le confort de votre foyer, notre équipe est équipée pour répondre à tous vos besoins.
                </p>

                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Bureaux, écoles, appartements
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Maisons et copropriétés
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Surfaces commerciales et industrielles
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Décapage-mise en cire
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Shampoing moquette et tapis, lustrage
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Enlèvement de graffitis
                    </div>
                </div>

                <a href="{{route('contact')}}"
                    class="inline-block bg-[#001f93] text-white px-8 py-4 rounded-xl font-bold hover:bg-[#e8488e] transition duration-300 shadow-lg">
                    Demander un devis
                </a>
            </div>

            <div class="relative">
                <img src="{{asset('images/EA/nettoyage2.png')}}" 
                    alt="Entretien et nettoyage" loading="lazy"
                    class="rounded-3xl shadow-2xl w-full h-[450px] object-cover">

                <div class="absolute -top-6 -right-6 w-24 h-24 bg-[#5392c5]/20 rounded-full -z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 2 : Surfaces Extérieures et Techniques -->
    <section id="technique" class="py-14 bg-gray-50">
        <div class="max-w-7xl mx-auto py-6 px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="relative order-2 md:order-1">
                <img src="{{asset('images/EA/technique1.png')}}" 
                    alt="Services Techniques" loading="lazy"
                    class="rounded-3xl shadow-2xl w-full h-[450px] object-cover">
                <div class="absolute -top-6 -left-6 w-24 h-24 bg-[#5392c5]/20 rounded-full -z-10">
                </div>
            </div>

            <div class="order-1 md:order-2">
                <h4 class="text-3xl md:text-4xl font-extrabold text-[#001f93] mb-6 tracking-tight">
                    Surfaces Extérieures et Techniques
                </h4>
                <p class="text-gray-700 mb-6 leading-relaxed text-justify font-medium">
                    Au-delà de l'entretien quotidien, nous maîtrisons les interventions techniques complexes pour redonner 
                    éclat et performance à vos installations.
                </p>

                <ul class="space-y-4 mb-6">
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#5392c5]/20 text-[#001f93] rounded-full p-1 mr-3 text-xs">
                            ⚡
                        </span>
                        Lavage de toutes surfaces vitrées
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#5392c5]/20 text-[#001f93] rounded-full p-1 mr-3 text-xs">
                            ⚡
                        </span>
                        Lavage haute pression des façades et sols
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#5392c5]/20 text-[#001f93] rounded-full p-1 mr-3 text-xs">
                            ⚡
                        </span>
                        Nettoyage de vitres en hauteur et accès difficiles
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#5392c5]/20 text-[#001f93] rounded-full p-1 mr-3 text-xs">
                            ⚡
                        </span>
                        Lavage de véranda, lavage de velux, nettoyage auvent
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#5392c5]/20 text-[#001f93] rounded-full p-1 mr-3 text-xs">
                            ⚡
                        </span>
                        Lavage des châssis, des volets ou de stores
                    </li>
                </ul>

                <a href="{{route('contact')}}"
                    class="inline-block border-2 border-[#001f93] text-[#001f93] px-8 py-4 rounded-xl font-bold hover:bg-[#e8488e] hover:border-[#e8488e] hover:text-white transition duration-300 shadow-sm">
                    Réserver une intervention
                </a>
            </div>
        </div>
    </section>

    <!-- Service 3 : Nettoyage après chantier -->
    <section id="chantier" class="py-14 bg-white">
        <div class="max-w-7xl mx-auto py-6 px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h4 class="text-3xl md:text-4xl font-extrabold text-[#001f93] mb-6 tracking-tight">
                    Nettoyage après chantier
                </h4>
                <p class="text-gray-600 mb-8 leading-relaxed text-justify font-medium">
                    Nous nous occupons du nettoyage de vos espaces après travaux de construction des bâtiments 
                    (résidences, bureaux, maisons d'habitation, espaces commercial, ...)
                </p>

                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Evacuation des gravats, des matériaux de chantier
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Remise en état des surfaces (murs et sols)
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Nettoyage des vitres (dégraissage, grattage et lavage)
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Aspiration des débris pouvant obstruer les conduits
                    </div>
                </div>

                <a href="{{route('contact')}}"
                    class="inline-block bg-[#001f93] text-white px-8 py-4 rounded-xl font-bold hover:bg-[#e8488e] transition duration-300 shadow-lg">
                    Demander un devis
                </a>
            </div>

            <div class="relative">
                <img src="{{asset('images/EA/nettoyage_chantier.png')}}" 
                    alt="Entretien après chantier" loading="lazy"
                    class="rounded-3xl shadow-2xl w-full h-[450px] object-cover">

                <div class="absolute -top-6 -right-6 w-24 h-24 bg-[#5392c5]/20 rounded-full -z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 4 : Maintenance des bâtiments  -->
    <section id="batiment" class="py-14 bg-gray-50">
        <div class="max-w-7xl mx-auto py-6 px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <img src="{{asset('images/EA/maintenance_batiment.png')}}" 
                    alt="maintenance batiment" loading="lazy"
                    class="rounded-3xl shadow-2xl w-full h-[450px] object-cover">

                <div class="absolute -top-6 -right-6 w-24 h-24 bg-[#5392c5]/20 rounded-full -z-10">
                </div>
            </div>

            <div>
                <h4 class="text-3xl md:text-4xl font-extrabold text-[#001f93] mb-6 tracking-tight">
                    Maintenance des bâtiments
                </h4>
                <p class="text-gray-700 mb-8 leading-relaxed text-justify font-medium">
                    Nous assurons l'entretien et les réparations courantes de vos bâtiments afin de garantir leur 
                    bon fonctionnement et leur sécurité. Nos agents qualifiés interviennent rapidement pour tous 
                    vos besoins de maintenance.
                </p>

                <div class="grid grid-cols-2 gap-4 mb-8">                    
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Plomberie
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Électricité
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Serrurerie
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Peinture
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Petits travaux de maintenance
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-[#e8488e] mr-2">✔</span> 
                        Réparations et entretien des locaux
                    </div>
                </div>

                <a href="{{route('contact')}}"
                    class="inline-block bg-[#001f93] text-white px-8 py-4 rounded-xl font-bold hover:bg-[#e8488e] transition duration-300 shadow-lg">
                    Demander un devis
                </a>
            </div>
        </div>
    </section>

    <!-- Service 5 : Espaces Verts -->
    <section id="espaces" class="py-14 bg-white">
        <div class="max-w-7xl mx-auto py-6 px-6 grid md:grid-cols-2 gap-12 items-center">
            <div>
                <h4 class="text-3xl md:text-4xl font-extrabold text-[#001f93] mb-4 tracking-tight">
                    Aménagement et Entretien d'Espaces Verts
                </h4>
                <p class="text-gray-700 mb-6 leading-relaxed text-justify font-medium">
                    Un jardin bien entretenu est une oasis de fraîcheur et de sérénité. Nous concevons et entretenons vos 
                    espaces extérieurs pour qu'ils reflètent la beauté de la nature au quotidien.
                </p>

                <ul class="space-y-3 mb-4">
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#5392c5]/20 text-[#001f93] rounded-full p-1 mr-3 text-xs">
                            🌿
                        </span>
                        Création et entretien d’espaces verts intérieur et extérieur
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#5392c5]/20 text-[#001f93] rounded-full p-1 mr-3 text-xs">
                            🌿
                        </span>
                        Travaux de jardinage complets (tonte, taille)
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#5392c5]/20 text-[#001f93] rounded-full p-1 mr-3 text-xs">
                            🌿
                        </span>
                        Système d'arrosage et suivi de croissance
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#5392c5]/20 text-[#001f93] rounded-full p-1 mr-3 text-xs">
                            🌿
                        </span>
                        Entretien régulier et remise en état
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#5392c5]/20 text-[#001f93] rounded-full p-1 mr-3 text-xs">
                            🌿
                        </span>
                        Taille et soins des massifs, des haies et des arbres
                    </li>
                </ul>

                <a href="{{route('contact')}}"
                    class="inline-block bg-[#001f93] text-white px-8 py-4 rounded-xl font-bold hover:bg-[#e8488e] transition duration-300 shadow-lg">
                    Demander un devis paysager
                </a>
            </div>

            <div class="relative">
                <img src="{{asset('images/EA/vert1.png')}}" 
                    alt="Aménagement espaces verts" loading="lazy"
                    class="rounded-3xl shadow-2xl w-full h-[450px] object-cover">

                <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-[#5392c5]/20 rounded-full -z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- Service 6 : Pest Control (Solutions Anti-Nuisibles) -->
    <section id="anti-nuisibles" class="py-14 bg-gray-50">
        <div class="max-w-7xl mx-auto py-6 px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <img src="{{asset('images/EA/nuisible1')}}.png" 
                    alt="Lutte anti-nuisibles" loading="lazy"
                    class="rounded-3xl shadow-2xl w-full h-[450px] object-cover">
                <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-[#5392c5]/20 rounded-full -z-10">
                </div>
            </div>

            <div>
                <h4 class="text-3xl md:text-4xl font-extrabold text-[#001f93] mb-4 tracking-tight">
                    Pest Control : Solutions Anti-Nuisibles
                </h4>
                <p class="text-gray-700 mb-4 leading-relaxed text-justify font-medium">
                    Protégez vos espaces contre toute intrusion nuisible. Nos experts interviennent avec des méthodes sécurisées pour garantir un environnement sain, débarrassé de toute menace.
                </p>

                <ul class="space-y-3 mb-4">
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#e8488e]/10 text-[#e8488e] rounded-full p-1 mr-3 text-xs">
                            🛡️
                        </span>
                        Désinsectisation ciblée et complète
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#e8488e]/10 text-[#e8488e] rounded-full p-1 mr-3 text-xs">
                            🛡️
                        </span>
                        Dératisation rapide et sécurisée
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#e8488e]/10 text-[#e8488e] rounded-full p-1 mr-3 text-xs">
                            🛡️
                        </span>
                        Traitements préventifs longue durée
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#e8488e]/10 text-[#e8488e] rounded-full p-1 mr-3 text-xs">
                            🛡️
                        </span>
                        Audit et sécurisation de vos locaux
                    </li>
                    <li class="flex items-center text-gray-700 font-medium">
                        <span class="bg-[#e8488e]/10 text-[#e8488e] rounded-full p-1 mr-3 text-xs">
                            🛡️
                        </span>
                        Lutte adaptée en fonction du type de nuisible et de l'environnement
                    </li>
                </ul>

                <a href="{{route('contact')}}"
                    class="inline-block bg-[#e8488e] text-white px-8 py-4 rounded-xl font-bold hover:bg-[#001f93] transition duration-300 shadow-lg">
                    Demander une intervention d'urgence
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gray-100 mb-20">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-[#001f93] rounded-3xl p-10 md:p-16 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl">
                <div class="text-white text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-extrabold mb-4 tracking-tight">
                        Besoin d'un service professionnel ?
                    </h4>
                    <p class="text-[#d9e8f5] text-lg leading-relaxed max-w-lg font-normal">
                        Rejoignez des centaines de clients satisfaits à Kinshasa. Obtenez votre devis personnalisé et sans engagement dès aujourd'hui.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                    <a href="{{route('contact')}}" class="bg-[#f5a335] text-[#001f93] px-8 py-4 rounded-xl font-bold hover:bg-[#e8488e] hover:text-white transition duration-300 shadow-lg text-center">
                        Devis gratuit
                    </a>
                    <a href="tel:+243983671853" class="border-2 border-white text-white px-8 py-4 rounded-xl font-bold hover:bg-[#e8488e] hover:border-[#e8488e] transition duration-300 text-center">
                        Appeler maintenant
                    </a>
                </div>
            </div>

        </div>

    </section>
    
@endsection