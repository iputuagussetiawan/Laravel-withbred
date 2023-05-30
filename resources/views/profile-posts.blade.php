<x-profile :sharedData="$sharedData" doctitle="{{ $sharedData['username'] }}'s Profile">
    <div class="list-group">
        @if ($posts->count())
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-3">
                        <x-cards.post :post="$post" />
                    </div>
                @endforeach
            </div>
        @else
            <h2>No Post Found</h2>
        @endif
    </div>
</x-profile>
