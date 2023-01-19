<div>
    <main>
        <h1 class="text-center text-4xl text-primary-dark bg-gray-700 font-bold py-5">Abayas homme</h1>
        <div class="py-36 xl:mx-48 md:px-14 lg:px-8 sm:px-10">
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-10 sm:gap-7">
                @forelse ($abayaHommes as $abayaHomme)
                    <a href="">
                        <x-cards.card-abayaHomme
                            :url_img="$abayaHomme->url_img"
                            :name="$abayaHomme->name"
                            :regular_price="$abayaHomme->regular_price"
                            :sale="$abayaHomme->sale"
                        />
                    </a>
                @empty
                    <p>Stock épuisé</p>
                @endforelse
            </div>
        </div>
    </main>
</div>
