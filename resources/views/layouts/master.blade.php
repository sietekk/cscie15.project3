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
        @include('layouts.partials._content')
      </div>
    </div>
    <!-- Footer Section -->
    @include('layouts.partials._footer')
  </body>
</html>
