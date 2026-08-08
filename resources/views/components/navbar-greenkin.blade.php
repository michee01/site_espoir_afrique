<!-- Section Nav-->    
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
        
            <div class="">
                <a href="{{route('greenkin.home')}}">
                    <div class="w-36 h-16 bg-blue- rounded flex items-center justify-center text-white font-bold">
                        <img src="{{asset('images/GreenKin/Logo_Green_Kinshasa1.png')}}" alt="" srcset="" 
                        class="w-full h-full">
                    </div>
                </a>
            </div>

            <div class="hidden md:flex space-x-4 font-medium  text-[#0D4B4A] font-semibold">
                <a href="{{route('greenkin.home')}}" class="hover:text-green-600 transition">Accueil</a>
                <a href="{{route('greenkin.offres')}}" class="hover:text-green-600 transition">Nos offres</a>
                <a href="{{route('greenkin.services')}}" class="hover:text-green-600 transition">Services</a>
                <a href="{{route('greenkin.contact')}}" class="hover:text-green-600 transition">Contact</a>
            </div>

            <div class="md:hidden">
                <button id="menu-btn" class="text-gray-800 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-gray-50 border-t py-4 px-4 space-y-4 text-[#0D4B4A] font-semibold">
        <a href="{{route('greenkin.home')}}" class="block hover:text-green-600 py-2">Accueil</a>
        <a href="{{route('greenkin.offres')}}" class="block hover:text-green-600 py-2">Nos offres</a>
        <a href="{{route('greenkin.services')}}" class="block hover:text-green-600 py-2">Services</a>
        <a href="{{route('greenkin.contact')}}" class="block hover:text-green-600 py-2">Contact</a>
    </div>
</nav>

<script>
    // Script simple pour basculer le menu mobile
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('mobile-menu');

    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>