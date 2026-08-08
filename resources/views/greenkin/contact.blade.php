@extends('layouts.greenkin')

@section('title', 'Contact - Greenkin')

@section('content')

    <!-- Header-->
    <header class="relative w-full h-[350px] flex items-center justify-center overflow-hidden">
        <!-- Image de fond avec effet de calque -->
        <div class="absolute inset-0 z-0">
            <img src="{{asset('images/GreenKin/contact.png')}}" alt="Contact GreenKin" class="w-full h-full object-cover">
            <!-- Calque sombre pour la lisibilité -->
            <div class="absolute inset-0 bg-[#0D4B4A]/40"></div>
        </div>

        <!-- Contenu du header -->
        <div class="relative z-10 text-center px-6">
            <h3 class="text-4xl md:text-5xl font-extrabold text-white mb-4">Contactez-nous</h3>
            <p class="text-gray-200 mt-2 text-lg max-w-lg mx-auto">
                Une question, un devis ou besoin d'assistance ? Notre équipe à Lingwala est là pour vous répondre rapidement.
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
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-start">
            
            <!-- Colonne Gauche : Coordonnées -->
            <div class="space-y-8">
                <h3 class="text-4xl font-extrabold text-[#0D4B4A]">Discutons de votre projet</h3>
                <p class="text-gray-600 text-lg font-semibold leading-relaxed">
                    Notre équipe est à votre disposition pour toute demande d'information ou pour établir un devis personnalisé. 
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <span class="text-2xl">📍</span>
                        <div>
                            <h4 class="font-bold">Adresse</h4>
                            <p class="text-gray-600 font-semibold">Commune de Lingwala, Quartier Singa-Mopepe, Avenue Tshuapa, n°221/B, Kinshasa, R.D Congo</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <span class="text-2xl">📞</span>
                        <div>
                            <h4 class="font-bold">Téléphone</h4>
                            <p class="text-gray-600 font-semibold">+243 983 671 853</p>
                        </div>
                    </div>
                    <div class="flex items-start space-x-4">
                        <span class="text-2xl">✉️</span>
                        <div>
                            <h4 class="font-bold">Email</h4>
                            <p class="text-gray-600 font-semibold">info@espoir-afrique.com</p>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <p class="text-sm font-bold text-gray-800 uppercase tracking-widest">Nous suivre</p>
                        <div class="flex items-center space-x-3">
                            <a href=""></a>
                            <!-- Facebook -->
                            <a href="facebook.com/share/19VR2XnGQt/?mibextid=wwXIfr" 
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-[#136A33] text-white hover:bg-[#64B331] transition-all duration-300 shadow-md0">
                                <i class="fab fa-facebook-f"></i> <!-- Assurez-vous d'avoir FontAwesome ou utilisez des SVG -->
                            </a>
                            <!-- Instagram -->
                            <a href="https://www.instagram.com/green_kin_services?igsh=MTMxOTZuaG1mcGx0bQ==" 
                                class="w-10 h-10 flex items-center justify-center rounded-full bg-[#136A33] text-white hover:bg-[#64B331] transition-all duration-300 shadow-md">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <!-- Twitter 
                                <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-[#136A33] text-white hover:bg-[#64B331] transition-all duration-300 shadow-md">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne Droite : Formulaire -->
            <div class="bg-gray-50 p-8 md:p-10 rounded-3xl border border-gray-100">
                <form action="{{route('contact.send')}}" method="POST" class="space-y-5">
                    <div>
                        <label class="block text-md font-bold text-gray-700 mb-2">Nom complet</label>
                        <input type="text" name="nom" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-green-500 outline-none transition" placeholder="Votre nom">
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-md font-bold text-gray-700 mb-2">Téléphone</label>
                            <input type="text" name="tel" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-green-500 outline-none transition" placeholder="+243 ...">
                        </div>
                        <div>
                            <label class="block text-md font-bold text-gray-700 mb-2">Email</label>
                            <input type="email" name="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-green-500 outline-none transition" placeholder="exemple@mail.com">
                        </div>
                    </div>

                    <div>
                        <label class="block text-md font-bold text-gray-700 mb-2">Objet de votre demande</label>
                        <select name="objet" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-green-500 outline-none transition bg-white">
                            <option value="">Sélectionnez un service</option>
                            <option>Demande de devis</option>
                            <option>Abonnement résidentiel</option>
                            <option>Services entreprises</option>
                            <option>Autre</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-md font-bold text-gray-700 mb-2">Message</label>
                        <textarea rows="4" name="message" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:ring-2 focus:ring-green-500 outline-none transition" placeholder="Comment pouvons-nous vous aider ?"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-green-600 text-white font-bold py-4 rounded-xl hover:bg-green-700 transition shadow-lg">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- CTA Services -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white p-12 md:p-16 rounded-[2rem] shadow-lg border border-gray-100 text-center">
                
                <!-- Titre et Texte -->
                <h4 class="text-3xl md:text-4xl font-extrabold text-[#0D4B4A] mb-6">
                    Redonnez de l'éclat à votre environnement
                </h4>
                <p class="text-lg text-[#0D4B4A] font-semibold mb-10 max-w-2xl mx-auto">
                    Des solutions de collecte et d'assainissement pensées pour le quotidien des Kinois. Choisissez l'efficacité, choisissez la propreté.
                </p>

                <!-- Boutons -->
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <!-- Bouton Principal -->
                    <a href="{{route('greenkin.offres')}}" class="bg-green-600 text-white px-8 py-4 rounded-xl font-bold hover:bg-green-700 transition shadow-lg transform hover:-translate-y-1">
                        Souscrire maintenant
                    </a>
                    <!-- Bouton Secondaire (style plus léger) -->
                    <a href="{{route('greenkin.services')}}" class="bg-white border-2 border-gray-500 text-gray-700 px-8 py-4 rounded-xl font-bold hover:border-green-600 hover:text-green-600 transition">
                        Découvrir nos services
                    </a>
                </div>
                
            </div>
        </div>
    </section>

@endsection