<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link @if(request()->is('admin')) active @endif" aria-current="page" href="{{ route('admin.index') }}">
              <span data-feather="home" class="align-text-bottom"></span>
              Главная
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('category.*')) active @endif" href="{{ route('category.index') }}">
              <span data-feather="file" class="align-text-bottom"></span>
              Категории новостей
            </a>
          </li>
      </div>
    </nav>