<x-layout>
    <div class="container py-md-5 container--narrow">
        <h2 class="text-center mb-4">All Post</h2>
        @foreach($posts as $post)
            <x-post :post="$post"/>
        @endforeach
    </div>
</x-layout>