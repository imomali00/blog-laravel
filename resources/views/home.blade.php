<?php
    /** @var $posts \Illuminate\Pagination\LengthAwarePaginator */
?>

<x-app-layout>
    <div class="flex">
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            @foreach($posts as $post)
                <x-post-item :post="$post"></x-post-item>
            @endforeach

            {{ $posts->onEachSide(1)->links() }}
            <!-- Pagination -->

        </section>
        <!-- Sidebar Section -->
        <x-sidebar />
    </div>

</x-app-layout>

