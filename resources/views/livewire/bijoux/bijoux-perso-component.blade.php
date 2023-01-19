<div>
    <main>
        <x-nav-bijou/>
            <div class="py-36 xl:mx-48 md:px-14 lg:px-8 sm:px-10">
                <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-10 sm:gap-7">
                    @forelse ($bijouPersos as $bijouPerso)
                        <a href="">
                            <x-cards.card-bijou 
                                :url_img="$bijouPerso->url_img" 
                                :category="$bijouPerso->category" 
                                :name="$bijouPerso->name" 
                                :regular_price="$bijouPerso->regular_price" 
                                :sale="$bijouPerso->sale"
                            />
                        </a>
                    @empty
                        <p>Stock épuisé</p>
                    @endforelse
            </div>
        </main>
</div>
