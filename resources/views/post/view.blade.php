<x-app-layout>
    <div class="flex">
        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                    <img src="{{$post->getThumbnail()}}" alt=" {{$post->title}}">
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <div class="flex gap-4">
                        @foreach($post->categories as $category)
                            <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4">
                                {{$category->title}}
                            </a>
                        @endforeach
                    </div>
                    <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                        {{$post->title}}
                    </h1>
                    <p  class="text-sm pb-8">
                        By <a href="#" class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on
                        {{$post->getFormattedDate()}}
                    </p>
                    <div>
                        {!! $post->body !!}
                    </div>
                </div>
            </article>

            <livewire:comments :post="$post"/>

        </section>

        <x-sidebar />

    </div>
</x-app-layout>
