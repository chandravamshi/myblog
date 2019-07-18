<div class="blog-post">
<a href="/posts/{{$post->id}}">
        <h2 class="blog-post-title">{{$post->title}}</h2>  </a>
        {{$post->user->name}}&nbsp; on {{$post->created_at->toFormattedDateString()}}
        <p class="blog-post-meta"></p>
           <!--by <a href="#">Mark</a> --></p>
  
        <p>{{ $post->body}}</p>
        
</div><!-- /.blog-post -->