@extends('layouts.app')

@section('title', 'Services - Ogowe')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Header -->
    <header class="relative h-[400px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{asset('images/hero2.png')}}" alt="Nos services" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60"></div>
        </div>

        <div class="relative z-10 text-center px-6">
            <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6">Nos services</h1>
            <p class="text-gray-200 max-w-xl mx-auto text-lg">
                Découvrez nos solutions complètes, du nettoyage de bureaux à l'aménagement de vos espaces verts, avec une qualité irréprochable.
            </p>
        </div>
    </header>

    <!-- Service 1 : Entretien et Nettoyage -->
    <section id="entretien" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            
            <div>
                <h4 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6">Entretien et Nettoyage Professionnel</h4>
                <p class="text-gray-600 mb-8 leading-relaxed text-justify">
                    Nous intervenons avec rigueur et efficacité pour transformer vos espaces. Que ce soit pour le maintien d'une image 
                    professionnelle ou le confort de votre foyer, notre équipe est équipée pour répondre à tous vos besoins.
                </p>
                
                <div class="grid grid-cols-2 gap-4 mb-8">
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-blue-600 mr-2">✔</span> Bureaux
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-blue-600 mr-2">✔</span> Maisons & Appartements
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-blue-600 mr-2">✔</span> Remise en état après chantier
                    </div>
                    <div class="flex items-center text-gray-700 font-medium">
                        <span class="text-blue-600 mr-2">✔</span> Désinfection spécialisée
                    </div>
                </div>

                <a href="{{route('contact')}}" class="inline-block bg-blue-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-700 transition shadow-lg">
                    Demander un devis
                </a>
            </div>

            <div class="relative">
                <img src="{{asset('images/nettoyage2.png')}}" alt="Entretien et nettoyage" class="rounded-3xl shadow-2xl w-full h-[450px] object-cover">
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-blue-100 rounded-full -z-10"></div>
            </div>
        </div>
    </section>
    
    <!-- Service 2 : Surfaces Extérieures et Techniques -->
    <section id="technique" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            
            <div class="relative order-2 md:order-1">
                <img src="{{asset('images/technique1.png')}}" alt="Services Techniques" class="rounded-3xl shadow-2xl w-full h-[450px] object-cover">
                <div class="absolute -top-6 -left-6 w-24 h-24 bg-blue-100 rounded-full -z-10"></div>
            </div>

            <div class="order-1 md:order-2">
                <h4 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6">Surfaces Extérieures et Techniques</h4>
                <p class="text-gray-600 mb-8 leading-relaxed text-justify">
                    Au-delà de l'entretien quotidien, nous maîtrisons les interventions techniques complexes pour redonner 
                    éclat et performance à vos installations.
                </p>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full p-1 mr-3 text-xs">⚡</span> Lavage haute pression des façades et sols
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full p-1 mr-3 text-xs">⚡</span> Nettoyage de vitres en hauteur et accès difficiles
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full p-1 mr-3 text-xs">⚡</span> Entretien et remise en état de climatiseurs
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="bg-blue-100 text-blue-600 rounded-full p-1 mr-3 text-xs">⚡</span> Maintenance des systèmes de ventilation
                    </li>
                </ul>

                <a href="{{route('contact')}}" class="inline-block border-2 border-blue-600 text-blue-600 px-8 py-4 rounded-xl font-bold hover:bg-blue-600 hover:text-white transition shadow-sm">
                    Réserver une intervention
                </a>
            </div>
        </div>
    </section>

    <!-- Service 3 : Espaces Verts -->
    <section id="espace_vert" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            
            <div>
                <h4 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6">Aménagement et Entretien d'Espaces Verts</h4>
                <p class="text-gray-600 mb-8 leading-relaxed text-justify">
                    Un jardin bien entretenu est une oasis de fraîcheur et de sérénité. Nous concevons et entretenons vos 
                    espaces extérieurs pour qu'ils reflètent la beauté de la nature au quotidien.
                </p>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-700">
                        <span class="bg-green-100 text-green-600 rounded-full p-1 mr-3 text-xs">🌿</span> Création et aménagement végétal personnalisé
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="bg-green-100 text-green-600 rounded-full p-1 mr-3 text-xs">🌿</span> Travaux de jardinage complets (tonte, taille)
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="bg-green-100 text-green-600 rounded-full p-1 mr-3 text-xs">🌿</span> Système d'arrosage et suivi de croissance
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="bg-green-100 text-green-600 rounded-full p-1 mr-3 text-xs">🌿</span> Entretien régulier et remise en état
                    </li>
                </ul>

                <a href="{{route('contact')}}" class="inline-block bg-green-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-green-700 transition shadow-lg">
                    Demander un devis paysager
                </a>
            </div>

            <div class="relative">
                <img src="{{asset('images/vert1.png')}}" alt="Aménagement espaces verts" class="rounded-3xl shadow-2xl w-full h-[450px] object-cover">
                <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-green-100 rounded-full -z-10"></div>
            </div>
        </div>
    </section>

    <!-- Service 4 : Pest Control (Solutions Anti-Nuisibles) -->
    <section id="pest_control" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            
            <div class="relative">
                <img src="{{asset('images/nuisible1.png')}}" alt="Anti-nuisibles" class="rounded-3xl shadow-2xl w-full h-[450px] object-cover">
                <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-red-100 rounded-full -z-10"></div>
            </div>

            <div>
                <h4 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6">Pest Control : Solutions Anti-Nuisibles</h4>
                <p class="text-gray-600 mb-8 leading-relaxed text-justify">
                    Protégez vos espaces contre toute intrusion nuisible. Nos experts interviennent avec des méthodes sécurisées pour garantir un environnement sain, débarrassé de toute menace.
                </p>
                
                <ul class="space-y-4 mb-8">
                    <li class="flex items-center text-gray-700">
                        <span class="bg-red-100 text-red-600 rounded-full p-1 mr-3 text-xs">🛡️</span> Désinsectisation ciblée et complète
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="bg-red-100 text-red-600 rounded-full p-1 mr-3 text-xs">🛡️</span> Dératisation rapide et sécurisée
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="bg-red-100 text-red-600 rounded-full p-1 mr-3 text-xs">🛡️</span> Traitements préventifs longue durée
                    </li>
                    <li class="flex items-center text-gray-700">
                        <span class="bg-red-100 text-red-600 rounded-full p-1 mr-3 text-xs">🛡️</span> Audit et sécurisation de vos locaux
                    </li>
                </ul>

                <a href="{{route('contact')}}" class="inline-block bg-red-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-red-700 transition shadow-lg">
                    Demander une intervention d'urgence
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gray-900 mb-20">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-gradient-to-r from-blue-700 to-blue-600 rounded-3xl p-10 md:p-16 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl">
                
                <div class="text-white text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-extrabold mb-4">Besoin d'un service professionnel ?</h4>
                    <p class="text-blue-100 text-lg leading-relaxed max-w-lg">
                        Rejoignez des centaines de clients satisfaits à Kinshasa. Obtenez votre devis personnalisé et sans engagement dès aujourd'hui.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                    <a href="{{route('contact')}}" class="bg-white text-blue-700 px-8 py-4 rounded-xl font-bold hover:bg-gray-100 transition shadow-lg text-center">
                        Devis gratuit
                    </a>
                    <a href="tel:+243983671853" class="border-2 border-white text-white px-8 py-4 rounded-xl font-bold hover:bg-blue-800 transition text-center">
                        Appeler maintenant
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    
@endsection