  <header class="d-flex flex-wrap  position-relative align-items-center justify-content-center justify-content-md-between py-3 mb-3 border-bottom">

      @guest
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark-dash" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M5.5 6.5A.5.5 0 0 1 6 6h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
          <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
        </svg>
        <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg> -->
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('home') }}" class="nav-link px-2 link-dark">Главная</a></li>
        <li><a href="{{ route('about') }}" class="nav-link px-2 link-dark">Про нас</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a class="btn btn-outline-primary me-2" href="{{ route('user.login') }}">Войти</a>
        <a class="btn btn-primary" href="{{ route('user.registration') }}">Зарегистрироваться</a>
      </div>
      @endguest

      @auth
      <a href="{{ route('user.private') }}" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bookmark-dash" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M5.5 6.5A.5.5 0 0 1 6 6h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z"/>
          <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
        </svg>
        <!-- <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg> -->
      </a>

      <h5 class="d-flex align-items-center col-md-3  mb-2 mb-md-0" style="position:absolute; left: 3%;" >Добро пожаловать, {{ auth()->user()->name }}</h5>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="{{ route('user.private') }}" class="nav-link px-2 link-dark">Главная</a></li>
        <li><a href="{{ route('about') }}" class="nav-link px-2 link-dark">Про нас</a></li>
        <li><a href="{{ route('user.add_article') }}" class="nav-link px-2 link-dark">Добавить статью</a></li>

      </ul>

      <div class="col-md-3 text-end">
        <a class="btn btn-outline-dark me-2" href="{{ route('user.my_articles') }}">Мои статьи</a>
        <a class="btn btn-outline-primary me-2" href="{{ route('user.logout') }}">Выйти</a>
      </div>
      @endauth
  </header>

  <div class="nav-scroller py-1 mb-2 mx-4">
    <nav class="nav d-flex justify-content-between">
      @foreach ($categories as $category)
      <a class="p-2 link-secondary" href="{{ route('category', [$category->code, $category->id]) }}">{{ $category->title }}</a>
      @endforeach
    </nav>
  </div>
