<x-layout>
    <div class="container py-md-5 container--narrow">
        <h2 class="text-center mb-4">{{ $title }}</h2>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search" id="search" value="{{ request('search') }}">
                        <button class="btn btn-danger" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        @if($posts->count())
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-3">
                    <x-cards.post2 :post="$post"/>
                </div>               
            @endforeach
        </div>
        @else
        <h2>No Post Found</h2>
        @endif
        {{ $posts->links() }}
    </div>
</x-layout>