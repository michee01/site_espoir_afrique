@extends('layouts.greenkin')

@section('title', 'Offres - Greenkin')

@section('content')
    
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
    <section class="py-12 bg-[#f5f2f2] font-sans">
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

    <!-- CTA Contact -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white p-12 md:p-16 rounded-[2rem] shadow-lg border border-gray-100 text-center">
                
                <!-- Titre et Texte -->
                <h4 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6">
                    Besoin d'un accompagnement personnalisé ?
                </h4>
                <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto">
                    Notre équipe est à votre écoute pour discuter de vos besoins en assainissement et propreté. Contactez-nous dès aujourd'hui pour obtenir une réponse rapide.
                </p>

                <!-- Bouton -->
                <div>
                    <a href="{{route('greenkin.contact')}}" class="inline-block bg-[#136A33] text-white px-10 py-4 rounded-xl font-bold hover:bg-[#64B331] transition shadow-lg transform hover:-translate-y-1">
                        Nous contacter
                    </a>
                </div>
                
            </div>
        </div>
    </section>


@endsection