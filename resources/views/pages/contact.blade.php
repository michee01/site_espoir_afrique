@extends('layouts.app')

@section('title', 'Services - Ogowe')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25d366;
            color: white;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            z-index: 100;
            display: flex;
            align-items: center;
            padding: 10px 20px;
            text-decoration: none;
            font-family: Arial, sans-serif;
            font-weight: bold;
        }
    </style>
    
    <!-- Header -->
    <header class="relative h-[350px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{asset('images/hero2.png')}}" alt="Contactez Espoir Afrique" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gray-900/70"></div>
        </div>

        <div class="relative z-10 text-center px-6 text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6">Contactez-nous</h1>
            <p class="text-gray-200 max-w-lg mx-auto text-lg">
                Vous avez une question, besoin d'un devis gratuit ou d'une intervention rapide ? Envoyez-nous un message, nous vous répondrons dans les plus brefs délais.
            </p>
        </div>
    </header>
    
    @if(session()->has('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Succès !</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    @if(session()->has('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Erreur !</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    <!-- Contact -->
    <section id="contact"  class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16">
            
            <div>
                <h3 class="text-3xl font-extrabold text-gray-900 mb-8">Informations de contact</h3>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">📍</span>
                        <div>
                            <h4 class="font-bold text-gray-900">Adresse</h4>
                            <p class="text-gray-600">Kinshasa, République Démocratique du Congo</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">📞</span>
                        <div>
                            <h4 class="font-bold text-gray-900">Téléphone</h4>
                            <p class="text-gray-600">+243 983 671 853 / +243 82 964 0349</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">✉️</span>
                        <div>
                            <h4 class="font-bold text-gray-900">Email</h4>
                            <p class="text-gray-600">info@espoir-afrique.com</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">🌍</span>
                        <div>
                            <h4 class="font-bold text-gray-900">Zone d'intervention</h4>
                            <p class="text-gray-600">Couverture complète de toutes les communes de Kinshasa</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <p class="font-bold text-gray-900 mb-4">Nous suivre</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-blue-600 hover:text-white transition">FB</a>
                        <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-pink-600 hover:text-white transition">IG</a>
                        <a href="#" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center hover:bg-green-600 hover:text-white transition">WA</a>
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 p-8 md:p-10 rounded-3xl">
                <h5 class="text-2xl font-bold mb-6 text-gray-900">Envoyez un message</h5>
                <form action="#" method="post" class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Nom complet</label>
                        <input type="text" name="name" required placeholder="Votre nom complet" class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 transition">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" required placeholder="Votre adresse email" class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 transition">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Téléphone</label>
                        <input type="tel" name="phone" required placeholder="+243 XXX XXX XXX" class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 transition">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Objet de votre demande</label>
                        <select name="service" required class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 bg-white transition">
                            <option value="">Sélectionnez un service</option>
                            <option value="nettoyage">Entretien et Nettoyage</option>
                            <option value="techniques">Surfaces Extérieures et Techniques</option>
                            <option value="espaces-verts">Espaces Verts</option>
                            <option value="pest-control">Pest Control : Solutions Anti-Nuisibles</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Votre message</label>
                        <textarea name="message" rows="4" required placeholder="Dites-nous en plus sur votre projet..." class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 transition"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold hover:bg-blue-700 transition shadow-lg mt-2">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gray-00 mb-20">
        <div class="max-w-5xl mx-auto px-6">
            <div class="bg-gradient-to-r from-blue-700 to-blue-600 rounded-3xl p-10 md:p-16 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl">
                
                <div class="text-white text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-extrabold mb-4">Besoin d'un service professionnel ?</h4>
                    <p class="text-blue-100 text-lg leading-relaxed max-w-lg">
                        Rejoignez des centaines de clients satisfaits à Kinshasa. Obtenez votre devis personnalisé et sans engagement dès aujourd'hui.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                    <a href="{{route('services')}}" class="bg-white text-blue-700 px-8 py-4 rounded-xl font-bold hover:bg-gray-100 transition shadow-lg text-center">
                        Nos services
                    </a>
                    <a href="#contact" class="border-2 border-white text-white px-6 py-4 rounded-xl font-bold hover:bg-blue-800 transition text-center">
                        Nous contacter
                    </a>
                </div>
                
            </div>
        </div>
    </section>
    

    <a href="https://wa.me/243983671853" class="whatsapp-float group" target="_blank">
        <span class="text-xl mr-2">💬</span> 
        <span class="text-xs uppercase tracking-tighter">Urgence Nuisibles</span>
    </a>

@endsection
