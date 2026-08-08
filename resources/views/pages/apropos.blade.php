@extends('layouts.espoir')

@section('title', 'A propos - Espoir-Afrique')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <section class="py-10 bg-gray-50">
        <div class="max-w-6xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">            
                <div class="relative">
                    <img src="{{asset('images/EA/equipe.png')}}" alt="Équipe Espoir Afrique" class="rounded-3xl shadow-2xl w-full h-[500px] object-cover">
                    <div class="absolute -bottom-8 -right-8 bg-[#001f93] text-white p-8 rounded-2xl shadow-lg hidden md:block">
                        <p class="text-4xl font-extrabold">10+</p>
                        <p class="text-sm uppercase tracking-widest">Années de succès</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-3xl md:text-3xl font-extrabold text-[#001f93] text-justify hyphens-auto mb-6 leading-tight">
                        Plus qu'un nettoyage, une promesse de qualité depuis 2014
                    </h3>
                    <div class="space-y-4 text-gray-800 text-md leading-relaxed text-justify font-normal">
                        <p>
                            Tout a commencé en 2014 avec une vision simple :
                            transformer le secteur de la propreté à Kinshasa en
                            alliant rigueur locale et standards internationaux.
                        </p>
                        <p>
                            Chez <span class="font-bold text-[#001f93]">Espoir Afrique</span>,
                            nous croyons que votre environnement est le reflet de votre ambition.
                            C'est pourquoi, au fil de ces dix années, nous avons bâti une équipe soudée,
                            formée aux techniques les plus pointues pour garantir un cadre de vie et de travail
                            sain, propre et inspirant.
                        </p>
                        <p>
                            Aujourd'hui, nous sommes fiers de servir toutes les communes de Kinshasa,
                            portés par une mission unique :
                            <span class="font-semibold text-[#001f93]">
                                votre satisfaction totale et le bien-être de vos espaces.
                            </span>
                        </p>
                    </div>
                    <a href="{{route('contact')}}"
                        class="inline-block mt-8 bg-[#001f93] text-white px-8 py-4 rounded-xl font-bold hover:bg-[#e8488e] transition duration-300 shadow-lg">
                        Nous contacter
                    </a>
                </div>            
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-extrabold text-[#001f93] leading-tight">
                    Plus qu'un service, une promesse de qualité
                </h3>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto leading-relaxed text-md font-normal">
                    Ancrés à Kinshasa depuis 2014, notre slogan 
                    <em class="font-medium text-[#001f93]">
                        "Votre confort commence par un environnement propre"
                    </em>
                    guide chacune de nos interventions.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 text-justify">                 
                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-[#001f93] hover:shadow-xl transition duration-300">
                    <h5 class="text-xl font-bold mb-4 text-gray-900">Expertise & Savoir-faire</h5>
                    <p class="text-gray-600 text-md leading-relaxed">
                        10 ans d'expérience au service de Kinshasa, avec une équipe rigoureusement formée, discrète et équipée de matériel moderne de pointe.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-[#5392c5] hover:shadow-xl transition duration-300">
                    <h5 class="text-xl font-bold mb-4 text-gray-900">Respect de l'Environnement</h5>
                    <p class="text-gray-600 text-md leading-relaxed">
                        Nous privilégions l'utilisation de produits écologiques, garantissant l'efficacité du nettoyage tout en préservant votre santé et la planète.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-2xl shadow-sm border-t-4 border-[#e8488e] hover:shadow-xl transition duration-300">
                    <h5 class="text-xl font-bold mb-4 text-gray-900">Satisfaction Garantie</h5>
                    <p class="text-gray-600 text-md leading-relaxed">
                        Une flexibilité totale avec des contrats ponctuels ou réguliers, un devis transparent et une garantie de satisfaction à 100%.
                    </p>
                </div>                
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h3 class="text-3xl md:text-4xl font-extrabold text-[#001f93]">L'excellence au cœur de notre métier</h3>
                <p class="mt-4 text-gray-600 text-md max-w-2xl mx-auto">
                    Nous fusionnons notre expertise locale avec des exigences de qualité mondiales pour vous offrir un service inégalé à Kinshasa.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8 text-center">                
                <div class="p-6 border border-[#5392c5]/20 rounded-3xl hover:shadow-xl hover:border-[#001f93]/30 transition duration-300">
                    <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">⭐</div>
                    <h5 class="text-xl font-bold mb-4">Satisfaction Garantie</h5>
                    <p class="text-gray-600 text-md leading-relaxed">
                        Nous nous engageons sur le résultat. Votre tranquillité d'esprit est notre priorité avec une garantie de satisfaction à 100% sur toutes nos prestations.
                    </p>
                </div>
                <div class="p-6 border border-[#5392c5]/20 rounded-3xl hover:shadow-xl hover:border-[#f5a335] transition duration-300">
                    <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">🌍</div>
                    <h5 class="text-xl font-bold mb-4">Savoir-faire Local</h5>
                    <p class="text-gray-600 text-md leading-relaxed">
                        Profondément ancrés à Kinshasa, nous comprenons parfaitement vos besoins spécifiques et nous adaptons nos services à chaque commune de la ville.
                    </p>
                </div>
                <div class="p-6 border border-[#5392c5]/20 rounded-3xl hover:shadow-xl hover:border-[#5392c5] transition duration-300">
                    <div class="w-16 h-16 bg-blue-50 text-blue-600 rounded-full flex items-center justify-center mx-auto mb-4 text-2xl">🛡️</div>
                    <h5 class="text-xl font-bold mb-4">Standards Internationaux</h5>
                    <p class="text-gray-600 text-md leading-relaxed">
                        De la gestion des contrats à la rigueur opérationnelle, nous appliquons des méthodes éprouvées pour garantir une propreté et une hygiène impeccables.
                    </p>
                </div>
            </div>
        </div>
    </section>
  
    <section class="py-10 bg-gray-10 mb-20">
        <div class="max-w-6xl mx-auto px-6">
            <div class="bg-[#001f93] rounded-3xl p-8 md:p-16 py-20 flex flex-col md:flex-row items-center justify-between gap-8 shadow-2xl">
                <div class="text-white text-center md:text-left">
                    <h5 class="text-3xl md:text-4xl font-extrabold mb-4 leading-tight">
                        Besoin d'un accompagnement 
                        <span class="text-[#f5a335]">
                            sur mesure ?
                        </span>
                    </h5>                    
                    <p class="text-[#d9e8f5] text-lg opacity-90 leading-relaxed max-w-xl">
                        Transformez vos espaces dès aujourd'hui.
                        Demandez votre devis gratuit et sans engagement.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto">
                    <a href="{{route('contact')}}" class="bg-white text-[#001f93] px-6 py-4 rounded-xl font-bold hover:bg-[#f5a335] hover:text-white transition duration-300 shadow-lg text-center">
                        Obtenir un devis
                    </a>
                    <a href="{{route('contact')}}" class="bg-[#e8488e] text-white px-6 py-4 rounded-xl font-bold hover:bg-white hover:text-[#001f93] transition duration-300 shadow-lg text-center">
                        Contactez-nous
                    </a>
                </div>
            </div>

        </div>
    </section>
    
@endsection
