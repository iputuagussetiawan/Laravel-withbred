<x-layout :doctitle="$post->title">
    <div class="container py-md-5 container--narrow">
      <div class="d-flex justify-content-between">
        <h2>{{ $post->title }}</h2>
        @can('update',$post)
        <span class="pt-2">
          <a href="/post/{{ $post->id }}/edit" class=" mr-2 btn btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Edit">Edit</a>
          <form class="delete-post-form d-inline" action="/post/{{$post->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="delete-post-button btn btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Delete">Delete</button>
          </form>
        </span>
        @endcan
      </div>
      <p class="text-muted small mb-4">
        <a href="/post/{{ $post->id }}"><img class="avatar-tiny" src="{{auth()->user()->avatar}}" /></a>
        Posted by <a href="/profile/{{ $post->user->username}}">{{$post->user->username}}</a> on {{ $post->created_at->format('n/j/Y') }}
      </p>
      <div class="body-content">
        {!!$post->body!!}
      </div>
    </div>
</x-layout>
