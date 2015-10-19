<!DOCTYPE html>
<html lang="en">
  <!-- Head Section -->
  @include('layouts.partials._head')
  <body>
    <div class="container-fluid container">
      <!-- Navbar Section -->
      @include('layouts.partials._navbar')
      <!-- Page Header -->
      @yield('header')
      <!-- Page Content -->
      <div id="main-container">
        @yield('content')
      </div>
    </div>
    <!-- Footer Section -->
    @include('layouts.partials._footer')
  </body>
</html>
