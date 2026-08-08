@extends('layouts.espoir')

@section('title', 'Accueil - Espoir-Afrique')

@section('content')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <section class="relative h-[90vh] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{asset('images/EA/hero1.png')}}" alt="Nettoyage professionnel" loading="lazy" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30"></div> 
        </div>
        <div class="relative z-10 text-center px-6 max-w-4xl text-white">
            <h2 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight tracking-tight">
                Votre confort commence par un
                <span class="text-[#f5a335]">environnement propre et sain</span>
            </h2>
            <p class="text-lg md:text-xl mb-8 text-gray-200 font-normal leading-relaxed">
                Depuis 2014, Espoir Afrique transforme vos espaces à Kinshasa avec un savoir-faire international.
            </p>            
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="{{route('services')}}" 
                    class="bg-[#001f93] hover:bg-[#e8488e] text-white px-8 py-4 rounded-lg font-bold transition duration-300">
                    Découvrir nos services
                </a>
                <a href="{{route('contact')}}" 
                    class="bg-white hover:bg-[#f5a335] text-[#001f93] hover:text-white px-8 py-4 rounded-lg font-bold transition duration-300">
                    Nous contacter
                </a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
            <div class="relative">
                <img src="{{asset('images/EA/nettoyage3.png')}}" alt="Équipe Espoir Afrique" loading="lazy" 
                    class="rounded-2xl shadow-2xl w-full h-auto object-cover">
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-blue-600 rounded-2xl -z-10 opacity-20"></div>
            </div>
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold text-[#001f93] mb-6 tracking-tight">
                    Votre Partenaire Propreté à Kinshasa depuis 2014
                </h2>
                <p class="text-gray-600 mb-6 leading-relaxed text-justify font-normal">
                    Basée à Kinshasa,
                    <span class="font-semibold text-[#001f93]">
                        Espoir Afrique
                    </span>
                    est votre entreprise professionnelle dédiée à transformer vos espaces.
                    Nous offrons les services de nettoyage, d'entretien des surfaces
                    extérieures et techniques, d'aménagement d'espaces verts et de lutte anti-nuisibles.
                    <br>
                    Nous combinons un savoir-faire local avec des standards internationaux pour vous offrir un environnement impeccable et sain.
                </p>
                <p class="text-gray-600 mb-8 leading-relaxed text-justify font-normal">
                    Forts de nos 10 années d'expérience, nous intervenons auprès des particuliers et des entreprises à travers
                    toutes les communes de Kinshasa avec rapidité, fiabilité et un engagement total envers votre satisfaction.
                </p>
                
                <a href="{{route('apropos')}}" 
                    class="inline-block border-2 border-[#f5a335] text-[#001f93] px-6 py-3 rounded-lg font-bold hover:bg-[#e8488e] hover:border-[#e8488e] hover:text-white transition duration-300">
                    En savoir plus sur notre mission
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-extrabold text-[#001f93] tracking-tight">
                    Des solutions complètes pour vos espaces
                </h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">                
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <img src="{{asset('images/EA/nettoyage1.png')}}" alt="Nettoyage" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-3 text-gray-900">Entretien et Nettoyage</h4>
                        <p class="text-gray-600 mb-4 text-sm text-justify">Du nettoyage de bureaux au ménage résidentiel et remise en état après chantier.</p>
                        <a href="{{route('services')}}#entretien" class="text-[#001f93] font-bold flex items-center hover:text-[#e8488e] transition duration-300">
                            Détails <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>                
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <img src="{{asset('images/EA/technique1.png')}}" alt="Nettoyage" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-3 text-gray-900">Surfaces Extérieures et Techniques</h4>
                        <p class="text-gray-600 mb-4 text-sm text-justify">Nettoyage de vitres en hauteur et accès difficiles, Lavage haute pression des façades et sols.</p>
                        <a href="{{route('services')}}#technique" class="text-[#001f93] font-bold flex items-center hover:text-[#e8488e] transition duration-300">
                            Détails <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <img src="{{asset('images/EA/nettoyage_chantier.png')}}" alt="Nettoyage" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-3 text-gray-900">Nettoyage après chantier</h4>
                        <p class="text-gray-600 mb-4 text-sm text-justify">Nous nous occupons du nettoyage de vos espaces après travaux de construction des bâtiments.</p>
                        <a href="{{route('services')}}#chantier" class="text-[#001f93] font-bold flex items-center hover:text-[#e8488e] transition duration-300">
                            Détails <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>                
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <img src="{{asset('images/EA/nettoyage_chantier.png')}}" alt="Nettoyage" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-3 text-gray-900">Maintenance des bâtiments</h4>
                        <p class="text-gray-600 mb-4 text-sm text-justify">Nous assurons l'entretien et les réparations courantes de vos bâtiments afin de garantir leur bon fonctionnement et leur sécurité.</p>
                        <a href="{{route('services')}}#batiment" class="text-[#001f93] font-bold flex items-center hover:text-[#e8488e] transition duration-300">
                            Détails <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <img src="{{asset('images/EA/vert1.png')}}" alt="Espaces Verts" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-3 text-gray-900">Aménagement Espaces Verts</h4>
                        <p class="text-gray-600 mb-4 text-sm text-justify">Entretien régulier, jardinage et aménagement végétal pour des espaces apaisants.</p>
                        <a href="{{route('services')}}#espaces" class="text-[#001f93] font-bold flex items-center hover:text-[#e8488e] transition duration-300">
                            Détails <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-shadow duration-300 overflow-hidden group">
                    <img src="{{asset('images/EA/nuisible1.png')}}" alt="Pest Control" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h4 class="text-xl font-bold mb-3 text-gray-900">Lutte Anti-nuisibles</h4>
                        <p class="text-gray-600 mb-4 text-sm text-justify">Solutions professionnelles de dératisation, désinsectisation et traitements préventifs.</p>
                        <a href="{{route('services')}}#anti-nuisibles" class="text-[#001f93] font-bold flex items-center hover:text-[#e8488e] transition duration-300">
                            Détails <i class="fas fa-arrow-right ml-2 text-sm"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-blue-900 text-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Pourquoi choisir Espoir Afrique ?</h2>
                <p class="text-blue-200 max-w-2xl mx-auto">
                    Plus qu'un simple nettoyage, nous nous engageons sur le résultat avec une garantie de satisfaction à 100%.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">                
                <div class="bg-blue-800 p-8 rounded-2xl border border-blue-700 hover:border-white transition">
                    <div class="text-3xl mb-4">⚙️</div>
                    <h4 class="font-bold text-lg mb-2">Matériel Moderne</h4>
                    <p class="text-blue-200 text-sm leading-relaxed text-justify">
                        Nos équipements industriels à la pointe de la technologie garantissent profondeur et rapidité.
                    </p>
                </div>
                <div class="bg-blue-800 p-8 rounded-2xl border border-blue-700 hover:border-white transition">
                    <div class="text-3xl mb-4">📅</div>
                    <h4 class="font-bold text-lg mb-2">10 Ans d'Expérience</h4>
                    <p class="text-blue-200 text-sm leading-relaxed text-justify">
                        Depuis 2014, nous mettons notre expertise éprouvée au service des particuliers et entreprises.
                    </p>
                </div>
                <div class="bg-blue-800 p-8 rounded-2xl border border-blue-700 hover:border-white transition">
                    <div class="text-3xl mb-4">🌿</div>
                    <h4 class="font-bold text-lg mb-2">Produits Écologiques</h4>
                    <p class="text-blue-200 text-sm leading-relaxed text-justify">
                        Nous privilégions des produits respectueux de votre santé et de l'environnement.
                    </p>
                </div>
                <div class="bg-blue-800 p-8 rounded-2xl border border-blue-700 hover:border-white transition">
                    <div class="text-3xl mb-4">👥</div>
                    <h4 class="font-bold text-lg mb-2">Équipe Formée</h4>
                    <p class="text-blue-200 text-sm leading-relaxed text-justify">
                        Nos professionnels sont rigoureusement formés, garantissant discrétion et professionnalisme.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white mb-12">
        <div class="max-w-7xl mx-auto px-6">            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-4 text-center">                
                <div class="p-8 border-r border-[#5392c5]/30">
                    <p class="text-5xl font-extrabold text-[#001f93] mb-2 tracking-tight">
                        10+
                    </p>
                    <h3 class="text-xl font-bold text-[#e8488e]">
                        Années d'expertise
                    </h3>
                    <p class="text-gray-700 font-medium mt-2 leading-relaxed">
                        Depuis 2014, au service de votre propreté.
                    </p>
                </div>

                <div class="p-8">
                    <p class="text-5xl font-extrabold text-[#001f93] mb-2 tracking-tight">
                        Kinshasa
                    </p>
                    <h3 class="text-xl font-bold text-[#e8488e]">
                        Couverture totale
                    </h3>
                    <p class="text-gray-700 font-medium mt-2 leading-relaxed">
                        Intervention à travers toutes les communes.
                    </p>
                </div>
            </div>
            
            <div class="text-center">
                <h4 class="text-xl font-bold text-gray-800 uppercase tracking-widest mb-10">Ils nous font confiance</h4>
                
                <div class="flex flex-wrap justify-center items-center gap-12 opacity-100">
                    <div class="h-30 w-40 border border-[#5392c5]/30 rounded flex items-center justify-center font-bold text-[#001f93]">
                        <img src="{{asset('images/EA/client/cbre.jpeg')}}" alt="" loading="lazy" srcset="">
                    </div>
                    <div class="h-20 w-32 border border-[#5392c5]/30 rounded flex items-center justify-center font-bold text-[#001f93]">
                        <img src="{{asset('images/EA/client/pabiche.jpeg')}}" alt=""loading="lazy" srcset="">
                    </div>
                    <div class="h-20 w-32 border border-[#5392c5]/30 rounded flex items-center justify-center font-bold text-[#001f93]">
                        <img src="{{asset('images/EA/client/citi.jpeg')}}" alt="" loading="lazy" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 mb-20">
        <div class="max-w-5xl py-20 px-14 bg-[#001f93] rounded-xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="text-white">
                <h4 class="text-4xl font-extrabold text-[#f5a335] mb-6 tracking-tight">
                    Prêt à transformer vos espaces?
                </h4>
                <p class="text-[#d9e8f5] text-lg font-medium leading-relaxed">
                    Demandez dès maintenant votre devis gratuit et sans engagement.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row gap-4">
                <a href="{{route('services')}}"
                    class="bg-white text-[#001f93] px-5 py-4 rounded-lg text-lg font-bold hover:bg-[#f5a335] hover:text-white transition shadow-lg text-center">
                    Nos services
                </a>
                <a href="{{route('contact')}}"
                    class="border-2 border-white text-white px-4 py-4 rounded-lg text-lg font-bold hover:bg-[#e8488e] hover:border-[#e8488e] transition text-center">
                    Contactez-nous
                </a>
            </div>
        </div>
    </section>

    
@endsection
