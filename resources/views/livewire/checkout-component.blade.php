<div>
    <main class="grid grid-cols-2 gap-20 my-28 mx-32">
        {{-- Section left --}}
        <div class="mx-10">
            <h1 class="text-gray-700 font-bold text-xl mb-10">Détails de facturation</h1>
            <form action="" class="form-control mb-7" method="POST">
                @csrf
                {{-- Shipping informations --}}
                <input type="text" name="" placeholder="Votre prénom *" class="rounded-lg mb-5 block" required>
                <input type="text" name="" placeholder="Votre nom *" class="rounded-lg mb-5 block" required>
                <input type="tel" name="" placeholder="Téléphone *" class="rounded-lg mb-5 block" required>
                <input type="email" name="" placeholder="E-mail *" class="rounded-lg mb-5 block" required>

                {{-- Shipping adress --}}
                <select class="select select-bordered mb-5">
                    <option disabled selected>Choisir un pays</option>
                    <option>France</option>
                </select>
                <div class="grid grid-cols-2">
                    <input type="number" name="" placeholder="Code postal *" class="rounded-lg mb-5 block mr-7" required>
                    <input type="text" name="" placeholder="Ville *" class="rounded-lg mb-5 block" required>
                </div>
                <input type="text" name="" placeholder="Numéro et nom de rue *" class="rounded-lg mb-5 block" required>
                <input type="text" name="" placeholder="Appartement" class="rounded-lg mb-5 block">
                <label class="font-bold mb-3">Informations complémentaires</label>
                <textarea name="" class="w-full h-56 rounded-lg"></textarea>
            </form>
            {{-- type of shipping --}}
            <h2 class="font-bold mb-3">Mode de livraison</h2>
            <div class="">
                <div class="flex justify-between border border-gray-400 rounded-t-lg p-3">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="radio-1" class="radio" checked />
                        <span class="font-normal">Chronopost - 4 à 5 jours ouvrés</span>
                    </div>
                    <span class="">4,99€</span>
                </div>
                <div class="flex justify-between border border-gray-400 rounded-b-lg p-3">
                    <div class="flex items-center gap-2">
                        <input type="radio" name="radio-1" class="radio"/>
                        <span class="font-normal">Colissimo - 48h à 72h jours ouvrés</span>
                    </div>
                    <span class="">7,99€</span>
                </div>
            </div>
        </div>
        {{-- Section right --}}
        <div class="">
            <h1 class="text-gray-700 font-bold text-xl mb-10">Votre commande</h1>
            <div class="border p-7">
                <div class="flex flex-col mb-10">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table class="min-w-full border text-center">
                            <thead class="border-b">
                              <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                  
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 border-r">
                                  Articles
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4">
                                  Total
                                </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr class="border-b">
                                <td class=" py-4 border-r w-28 px-3"><img src="img/collier2.png" alt="" class=""/></td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                  <p class="font-bold">Colliers en acier</p>
                                  <p>x1</p>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  28,00€
                                </td>
                              </tr>
                              <tr class="bg-white border-b">
                                <td class=" py-4 border-r w-28 px-3"><img src="img/collier2.png" alt="" class=""/></td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    <p class="font-bold">Colliers en acier</p>
                                    <p>x2</p>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                56,00€
                                </td>
                              </tr>
                              <tr class="bg-white border-b">
                                <td class=" py-4 border-r w-28 px-3"><img src="img/collier2.png" alt="" class=""/></td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap border-r">
                                    <p class="font-bold">Colliers en acier</p>
                                    <p>x2</p>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    56,00€
                                </td>
                                {{-- <td colspan="2" class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap text-center border-r">
                                  Larry the Bird
                                </td> --}}
                              </tr>
                              <tr class="bg-white border-b">
                                <td class=" py-4 border-r w-28 px-3">Sous-total</td>
                                <td colspan="2" class="text-sm text-secondary-dark font-bold px-6 py-4 whitespace-nowrap text-center border-r">
                                    140,00€
                                </td>
                              </tr>
                              <tr class="bg-white border-b">
                                <td class=" py-4 border-r w-28 px-3">Total</td>
                                <td colspan="2" class="text-sm text-secondary-dark font-bold px-6 py-4 whitespace-nowrap text-center border-r">
                                    140,00€
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
                {{-- type of payment --}}
                <h2 class="font-bold mb-3">Mode de paiement</h2>
                <div class="">
                    <div class="flex items-center gap-2 mb-3">
                        <input type="radio" name="radio-1" class="radio"  />
                        <span class="font-bold">Paypal</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <input type="radio" name="radio-1" class="radio"/>
                        <span class="font-bold">Carte bancaire</span>
                    </div>
                </div>
                <a href="" class="btn bg-primary-dark mt-10 border-none">
                    Valider la commande
                </a>
            </div>
        </div>
    </main>
</div>
