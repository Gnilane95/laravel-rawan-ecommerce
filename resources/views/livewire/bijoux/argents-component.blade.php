<div>
    <main>
        <x-nav-bijou/>
            <div class="py-36 xl:mx-28 md:px-14 lg:px-8 sm:px-10">
                <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-10 sm:gap-7">
                    @forelse ($argents as $argent)
                        <a href="">
                            <x-cards.card-bijou 
                                :url_img="$argent->url_img" 
                                :category="$argent->category" 
                                :name="$argent->name" 
                                :regular_price="$argent->regular_price" 
                                :sale="$argent->sale"
                            />
                        </a>
                    @empty
                        <p>Stock épuisé</p>
                    @endforelse
            </div>
        </main>
</div>
