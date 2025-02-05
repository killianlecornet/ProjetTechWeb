

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="http://127.0.0.1:8000">🛍️ E-Commerce</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
            @if(auth()->check())
                <a class="btn btn-sm btn-outline-secondary" href="signout">Sign out</a>
            @else
                <a class="btn btn-sm btn-outline-secondary" href="http://127.0.0.1:8000/connexion">Sign up</a>
            @endif
        
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="http://127.0.0.1:8000/posts">POST</a>
      <a class="p-2 text-muted" href="http://127.0.0.1:8000/index">Users</a>
      <a class="p-2 text-muted" href="http://127.0.0.1:8000/email">Mails</a>
      <a class="p-2 text-muted" href="{{ route('cart.index') }}">Panier <span class="badge badge-pill badge-dark">{{ Cart::count() }}</span></a>
      <a class="p-2 text-muted" href="#">A la Une</a>

    </nav>
  </div>