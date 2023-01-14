<div class="sm:hidden lg:bg-gray-700 lg:p-5 lg:flex lg:justify-center lg:space-x-5 lg:font-bold lg:text-gray-700">
    <a href="{{ route('robes-jupes.index') }}" class="text-primary-light hover:text-white hover:underline sm:text-sm md:text-md">
        Robes/Jupes
    </a>
    <a href="{{ route('pulls-hauts.index') }}" class="text-primary-light hover:text-white hover:underline sm:text-sm md:text-md">
        Pull/hauts
    </a>
    <a href="{{ route('ensembles-combinaisons.index') }}" class="text-primary-light hover:text-white hover:underline sm:text-sm md:text-md">
        Ensembles/combinaisons
    </a>
    <a href="{{ route('pantalons-jeans.index') }}" class="text-primary-light hover:text-white hover:underline sm:text-sm md:text-md">
        Pantalons/Jeans
    </a>
    <a href="{{ route('vestes-manteaux.index') }}" class="text-primary-light hover:text-white hover:underline sm:text-sm md:text-md">
        Vestes/Manteaux
    </a>
    <a href="{{ route('abayas-femme.index') }}" class="text-primary-light hover:text-white hover:underline sm:text-sm md:text-md">
        Abayas
    </a>
</div>
<div class="lg:hidden bg-gray-700">
    <div class="dropdown p-5">
        <label tabindex="0" class="flex items-center space-x-2 text-primary-light text-xl font-bold">
            <span>Catégories</span>
            <i class="fa-solid fa-angle-down"></i>
        </label>
        <ul tabindex="0" class="dropdown-content menu p-2 shadow bg-base-200 rounded-box sm:w-[40vh] md:w-[80vh]">
          <li>
            <a href="{{ route('robes-jupes.index') }}" class="hover:underline font-bold">
                Robes/Jupes
            </a>
            <a href="{{ route('pulls-hauts.index') }}" class="hover:underline font-bold">
                Pulls/Hauts
            </a>
            <a href="{{ route('ensembles-combinaisons.index') }}" class="hover:underline font-bold">
                Ensembles/Combinaisons
            </a>
            <a href="{{ route('pantalons-jeans.index') }}" class="hover:underline font-bold">
                Pantalons/Jeans
            </a>
            <a href="{{ route('vestes-manteaux.index') }}" class="hover:underline font-bold">
                Vestes/Manteaux
            </a>
            <a href="{{ route('abayas-femme.index') }}" class="hover:underline font-bold">
                Abayas
            </a>
          </li>
        </ul>
    </div>
</div>