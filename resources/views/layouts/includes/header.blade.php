<header class="p-3 bg-dark text-white">
    <div class="row">
        <div class="col">
            <a class="text-light text-decoration-none" href="{{ url('/') }}">
                <h3>Blog</h3>
            </a>
        </div>
        <div class="col">
            <div class="d-flex justify-content-center gap-3">
                <a class="text-light text-decoration-none" href="{{ url('/') }}">Home</a>
                <a class="text-light text-decoration-none" href="">About</a>
                <a class="text-light text-decoration-none" href="{{ route('post.contact') }}">Contact</a>
            </div>
        </div>
    </div>
</header>
