
<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
      <h4>Recent Posts</h4>
      <p>
        <ol class="list-unstyled" >
          
            @foreach ($allpost as $post)
           <li>
             <a href="/posts/{{$post->id}}">
             {{$post->title}}
             
          </li></a>
          @endforeach
        </ol>
      </p>
    </div>
    <div class="sidebar-module">
      <h4>Archives</h4>
      <ol class="list-unstyled">
        
          @foreach ($archives as $stats)
            <li>
              <a href="/?month={{$stats['month']}}&year={{$stats['year']}}">{{$stats['month'].' '.$stats['year']}}</a>
            </li>
          @endforeach
      </ol>
    </div>
    <div class="sidebar-module">
      <h4>Elsewhere</h4>
      <ol class="list-unstyled">
        <li><a href="#">GitHub</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
      </ol>
    </div>
  </div><!-- /.blog-sidebar -->
