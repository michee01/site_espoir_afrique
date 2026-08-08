@extends('layouts.greenkin')

@section('title', 'Offres - Greenkin')

@section('content')
    
    <!-- Formules pour Particuliers -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Titre -->
            <div class="text-center mb-16">
                <h2 class="text-green-600 font-bold uppercase tracking-widest text-sm mb-2">Nos Tarifs</h2>
                <h4 class="text-3xl md:text-4xl font-extrabold text-gray-900">Formules pour Particuliers</h4>
            </div>

            <!-- Grille des prix -->
            <div class="grid md:grid-cols-3 gap-8 items-start">
                
                <!-- Formule 1 : Essentiel -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-lg transition">
                    <h5 class="text-xl font-bold mb-2">Formule Essentiel</h5>
                    <div class="text-4xl font-extrabold text-gray-900 mb-4">15$<span class="text-lg text-gray-500 font-medium">/ mois</span></div>
                    <p class="text-gray-600 mb-6 text-sm">Idéal pour : petits ménages, appartements individuels.</p>
                    <ul class="space-y-4 mb-8 text-sm text-gray-700">
                        <li class="flex items-center">✅ 1 à 2 collectes / semaine</li>
                        <li class="flex items-center">✅ Sacs écologiques inclus</li>
                        <li class="flex items-center">✅ Accès client 24/7</li>
                    </ul>
                    <a href="{{route('greenkin.contact')}}" class="block text-center py-3 px-6 rounded-xl border-2 border-green-600 text-green-600 font-bold hover:bg-green-600 hover:text-white transition">Choisir</a>
                </div>

                <!-- Formule 2 : Avancé (Mise en avant) -->
                <div class="bg-green-600 p-8 rounded-3xl shadow-xl transform md:-translate-y-4 text-white">
                    <span class="bg-white text-green-600 text-xs font-bold px-3 py-1 rounded-full uppercase">Populaire</span>
                    <h5 class="text-xl font-bold mt-4 mb-2">Formule Avancé</h5>
                    <div class="text-4xl font-extrabold mb-4">25$<span class="text-lg text-green-100 font-medium">/ mois</span></div>
                    <p class="text-green-50 mb-6 text-sm">Pour les familles et maisons familiales.</p>
                    <ul class="space-y-4 mb-8 text-sm text-green-50">
                        <li class="flex items-center">✅ 3 collectes / semaine</li>
                        <li class="flex items-center">✅ Sacs écologiques inclus</li>
                        <li class="flex items-center">✅ Désinfection incluse</li>
                        <li class="flex items-center">✅ Suivi complet via site</li>
                    </ul>
                    <a href="{{route('greenkin.contact')}}" class="block text-center py-3 px-6 rounded-xl bg-white text-green-600 font-bold hover:bg-gray-100 transition">Choisir</a>
                </div>

                <!-- Formule 3 : Premium -->
                <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-lg transition">
                    <h5 class="text-xl font-bold mb-2">Formule Premium</h5>
                    <div class="text-4xl font-extrabold text-gray-900 mb-4">40$<span class="text-lg text-gray-500 font-medium">/ mois</span></div>
                    <p class="text-gray-600 mb-6 text-sm">Pour un confort total et gestion avancée.</p>
                    <ul class="space-y-4 mb-8 text-sm text-gray-700">
                        <li class="flex items-center">✅ Collectes illimitées</li>
                        <li class="flex items-center">✅ Sacs écologiques inclus</li>
                        <li class="flex items-center">✅ Désinfection mensuelle</li>
                        <li class="flex items-center">✅ Support VIP prioritaire</li>
                    </ul>
                    <a href="{{route('greenkin.contact')}}" class="block text-center py-3 px-6 rounded-xl border-2 border-green-600 text-green-600 font-bold hover:bg-green-600 hover:text-white transition">Choisir</a>
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
                    <a href="{{route('greenkin.contact')}}" class="inline-block bg-green-600 text-white px-10 py-4 rounded-xl font-bold hover:bg-green-700 transition shadow-lg transform hover:-translate-y-1">
                        Nous contacter
                    </a>
                </div>
                
            </div>
        </div>
    </section>


@endsection