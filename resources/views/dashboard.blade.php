<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800  dark:text-gray-100 leading-tight">
            {{ __('Irányítópult') }}
        </h2>
    </x-slot>

<!-- header -->
    <div class="py- m-6">
        <div class="">
            <div class="w-full m-2">
                @hasanyrole('writer|admin')
                <a href="#" class="m-2 p-2 bg-green-400 rounded">
                    Új poszt
                </a>
                @endhasanyrole
            </div>
  <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
          <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Id</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">Title</th>
            
            <th scope="col" class="relative px-6 py-3">Edit</th>
          </tr>
        </thead>
        <tbody class="bg-white dark:bg-gray-700 divide-y divide-gray-200">
          <tr></tr>
          @foreach (App\Models\Post::all() as $post)
         
          <tr>
            <td class="px-6 py-4 whitespace-nowrap">{{ $post->id}}</td>
            <td class="px-6 py-4 whitespace-nowrap">{{ $post->title}}</td>
            <td class="px-6 py-4 text-right text-sm">
                <a href="#" class="m-2 p-2 bg-blue-400 rounded">Szerkesztés</a>
                <a href="#" class="m-2 p-2 bg-yellow-400 rounded">Közzététel</a>
            </td>
          </tr>
          @endforeach
          <!-- More items... -->
        </tbody>
      </table>
      <div class="m-2 p-2">Megyeri Márk</div>
    </div>
  </div>
</div>

        <!-- <div class=" ml-4 pm-2">
            <div class="bg-white dark:bg-pink-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-gray-300">
                    {{ __("Bejelentkezve") }}
                </div>
            </div>
        </div>
    </div> -->
</x-app-layout>
