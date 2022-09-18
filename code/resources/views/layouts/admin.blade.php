
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Template · Bootstrap v5.2</title>
    @include('admin.inc.styles')
  </head>
  <body>
    <x-top-nav></x-top-nav>
    <div class="container-fluid">
      <div class="row">
        <x-nav></x-nav>
        
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            @yield('content')
        </main>
      </div>
    </div>
    @include('admin.inc.scripts')
  </body>
</html>
