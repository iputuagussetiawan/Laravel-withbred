<x-layout>
    <div class="container py-md-5 container--narrow">
        <h2 class="text-center mb-4">{{ $title }}</h2>
        @if ($posts->count())
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-3">
                        <x-cards.post2 :post="$post" />
                    </div>
                @endforeach
            </div>
        @else
            <h2>No Post Found</h2>
        @endif
    </div>
</x-layout>
