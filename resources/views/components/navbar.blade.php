
<!-- Section Nav-->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
        
            <div class="flex items-center ">
                
                <div class="w-16 h-16 bg-blue-00 rounded  flex items-center justify-center text-white font-bold">
                    <a href=""><img src="{{asset('images/logo/Logo_Espoir_Afrique1.png')}}" alt="" srcset=""></a>                        
                </div>
                <a href="">
                    <span class="text-xl font-bold text-gray-900 ml-2 text-center tracking-tight">Espoir <br> d'Afrique</span>
                </a>                    
            </div>

            <div class="hidden md:flex space-x-8 font-medium text-gray-800">
                <a href="{{route('home')}}" class="hover:text-blue-600 transition">Accueil</a>
                <a href="{{route('apropos')}}" class="hover:text-blue-600 transition">À propos</a>
                <a href="{{route('services')}}" class="hover:text-blue-600 transition">Services</a>
                <a href="#" target="_blank" class="hover:text-blue-600 transition">GreenKin</a>
                <a href="{{route('contact')}}" class="hover:text-blue-600 transition">Contact</a>
            </div>

            <div class="hidden md:block">
                <a href="contact.html" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-700 transition shadow-lg">Devis gratuit</a>
            </div>

            <div class="md:hidden">
                <button id="menu-btn" class="text-gray-800 focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-gray-50 border-t py-4 px-4 space-y-4">
        <a href="{{route('home')}}" class="block hover:text-blue-600 py-2">Accueil</a>
        <a href="{{route('apropos')}}" class="block hover:text-blue-600 py-2">À propos</a>
        <a href="{{route('services')}}" class="block hover:text-blue-600 py-2">Services</a>
        <a href="#" target="_blank" class="block hover:text-blue-600 py-2">GreenKin</a>
        <a href="{{route('contact')}}" class="block hover:text-blue-600 py-2">Contact</a>
        <a href="{{route('contact')}}" class="block bg-blue-600 text-white text-center py-3 rounded-lg font-bold">Devis gratuit</a>
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
