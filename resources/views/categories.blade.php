<x-layout>
    <div class="container py-md-5 container--narrow">
        <h2 class="text-center mb-4">{{ $title }}</h2>
        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layout>