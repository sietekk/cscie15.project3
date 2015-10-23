<!DOCTYPE html>
<html lang="en">
  <!-- Head Section -->
  @include('layouts.partials._head')
  <body>
    <div class="container-fluid container">
      <!-- Navbar Section -->
      @include('layouts.partials._navbar')
      <!-- Page Header -->
      @include('layouts.partials._header')
      <!-- Page Content -->
      <div id="main-container">
        @yield('main-content')
      </div>
    </div>
  </body>
  <!-- Footer Section -->
  @include('layouts.partials._footer')
</html>
