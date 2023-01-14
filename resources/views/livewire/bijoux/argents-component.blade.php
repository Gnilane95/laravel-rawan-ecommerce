<div>
    <main>
        <x-nav-bijou/>
            <div class="py-36 xl:mx-48 md:px-14 lg:px-8 sm:px-10">
                <div class="grid xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 lg:gap-10 sm:gap-7">
                    <x-cards.card-bijou/>
                    <x-cards.card-bijou/>
                    <x-cards.card-bijou/>
                    <x-cards.card-bijou/>
                    {{-- @forelse ($bijoux as $bijou)
                        <a href="">
                            <x-cards.card/>
                        </a>
                    @empty
                        <p>Stock épuisé</p>
                    @endforelse --}}
                </div>
                {{-- <div class="flex justify-end">
                    {{ $bijoux->links('pagination::tailwind') }}
                </div> --}}
            </div>
        </main>
</div>
