<!-- Footer -->
<footer class="bg-[#0D4B4A] text-white pt-20 pb-10">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
        
        <!-- À propos -->
        <div>
            <h3 class="text-2xl font-bold mb-6 text-green-500">GreenKin</h3>
            <p class="text-[#E8E8E8]/80 leading-relaxed text-justify">
                La branche innovante d'Espoir Afrique. Nous transformons la gestion des déchets à Kinshasa grâce à des solutions technologiques et durables pour une ville plus propre.
            </p>
        </div>

        <!-- Navigation -->
        <div>
            <h3 class="text-lg font-bold mb-6 text-white">Navigation</h3>
            <ul class="space-y-3 text-gray-400">
                <li><a href="{{route('greenkin.home')}}" class="hover:text-green-500 transition">Accueil</a></li>
                <li><a href="{{route('greenkin.offres')}}" class="hover:text-green-500 transition">Nos offres</a></li>
                <li><a href="{{route('greenkin.services')}}" class="hover:text-green-500 transition">Services</a></li>
                <li><a href="{{route('greenkin.contact')}}" class="hover:text-green-500 transition">Contact</a></li>
            </ul>
        </div>

        <!-- Légal -->
        <div>
            <h3 class="text-lg font-bold mb-6 text-white">Légal</h3>
            <ul class="space-y-3 text-gray-400">
                <li><a href="#" class="hover:text-green-500 transition">Mentions légales</a></li>
                <li><a href="#" class="hover:text-green-500 transition">Politique de confidentialité</a></li>
            </ul>
        </div>

        <!-- Contact complet -->
        <div>
            <h3 class="text-lg font-bold mb-6 text-white">Contactez-nous</h3>
            <div class="space-y-4 text-gray-400 text-sm">
                <p class="flex items-start">
                    <span class="mr-3 text-green-500">📍</span> 
                    <span>Commune de Lingwala, Quartier Singa-Mopepe, Avenue Tshuapa, n° 221/B, Kinshasa, RDC</span>
                </p>
                <p class="flex items-center">
                    <span class="mr-3 text-green-500">📞</span> 
                    <a href="tel:+243983671853" class="hover:text-green-500 transition">+243 983 671 853</a>
                </p>
                <p class="flex items-center">
                    <span class="mr-3 text-green-500">✉️</span> 
                    <a href="mailto:info@espoir-afrique.com" class="hover:text-green-500 transition">info@espoir-afrique.com</a>
                </p>
            </div>
            
            <!-- Réseaux -->
            <div class="flex space-x-4 mt-8">
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

    <!-- Copyright -->
    <div class="max-w-7xl mx-auto px-6 border-t border-gray-800 pt-8 text-center text-gray-400 text-md">
        <p>&copy; 2026 Espoir Afrique - GreenKin. Tous droits réservés.</p>
    </div>
</footer>