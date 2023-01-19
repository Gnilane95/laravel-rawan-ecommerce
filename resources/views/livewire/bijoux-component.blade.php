<div>
    <main>
    <x-nav-bijou/>
        <div class="py-36 xl:mx-28 md:px-14 lg:px-6 sm:px-10">
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-10 sm:gap-7">
                @forelse ($bijoux as $bijou)
                    <a href="">
                        <x-cards.card-bijou 
                            :url_img="$bijou->url_img" 
                            :category="$bijou->category" 
                            :name="$bijou->name" 
                            :regular_price="$bijou->regular_price" 
                            :sale="$bijou->sale"
                        />
                    </a>
                @empty
                    <p>Stock épuisé</p>
                @endforelse
            </div>
        </div>
    </main>
</div>
