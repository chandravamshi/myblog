<div class="blog-masthead bg-light">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="#">Home</a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            <a class="nav-link" href="#"></a>
            @if (Auth::check())
            <a class="nav-link ml-auto" href="#">{{Auth::user()->name}}</a>
            @endif
        </nav>
    </div>
</div>
