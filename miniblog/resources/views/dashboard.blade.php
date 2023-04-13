<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{-- {{ __("You're logged in!") }} --}}

                    <div class="container mx-auto px-4">
                        {{-- <table class="table-auto border-collapse w-full"> 
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">Title</th>
                                    <th class="px-4 py-2 text-left">Post</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr class="border-b">
                                    <td class="px-4 py-2">
                                    </td>
                                    <td class="px-4 py-2">
                                        
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table> --}}
                        <table class="w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                    <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">Title</th>
                                    <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">Post</th>
                                    <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-gray-50 divide-y divide-gray-200">
                                @foreach ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $post->user->name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $post->title }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ $post->body }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <a href="{{url('/post/edit',$post->id)}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">
                                            Edit
                                        </a>
                                        <a href="{{url('/post/delete',$post->id)}}" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                              
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
                    @if (session()->has('status') )
                    <div class="mt-5 shadow bg-purple-500 text-white font-bold py-2 px-4 rounded">{{session('status')}}</div>
                @endif


        </div>
    </div>



</x-app-layout>
