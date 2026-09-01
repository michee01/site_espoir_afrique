@extends('layouts.greenkin')

@section('title', 'Accueil - Greenkin')

@section('content')
    
    <!-- Section Hero -->
    <section class="relative h-[90vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{asset('images/GreenKin/hero.jfif')}}" alt="Nettoyage professionnel" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-[#0D4B4A]/40"></div> 
        </div>

        <div class="relative z-10 text-center px-6 max-w-4xl text-white">
            <h2 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
                GreenKin : l'innovation au service de <span class="text-green-400">votre environnement</span>.
            </h2>
            <p class="text-lg md:text-xl mb-8 text-gray-200">
                Propulsé par Espoir Afrique, GreenKin révolutionne la gestion de vos déchets à Kinshasa avec efficacité, simplicité et durabilité.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{route('greenkin.services')}}" class="bg-[#136A33] hover:bg-[#64B331] text-white px-8 py-4 rounded-lg font-medium transition duration-300 shadow-lg">
                    Nos services
                </a>
                <a href="{{route('greenkin.contact')}}" class="bg-white text-[#136A33] hover:bg-[#64B331] hover:text-white px-8 py-4 rounded-lg font-medium transition duration-300 shadow-lg">
                    Nous contacter
                </a>
            </div>
        </div>
    </section>

    <!-- Presentation de l'entreprise-->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Texte de présentation -->
            <div class="text-center mb-16">

                <h3 class="text-3xl md:text-4xl font-bold text-[#0D4B4A] mb-8">
                    Plus qu'une collecte, un mouvement pour Kinshasa
                </h3>

                <div class="max-w-3xl mx-auto space-y-6 text-lg text-[#0D4B4A]/80 leading-relaxed font-semibold">
                    <p>
                        <strong class="font-bold text-[#136A33]">GreenKin</strong> est la branche innovante de Espoir Afrique, forte de 10 ans d'expertise dans le secteur de la propreté à Kinshasa. Nous réinventons la gestion des déchets grâce à des solutions technologiques et écoresponsables, spécifiquement conçues pour répondre aux défis uniques de notre capitale.
                    </p>

                    <p>
                        Notre vision dépasse le simple nettoyage : nous bâtissons un écosystème où chaque déchet est traité avec respect pour offrir une ville plus saine, plus verte et résolument moderne pour les générations futures.
                    </p>
                </div>
            </div>

            <!-- Galerie d'impact -->
            <div class="grid md:grid-cols-4 gap-8">

                <div class="group overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition duration-300">
                    <a href="{{route('greenkin.services')}}#collecte">
                        <img src="images/GreenKin/service1.jpg"
                            alt="Technologie de collecte" loading="lazy"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    </a>
                </div>

                <div class="group overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition duration-300">
                    <a href="{{route('greenkin.services')}}#recyclage">
                        <img src="images/GreenKin/service3.jpg"
                            alt="Modernisation de Kinshasa" loading="lazy"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    </a>    
                </div>

                <div class="group overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition duration-300">
                    <a href="{{route('greenkin.services')}}#desinfection">    
                        <img src="images/GreenKin/service2.jpg"
                            alt="Engagement écoresponsable" loading="lazy"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    </a>
                </div>
                <div class="group overflow-hidden rounded-3xl shadow-xl hover:shadow-2xl transition duration-300">
                    <a href="{{route('greenkin.services')}}#digital"> 
                        <img src="{{asset('images/GreenKin/service4.jpg')}}" loading="lazy"
                            alt="Modernisation de Kinshasa"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pourquoi choisir Greenkin services -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Titre de la section -->
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-extrabold text-[#0D4B4A]">L'excellence au service de Kinshasa</h3>
            </div>

            <!-- Grille des avantages -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Carte 1: Technologie -->
                <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition-shadow border border-gray-100 text-center">
                    <div class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl">📱</div>
                    <h4 class="text-xl font-bold mb-4">Technologie</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Plateforme digitale et application mobile pour un suivi en temps réel de vos collectes.
                    </p>
                </div>

                <!-- Carte 2: Éco-responsabilité -->
                <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition-shadow border border-gray-100 text-center">
                    <div class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl">♻️</div>
                    <h4 class="text-xl font-bold mb-4">Éco-responsabilité</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Tri avancé et recyclage local pour réduire drastiquement votre impact environnemental.
                    </p>
                </div>

                <!-- Carte 3: Fiabilité -->
                <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition-shadow border border-gray-100 text-center">
                    <div class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl">✅</div>
                    <h4 class="text-xl font-bold mb-4">Fiabilité</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Une logistique ponctuelle et rigoureuse héritée de 10 ans d'expertise locale.
                    </p>
                </div>

                <!-- Carte 4: Communauté -->
                <div class="bg-white p-8 rounded-3xl shadow-sm hover:shadow-xl transition-shadow border border-gray-100 text-center">
                    <div class="w-16 h-16 bg-green-50 text-green-600 rounded-2xl flex items-center justify-center mx-auto mb-6 text-2xl">🤝</div>
                    <h4 class="text-xl font-bold mb-4">Communauté</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Solutions collectives et participatives pour transformer durablement vos quartiers.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <!-- En-tête -->
            <div class="text-center mb-16">
                <h4 class="text-3xl md:text-4xl font-extrabold text-[#0D4B4A]">Nos Services Complets</h4>
            </div>

            <div class="grid lg:grid-cols-3 gap-12 items-center">
                
                <!-- Colonne 1: Services de base -->
                <div class="space-y-8">
                    <div class="bg-gray-50 p-6 rounded-2xl border-l-4 border-green-600">
                        <h5 class="text-xl font-bold mb-2 text-[#0D4B4A]">Collecte Régulière</h5>
                        <p class="text-gray-600 text-sm leading-relaxed text-justify font-semibold">
                            Un service de ramassage fiable et planifié pour maintenir vos espaces propres au quotidien, grâce à notre suivi digital.
                        </p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-2xl border-l-4 border-green-600">
                        <h5 class="text-xl font-bold mb-2 text-[#0D4B4A]">Tri et Récyclage</h5>
                        <p class="text-gray-600 text-sm leading-relaxed text-justify font-semibold">
                            Accompagnement dans le tri de vos déchets pour valoriser les matières recyclables et réduire votre empreinte écologique.
                        </p>
                    </div>
                </div>

                <!-- Colonne 2: Image centrale (mise en valeur) -->
                <div class="hidden lg:block">
                    <img src="{{asset('images/GreenKin/poubele.png')}}" alt="Services GreenKin" class="rounded-3xl shadow-2xl">
                </div>

                <!-- Colonne 3: Services complémentaires -->
                <div class="space-y-8">
                    <div class="bg-gray-50 p-6 rounded-2xl border-l-4 border-green-600">
                        <h5 class="text-xl font-bold mb-2 text-[#0D4B4A]">Désinfection Professionnelle</h5>
                        <p class="text-gray-600 text-sm leading-relaxed text-justify font-semibold">
                            Assurez un environnement sain pour votre famille ou vos employés.
                        </p>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-2xl border-l-4 border-green-600">
                        <h5 class="text-xl font-bold mb-2 text-[#0D4B4A]">Suivi Digital Simplifié</h5>
                        <p class="text-gray-600 text-sm leading-relaxed text-justify font-semibold">
                            Prenez le contrôle total de vos services de propreté.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Formules pour Particuliers -->
    <section class="py-12 bg-white font-sans">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Titre -->
            <div class="text-center mb-16">

                <h4 class="text-3xl md:text-4xl font-bold text-[#0D4B4A]">
                    Formules pour Particuliers
                </h4>
            </div>

            <!-- Grille des prix -->
            <div class="grid md:grid-cols-3 gap-8 items-start">

                <!-- Formule 1 : Essentiel -->
                <div class="bg-white p-8 rounded-3xl border border-[#E8E8E8] shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">

                    <h5 class="text-2xl font-bold text-[#0D4B4A] mb-2">
                        Formule Essentiel
                    </h5>

                    <div class="text-3xl font-bold text-[#136A33] mb-4">
                        15$<span class="text-lg text-[#0D4B4A]/60 font-medium">/ mois</span>
                    </div>

                    <p class="text-[#0D4B4A]/80 mb-6 text-md font-normal">
                        Idéal pour : petits ménages, appartements individuels.
                    </p>

                    <ul class="space-y-4 mb-8 text-md text-[#0D4B4A]">
                        <li class="flex items-center">✅ 1 à 2 collectes / semaine</li>
                        <li class="flex items-center">✅ Sacs écologiques inclus</li>
                        <li class="flex items-center">✅ Accès client 24/7</li>
                    </ul>

                    <a href="#"
                    class="block text-center py-3 px-6 rounded-xl border-2 border-[#136A33] text-[#136A33] font-medium hover:bg-[#136A33] hover:text-white transition duration-300">
                        Choisir
                    </a>

                </div>

                <!-- Formule 2 : Avancé (Mise en avant) -->
                <div class="bg-[#136A33] p-8 rounded-3xl shadow-2xl transform md:-translate-y-4 text-white">

                    <h5 class="text-2xl font-bold mt-4 mb-2">
                        Formule Avancé
                    </h5>

                    <div class="text-3xl font-bold mb-4">
                        30$<span class="text-lg text-[#E8E8E8] font-medium">/ mois</span>
                    </div>

                    <p class="text-[#E8E8E8] mb-6 text-md">
                        Pour les familles et maisons familiales.
                    </p>

                    <ul class="space-y-4 mb-8 text-md text-[#E8E8E8]">
                        <li class="flex items-center">✅ 2 à 3 collectes / semaine</li>
                        <li class="flex items-center">✅ Sacs écologiques inclus</li>
                        <li class="flex items-center">✅ Désinfection incluse</li>
                        <li class="flex items-center">✅ Suivi complet via site</li>
                    </ul>

                    <a href="#"
                    class="block text-center py-3 px-6 rounded-xl bg-[#64B331] text-white font-medium hover:bg-white hover:text-[#136A33] transition duration-300">
                        Choisir
                    </a>

                </div>

                <!-- Formule 3 : Premium -->
                <div class="bg-white p-8 rounded-3xl border border-[#E8E8E8] shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">

                    <h5 class="text-2xl font-bold text-[#0D4B4A] mb-2">
                        Formule Premium
                    </h5>

                    <div class="text-3xl font-bold text-[#136A33] mb-4">
                        40$<span class="text-lg text-[#0D4B4A]/60 font-medium">/ mois</span>
                    </div>

                    <p class="text-[#0D4B4A]/80 mb-6 text-md font-normal">
                        Pour un confort total et gestion avancée.
                    </p>

                    <ul class="space-y-4 mb-8 text-md text-[#0D4B4A]">
                        <li class="flex items-center">✅ 4 collectes / semaine</li>
                        <li class="flex items-center">✅ Sacs écologiques inclus</li>
                        <li class="flex items-center">✅ Désinfection mensuelle</li>
                        <li class="flex items-center">✅ Support VIP prioritaire</li>
                    </ul>

                    <a href="#"
                    class="block text-center py-3 px-6 rounded-xl border-2 border-[#136A33] text-[#136A33] font-medium hover:bg-[#136A33] hover:text-white transition duration-300">
                        Choisir
                    </a>

                </div>

            </div>
        </div>
    </section>

    <!-- Formules pour entreprise -->
    <section class="py-12 bg-[#E8E8E8] font-sans">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Titre -->
            <div class="text-center mb-16">
                <h4 class="text-3xl md:text-4xl font-bold text-[#0D4B4A]">
                    Formules pour entreprise
                </h4>
            </div>

            <!-- Grille des prix -->
            <div class="grid md:grid-cols-3 gap-8 items-stretch">

                <!-- Business -->
                <div class="h-full bg-white p-8 rounded-3xl border border-[#E8E8E8] shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col">

                    <h5 class="text-2xl font-bold text-center text-[#0D4B4A] mb-6">
                        Business
                    </h5>

                    <div class="text-2xl font-bold text-[#136A33] mb-4">
                        Sur devis
                        <span class="text-lg text-[#0D4B4A]/60 font-medium">/ mois</span>
                    </div>

                    <p class="text-[#0D4B4A]/80 mb-8 text-md leading-relaxed flex-grow">
                        Idéal pour boutiques et pharmacies.
                    </p>

                    <a href="#"
                    class="block text-center py-3 px-6 rounded-xl border-2 border-[#136A33] text-[#136A33] font-medium hover:bg-[#136A33] hover:text-white transition duration-300">
                        Choisir
                    </a>

                </div>

                <!-- Corporate -->
                <div class="h-full bg-[#136A33] border border-[#64B331] p-8 rounded-3xl shadow-2xl md:-translate-y-4 text-white flex flex-col">

                    <h5 class="text-2xl text-center font-bold mb-6">
                        Corporate
                    </h5>

                    <div class="text-2xl font-bold mb-4">
                        Sur devis
                        <span class="text-lg text-[#E8E8E8] font-medium">/ mois</span>
                    </div>

                    <p class="text-[#E8E8E8] mb-8 text-md leading-relaxed flex-grow">
                        Pour restaurants, hôtels et écoles. Inclut audit d'hygiène et formation du personnel.
                    </p>

                    <a href="#"
                    class="block text-center py-3 px-6 rounded-xl bg-[#64B331] text-white font-medium hover:bg-white hover:text-[#136A33] transition duration-300">
                        Choisir
                    </a>

                </div>

                <!-- Entreprise Pro -->
                <div class="h-full bg-white p-8 rounded-3xl border border-[#E8E8E8] shadow-md hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 flex flex-col">

                    <h5 class="text-2xl font-bold text-center text-[#0D4B4A] mb-6">
                        Entreprise Pro
                    </h5>

                    <div class="text-2xl font-bold text-[#136A33] mb-4">
                        Sur devis
                        <span class="text-lg text-[#0D4B4A]/60 font-medium">/ mois</span>
                    </div>

                    <p class="text-[#0D4B4A]/80 mb-8 text-md leading-relaxed flex-grow">
                        Gestion complète sur site avec camion dédié pour grandes industries.
                    </p>

                    <a href="#"
                    class="block text-center py-3 px-6 rounded-xl border-2 border-[#136A33] text-[#136A33] font-medium hover:bg-[#136A33] hover:text-white transition duration-300">
                        Choisir
                    </a>

                </div>

            </div>
        </div>
    </section>
    
    <!-- CTA Services et Contact -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white p-12 md:p-16 rounded-[2rem] shadow-lg border border-gray-100 text-center">
                
                <!-- Titre et Texte -->
                <h4 class="text-3xl md:text-4xl font-bold text-[#0D4B4A] mb-6">
                    Une solution de propreté adaptée à vos besoins
                </h4>

                <p class="text-lg text-[#0D4B4A]/80 mb-10 max-w-2xl mx-auto font-semibold leading-relaxed">
                    Ne laissez plus les déchets encombrer votre quotidien. Découvrez nos solutions professionnelles et rejoignez les nombreux Kinois qui font confiance à GreenKin pour un environnement sain.
                </p>

                <!-- Boutons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <!-- Bouton Principal -->
                    <a href="{{route('greenkin.services')}}" class="bg-green-700 text-white px-8 py-4 rounded-xl font-bold hover:bg-green-500 transition shadow-lg transform hover:-translate-y-1">
                        Découvrir nos services
                    </a>
                    <!-- Bouton Secondaire -->
                    <a href="{{route('greenkin.contact')}}" class="bg-white border-2 border-gray-300 text-green-700 px-8 py-4 rounded-xl font-bold hover:bg-green-500 hover:text-white transition">
                        Nous contacter
                    </a>
                </div>
                
            </div>
        </div>
    </section>


@endsection