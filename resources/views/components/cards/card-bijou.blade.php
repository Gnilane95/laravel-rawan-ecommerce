@props([
    'url_img',
    'category',
    'name',
    'regular_price',
    'sale'
])
<div class="shadow-xl border rounded-xl sm:mb-10 lg:mb-0 flex flex-col items-center">
  <img src="{{ $url_img }}" alt="{{ $name }}" class="w-44 h-44 mx-3 mt-3 shadow-md rounded-xl">
  <div class="p-5 min-h-[100px]">
      <p class="font-bold text-xs text-gray-300 pb-1">{{ $category }}</p>
      <p class="font-bold text-xl pb-3">{{ $name }}</p>
      <div class="flex justify-between items-center">
          <p class="font-semibold text-primary-dark">{{ $regular_price }}€</p>
          <p class="font-semibold text-sm text-gray-500 line-through">{{ $sale }}€</p>
      </div>
      <button class="btn sm:w-44 bg-secondary-dark border-none mt-3 py-3 px-16 rounded-lg shadow-lg text-center font-bold">
          Voir 
      </button>
  </div>
</div>