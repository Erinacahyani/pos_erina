<!DOCTYPE html>
<html lang="en">
<head>
    <!-- @include("layouts.components.head") -->
<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      @include("layouts.navbar")
      @include("layouts.sidebar")

      <!-- Main Content -->
      @include("layouts.content")
      
      <!-- @include("layouts.components.footer") -->
    </div>
    <!-- @include("layouts.components.modalDestroy") -->
  </div>
  <!-- @include("layouts.components.script") -->
</body>
</html>