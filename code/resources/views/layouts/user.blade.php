
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Template · Bootstrap v5.2</title>
  @include('user.inc.styles')
</head>
<body>   
  <div class="container">
    <x-blog-header></x-blog-header>
    <x-blog-scroller></x-blog-scroller>
  </div>
  <main class="container">
    <div style="@if(request()->routeIs('page.news.show')) display: none; @endif" class="p-4 p-md-5 mb-4 rounded text-bg-dark">
      <div class="col-md-6 px-0">
        @yield('main_header')
      </div>
    </div>
    <div class="row mb-2">
      @yield('content')
    </div>
  </main>
  <x-blog-footer></x-blog-footer>
</body>
</html>
