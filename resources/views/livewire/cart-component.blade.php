<div>
    <main class="mx-28 my-28">
        {{-- table --}}
        <div class="overflow-x-auto mb-10 shadow-lg">
            <table class="table w-full">
              <!-- head -->
              <thead>
                <tr>
                  <th>Produits</th>
                  <th>Prix</th>
                  <th>Sous-total</th>
                  <th>Quantité</th>
                  <th>Supprimer</th>
                </tr>
              </thead>
              <tbody>
                <!-- row 1 -->
                <tr>
                    <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                <img src="img/collier2.png" alt="" />
                                </div>
                            </div>
                            <div class="">
                                <div class="font-bold">colliers en acier</div>
                                <div class="text-sm opacity-50">Catégorie : Aciers inoxydables</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p>28,00€</p>
                    </td>
                    <td>
                        56,00€
                    </td>
                    <td>
                        <select class="select">
                            <option class="disabled selected">1</option>
                            <option class="">2</option>
                            <option class="">3</option>
                            <option class="">4</option>
                            <option class="">5</option>
                            <option class="">6</option>
                        </select>
                    </td>
                    <td>
                        <i class="fa-solid fa-trash-can text-primary-dark"></i>
                    </td>
                </tr>
                <!-- row 2 -->
                <tr>
                    <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                <img src="img/collier2.png" alt="" />
                                </div>
                            </div>
                            <div class="">
                                <div class="font-bold">colliers en acier</div>
                                <div class="text-sm opacity-50">Catégorie : Aciers inoxydables</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p>28,00€</p>
                    </td>
                    <td>
                        56,00€
                    </td>
                    <td>
                        <select class="select">
                            <option class="disabled selected">1</option>
                            <option class="">2</option>
                            <option class="">3</option>
                            <option class="">4</option>
                            <option class="">5</option>
                            <option class="">6</option>
                        </select>
                    </td>
                    <td>
                        <i class="fa-solid fa-trash-can text-primary-dark"></i>
                    </td>
                </tr>
                <!-- row 3 -->
                <tr>
                    <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                <img src="img/collier2.png" alt="" />
                                </div>
                            </div>
                            <div class="">
                                <div class="font-bold">colliers en acier</div>
                                <div class="text-sm opacity-50">Catégorie : Aciers inoxydables</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p>28,00€</p>
                    </td>
                    <td>
                        56,00€
                    </td>
                    <td>
                        <select class="select">
                            <option class="disabled selected">1</option>
                            <option class="">2</option>
                            <option class="">3</option>
                            <option class="">4</option>
                            <option class="">5</option>
                            <option class="">6</option>
                        </select>
                    </td>
                    <td>
                        <i class="fa-solid fa-trash-can text-primary-dark"></i>
                    </td>
                </tr>
                {{-- @forelse (Cart::content() as $bijou)
                    <tr>
                    <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                <img src="{{ asset('storage/'.$bijou->model->url_img) }}" alt="" />
                                </div>
                            </div>
                            <div class="">
                                <div class="font-bold">{{ $bijou->model->name }}</div>
                                <div class="text-sm opacity-50">Catégorie : {{ $bijou->model->category }}</div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p>{{ $bijou->model->price }}</p>
                    </td>
                    <td>
                        <select class="rounded-md" name="qty" id="qty">
                            @for ($i = 1; $i <= 10; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </td>
                    <th>
                        <x-btn-deleteCart :bijou="$bijou"/>
                    </th>
                    </tr>
                @empty
                    <p>Votre panier est vide</p>
                @endforelse --}}
            </table>
        </div>
        {{-- btn --}}
        <div class="flex justify-end gap-4">
            <button class="btn bg-primary-dark border-none text-gray-700g">
                Mettre à jour mon panier
            </button>
            <button class="btn bg-primary-dark border-none text-gray-700g">
                Vider le panier
            </button>
        </div>
        <div class="divider my-10"><i class="fa-solid fa-fingerprint text-gray-400"></i></div>
        {{-- section bottom --}}
        <div class="">
            <div class="grid grid-cols-2">
                <div class="">
                    <h1 class="mb-5 font-bold text-xl">Appliquer le code de réduction</h1>
                    <span>
                        <input type="password" class="rounded-lg" placeholder="Entrer le code">
                        <button class="bg-primary-dark ml-3 py-2 px-5 rounded-lg text-white font-bold uppercase border-none">Appliquer</button>
                    </span>
                </div>
                <div class="mx-10 ">
                    <h1 class="mb-5 font-bold text-xl">Total Panier</h1>
                    <div class="flex flex-col">
                        <div class="border p-7 overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="py-2 inline-block w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="min-w-full border text-center">
                                <thead class="border-b">
                                  <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                      Sous-total
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                      Total
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="border-b">
                                    <td class="text-sm text-secondary-dark font-bold px-6 py-4 whitespace-nowrap border-r">
                                      168,00€
                                    </td>
                                    <td class="text-sm text-secondary-dark font-bold px-6 py-4 whitespace-nowrap border-r">
                                      168,00€
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                          <a href="{{ route('checkout.index') }}" class="btn bg-primary-dark mt-5 ml-7 border-none text-gray-700g">
                              Passer à la caisse
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
