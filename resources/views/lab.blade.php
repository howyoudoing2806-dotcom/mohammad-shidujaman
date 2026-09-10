<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>The Lab — MSLab</title>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=newsreader:400,500,600,700|inter:400,500,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" href="{{ asset('css/lab.css') }}">
</head>
<body>

<x-menu />

<section id="lab-page">
  <div class="container">
    <a href="{{ url('/') }}" class="back-link">← Back to MSLab</a>

    <span class="eyebrow">The Lab</span>
    <h2>MSLab team.</h2>

    <div class="lab-supervisor">
      <div class="professor-photo">
        <img src="{{ asset('img/sir.png') }}" alt="Dr. Mohammad Shidujaman" loading="lazy" onerror="imgFallback(this)">
        <div class="placeholder" style="display:none;">
          <span>public/img/professor.jpg</span>
        </div>
      </div>
      <div class="lab-supervisor-info">
        <h3>Dr. Mohammad Shidujaman</h3>
        <p class="role">Supervisor · Assistant Professor, Computer Science &amp; Engineering, IUB</p>
      </div>
    </div>

    <span class="lab-team-heading">Team</span>
    <div class="team-grid">
      <div class="team-card">
        <div class="team-photo"><img src="{{ asset('img/student2.png') }}" alt="PhD Researcher" loading="lazy" onerror="imgFallback(this)"><div class="placeholder" style="display:none;"><span>public/img/team-1.jpg</span></div></div>
        <span class="team-role">PhD Researcher</span>
      </div>
      <div class="team-card">
        <div class="team-photo"><img src="{{ asset('img/student31.png') }}" alt="Graduate Research Assistant" loading="lazy" onerror="imgFallback(this)"><div class="placeholder" style="display:none;"><span>public/img/team-2.jpg</span></div></div>
        <span class="team-role">Graduate Research Assistant</span>
      </div>
      <div class="team-card">
        <div class="team-photo"><img src="{{ asset('img/test.png') }}" alt="Undergraduate Researcher" loading="lazy" onerror="imgFallback(this)"><div class="placeholder" style="display:none;"><span>public/img/team-3.jpg</span></div></div>
        <span class="team-role">Undergraduate Researcher</span>
      </div>
      <div class="team-card">
        <div class="team-photo team-photo--placeholder"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"></path><path d="M5 20c0-3.9 3.13-7 7-7s7 3.1 7 7"></path></svg></div>
        <span class="team-role">Research Assistant</span>
      </div>
    </div>
  </div>
</section>

<footer>© 2026 MSLab, Independent University, Bangladesh. All rights reserved.</footer>

<script src="{{ asset('js/welcome.js') }}" defer></script>

</body>
</html>
