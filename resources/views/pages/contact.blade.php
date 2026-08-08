@extends('layouts.espoir')

@section('title', 'Contact - Espoir-Afrique')

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
    
    <header class="relative h-[350px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{asset('images/EA/hero2.png')}}" alt="Contactez Espoir Afrique" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30"></div>
        </div>
        <div class="relative z-10 text-center px-6 text-white">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6"><span class="text-[#f5a335]">Contactez</span>-nous</h1>
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

    <section id="contact"  class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16">            
            <div>
                <h3 class="text-3xl font-extrabold text-[#001f93] mb-8">Informations de contact</h3>
                <div class="space-y-6">
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">📍</span>
                        <div>
                            <h4 class="font-bold text-gray-900">Adresse</h4>
                            <p class="text-gray-600 font-semibold">Kinshasa, République Démocratique du Congo</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">📞</span>
                        <div>
                            <h4 class="font-bold text-gray-900">Téléphone</h4>
                            <p class="text-gray-600 font-semibold">+243 983 671 853</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">✉️</span>
                        <div>
                            <h4 class="font-bold text-gray-900">Email</h4>
                            <p class="text-gray-600 font-semibold">info@espoir-afrique.com</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <span class="text-2xl mr-4">🌍</span>
                        <div>
                            <h4 class="font-bold text-gray-900">Zone d'intervention</h4>
                            <p class="text-gray-600 font-semibold">Couverture complète de toutes les communes de Kinshasa</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12">
                    <p class="font-bold text-gray-900 text-lg mb-4">Nous suivre</p>
                    <div class="flex space-x-4">
                        <a href=""></a>
                        <a href="https://www.facebook.com/share/1LiS17XNsU/?mibextid=wwXIfr" 
                            class="w-10 h-10 bg-gray-100 border-2 border-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                            <i class="fab fa-facebook-f"></i> 
                        </a>
                        <a href="https://www.instagram.com/espoirafrica?igsh=MTZhOHFnbzY5YjdkdQ==" 
                            class="w-10 h-10 bg-gray-100 border-2 border-blue-600 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <!-- twitter 
                            <a href="#" class="w-10 h-10 bg-gray-800 rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                        -->
                    </div>
                </div>
            </div>

            <div class="bg-gray-50 p-8 md:p-10 rounded-3xl">
                <h5 class="text-2xl font-bold mb-6 text-[#001f93]">Envoyez un message</h5>
                <form action="{{route('contact.send')}}" method="post" class="space-y-4">
                    <div>
                        <label class="block text-md font-semibold text-gray-700 mb-1">Nom complet</label>
                        <input type="text" name="nom" required placeholder="Votre nom complet" class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 transition">
                    </div>
                    <div>
                        <label class="block text-md font-semibold text-gray-700 mb-1">Téléphone</label>
                        <input type="tel" name="tel" required placeholder="+243 XXX XXX XXX" class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 transition">
                    </div>
                    <div>
                        <label class="block text-md font-semibold text-gray-700 mb-1">Email</label>
                        <input type="email" name="email" required placeholder="Votre adresse email" class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 transition">
                    </div>
                    <div>
                        <label class="block text-md font-semibold text-gray-700 mb-1">Objet de votre demande</label>
                        <select name="objet" required class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 bg-white transition">
                            <option value="">Sélectionnez un service</option>
                            <option value="nettoyage">Entretien et Nettoyage</option>
                            <option value="techniques">Surfaces Extérieures et Techniques</option>
                            <option value="espaces-verts">Espaces Verts</option>
                            <option value="pest-control">Pest Control : Solutions Anti-Nuisibles</option>
                            <option value="autre">Autre</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-md font-semibold text-gray-700 mb-1">Votre message</label>
                        <textarea name="message" rows="4" required placeholder="Dites-nous en plus sur votre projet..." class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-600 transition"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold hover:bg-blue-800 transition shadow-lg mt-2">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50 mb-20">
        <div class="max-w-5xl mx-auto px-6">            
            <div class="bg-[#001f93] rounded-3xl p-10 md:p-16 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl">
                <div class="text-white text-center md:text-left">
                    <h4 class="text-3xl md:text-4xl font-bold mb-4 tracking-tight">
                        Besoin d'un service professionnel ?
                    </h4>
                    <p class="text-[#d9e8f5] text-lg leading-relaxed max-w-lg font-normal">
                        Rejoignez des centaines de clients satisfaits à Kinshasa.
                        Obtenez votre devis personnalisé et sans engagement dès aujourd'hui.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                    <a href="{{route('services')}}"
                        class="bg-white text-[#001f93] px-8 py-4 rounded-xl font-bold hover:bg-[#f5a335] hover:text-white transition duration-300 shadow-lg text-center">
                        Nos services
                    </a>
                    <a href="tel:+243983671853"
                        class="border-2 border-white text-white px-8 py-4 rounded-xl font-bold hover:bg-[#e8488e] hover:border-[#e8488e] transition duration-300 text-center">
                        Nos offres
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
