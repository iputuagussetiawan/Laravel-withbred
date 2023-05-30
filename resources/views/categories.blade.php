<x-layout>
    <div class="container py-md-5 container--narrow">
        <h2 class="text-center mb-4">{{ $title }}</h2>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <div class="card bg-dark text-white">
                        <img src="{{ asset('images/blank.jpg') }}" class="card-img" alt="{{ $category->name }}">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{ $category->name }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <ul>
            @foreach ($categories as $category)
                <li>
                    <a href="/posts?category={{ $category->slug }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>
