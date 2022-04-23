<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="{{ url('/home') }}" class="w3-bar-item w3-button">Breakfast</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
    <a href="{{ url('/about') }}" class="w3-bar-item w3-button">About</a>
      <a href="{{ url('/menu') }}" class="w3-bar-item w3-button">Menu</a>
      <a href="{{ url('/contact') }}" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>