<nav>
  <a href="{{ url('/') }}" class="logo">MSLab</a>
  <button type="button" class="nav-toggle" onclick="toggleNav(this)" aria-expanded="false" aria-controls="nav-links" aria-label="Toggle menu">
    <span></span><span></span><span></span>
  </button>
  <div class="nav-links" id="nav-links">
    <a href="{{ url('/') }}#research">Research</a>
    <a href="{{ url('/') }}#work">Work</a>
    <a href="{{ route('publications') }}">Publications</a>
    <a href="{{ url('/') }}#lab">Lab</a>
    <a href="{{ url('/') }}#contact" class="btn-pill">Contact</a>
  </div>
</nav>
