<div>
    <main>
        <h1 class="text-center text-4xl text-primary-dark bg-gray-700 font-bold py-5">Vêtements enfants</h1>
        <div class="py-36 xl:mx-48 md:px-14 lg:px-8 sm:px-10">
            <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-10 sm:gap-7">
                @forelse ($vetements_enfant as $vetement_enfant)
                    <a href="">
                        <x-cards.card-vetEnfant
                            :url_img="$vetement_enfant->url_img"
                            :name="$vetement_enfant->name"
                            :regular_price="$vetement_enfant->regular_price"
                            :sale="$vetement_enfant->sale"
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
