<div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text"><small class="text-muted">on {{$post->created_at->format('n/j/Y')}}</small></p>
        <img width="30" height="30" class="avatar-tiny rounded" src="{{$post->user->avatar}}" />
       
        @if(!isset($hideAuthor))
            <a href="/posts?author={{$post->author->username}}">by {{$post->author->username}}</a>
            
        @endif
        <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
        <a href="/posts?category={{ $post->category->slug }}" >{{ $post->category->name }}</a> | 
        <a href="/post/{{$post->slug}}">Read More..</a>
    </div>
</div>