@extends('layouts.app')

@section('title', 'Accueil - Ogowe')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Historique -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">
            
            <div class="relative">
                <img src="{{asset('images/nettoyage3.png')}}" alt="Équipe Espoir Afrique" class="rounded-3xl shadow-2xl w-full h-[500px] object-cover">
                <div class="absolute -bottom-8 -right-8 bg-blue-600 text-white p-8 rounded-2xl shadow-lg hidden md:block">
                <p class="text-4xl font-extrabold">10+</p>
                <p class="text-sm uppercase tracking-widest">Années de succès</p>
                </div>
            </div>

            <div>
                <h2 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-2">Notre Histoire</h2>
                <h3 class="text-4xl font-extrabold text-gray-900 mb-6">
                    Plus qu'un nettoyage, une promesse de qualité depuis 2014
                </h3>
                
                <div class="space-y-6 text-gray-700 leading-relaxed text-justify">
                    <p>
                        Tout a commencé en 2014 avec une vision simple : transformer le secteur de la propreté à Kinshasa 
                        en alliant rigueur locale et standards internationaux. 
                    </p>
                    <p>
                        Chez <span class="font-bold text-blue-500">Espoir Afrique</span>, nous croyons que votre environnement est le reflet de votre ambition. C'est pourquoi, au fil de ces dix années, nous avons bâti une équipe soudée, formée aux techniques les plus pointues pour garantir un cadre de vie et de travail sain, propre et inspirant.
                    </p>
                    <p>
                        Aujourd'hui, nous sommes fiers de servir toutes les communes de Kinshasa, portés par une mission unique : votre satisfaction totale et le bien-être de vos espaces.
                    </p>
                </div>
            </div>
            
            </div>
        </div>
    </section>

    <!-- Engagement -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-2">Notre engagement</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold text-gray-900">Plus qu'un service, une promesse de qualité</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Ancrés à Kinshasa depuis 2014, notre slogan <em>"Votre confort commence par un environnement propre"</em> guide chacune de nos interventions.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 text-justify"> 
                
                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-blue-600">
                    <h5 class="text-xl font-bold mb-4 text-gray-900">Expertise & Savoir-faire</h5>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        10 ans d'expérience au service de Kinshasa, avec une équipe rigoureusement formée, discrète et équipée de matériel moderne de pointe.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-blue-600">
                    <h5 class="text-xl font-bold mb-4 text-gray-900">Respect de l'Environnement</h5>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Nous privilégions l'utilisation de produits écologiques, garantissant l'efficacité du nettoyage tout en préservant votre santé et la planète.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-blue-600">
                    <h5 class="text-xl font-bold mb-4 text-gray-900">Satisfaction Garantie</h5>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Une flexibilité totale avec des contrats ponctuels ou réguliers, un devis transparent et une garantie de satisfaction à 100%.
                    </p>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Nos valeurs -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-blue-600 font-bold uppercase tracking-widest text-sm mb-2">Nos Valeurs</h2>
                <h3 class="text-3xl md:text-4xl font-extrabold text-gray-900">L'excellence au cœur de notre métier</h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto">
                    Nous fusionnons notre expertise locale avec des exigences de qualité mondiales pour vous offrir un service inégalé à Kinshasa.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 text-center">
                
                <div class="p-8 border border-gray-100 rounded-3xl hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">⭐</div>
                    <h5 class="text-xl font-bold mb-4">Satisfaction Garantie</h5>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Nous nous engageons sur le résultat. Votre tranquillité d'esprit est notre priorité avec une garantie de satisfaction à 100% sur toutes nos prestations.
                    </p>
                </div>

                <div class="p-8 border border-gray-100 rounded-3xl hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">🌍</div>
                    <h5 class="text-xl font-bold mb-4">Savoir-faire Local</h5>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Profondément ancrés à Kinshasa, nous comprenons parfaitement vos besoins spécifiques et nous adaptons nos services à chaque commune de la ville.
                    </p>
                </div>

                <div class="p-8 border border-gray-100 rounded-3xl hover:shadow-lg transition">
                    <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-6 text-2xl">🛡️</div>
                    <h5 class="text-xl font-bold mb-4">Standards Internationaux</h5>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        De la gestion des contrats à la rigueur opérationnelle, nous appliquons des méthodes éprouvées pour garantir une propreté et une hygiène impeccables.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 bg-gray-0 mb-20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="bg-blue-600 rounded-3xl p-8 md:p-16 py-20 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl">
                
                <div class="text-white text-center md:text-left">
                    <h5 class="text-3xl md:text-4xl font-extrabold mb-4">Besoin d'un accompagnement sur mesure ?</h5>
                    <p class="text-blue-100 text-lg opacity-90">
                        Transformez vos espaces dès aujourd'hui. Demandez votre devis gratuit et sans engagement.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                    <a href="{{route('contact')}}" class="bg-white text-blue-700 px-8 py-4 rounded-xl font-bold hover:bg-gray-100 transition shadow-lg text-center">
                        Obtenir un devis
                    </a>
                    <a href="{{route('contact')}}" class="bg-gray-900 text-white px-8 py-4 rounded-xl font-bold hover:bg-black transition shadow-lg text-center">
                        Contactez-nous
                    </a>
                </div>
                
            </div>
        </div>
    </section>

    
@endsection
