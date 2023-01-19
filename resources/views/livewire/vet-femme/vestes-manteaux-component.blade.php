<div>
    <main>
        <x-nav-femmes/>
        <div class="py-36 xl:mx-48 md:px-14 lg:px-8 sm:px-10">
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-10 sm:gap-7">
                @forelse ($vesteManteaux as $vesteManteau)
                    <a href="">
                        <x-cards.card-vetFemme
                            :url_img="$vesteManteau->url_img" 
                            :category="$vesteManteau->category" 
                            :name="$vesteManteau->name" 
                            :regular_price="$vesteManteau->regular_price" 
                            :sale="$vesteManteau->sale"
                        />
                    </a>
                @empty
                    <p>Stock épuisé</p>
                @endforelse
            </div>
            {{-- <div class="flex justify-end">
                {{ $bijoux->links('pagination::tailwind') }}
            </div> --}}
        </div>
    </main>
</div>
