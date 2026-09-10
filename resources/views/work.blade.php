<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Work — Dr. Mohammad Shidujaman</title>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=newsreader:400,500,600,700|inter:400,500,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" href="{{ asset('css/lab.css') }}">
</head>
<body>

<x-menu />

<section id="work-page">
  <div class="container">
    <a href="{{ url('/') }}" class="back-link">← Back to MSLab</a>

    <span class="eyebrow">Current Work</span>
    <h2>Active projects at IUB.</h2>
    <p class="lead">A closer look at the robotics, AI, and HCI projects currently running at MSLab.</p>

    <div class="work-detail-list">
      <article class="work-detail-item">
        <div class="work-detail-photo">
          <img src="{{ asset('img/index1.avif') }}" alt="Explainable AI (XAI) for Trustworthy AI" loading="lazy" onerror="imgFallback(this)">
          <div class="placeholder" style="display:none;"><span>public/img/work-xai.jpg</span></div>
        </div>
        <div class="work-detail-body">
          <h3>Explainable AI (XAI) for Trustworthy AI</h3>
          <p>A community-empowered AI system to detect hate speech and mitigate racial bias in social media, with Saadia Binte Alam, PhD, and Ishtiaque Ahmed, PhD.</p>
        </div>
      </article>

      <article class="work-detail-item work-detail-item--reverse">
        <div class="work-detail-photo">
          <img src="{{ asset('img/robot3.jpg') }}" alt="WellBot" loading="lazy" onerror="imgFallback(this)">
          <div class="placeholder" style="display:none;"><span>public/img/work-wellbot.jpg</span></div>
        </div>
        <div class="work-detail-body">
          <h3>WellBot</h3>
          <p>An empathetic companion robot combining AI-enhanced healthcare support with interactive learning.</p>
        </div>
      </article>

      <article class="work-detail-item">
        <div class="work-detail-photo">
          <img src="{{ asset('img/ka.avif') }}" alt="RoboInsight" loading="lazy" onerror="imgFallback(this)">
          <div class="placeholder" style="display:none;"><span>public/img/work-roboinsight.jpg</span></div>
        </div>
        <div class="work-detail-body">
          <h3>RoboInsight</h3>
          <p>An affordable library-guidance robot integrating natural language processing, image processing, and interactive engagement.</p>
        </div>
      </article>

      <article class="work-detail-item work-detail-item--reverse">
        <div class="work-detail-photo">
          <img src="{{ asset('img/robot.avif') }}" alt="TINY" loading="lazy" onerror="imgFallback(this)">
          <div class="placeholder" style="display:none;"><span>public/img/work-tiny.jpg</span></div>
        </div>
        <div class="work-detail-body">
          <h3>TINY</h3>
          <p>A low-cost, voice-interactive children's educational robot built with natural language processing — an ongoing undergraduate thesis project.</p>
        </div>
      </article>

      <article class="work-detail-item">
        <div class="work-detail-photo">
          <img src="{{ asset('img/hym.jpg') }}" alt="HealYourMind" loading="lazy" onerror="imgFallback(this)">
          <div class="placeholder" style="display:none;"><span>public/img/work-healyourmind.jpg</span></div>
        </div>
        <div class="work-detail-body">
          <h3>HealYourMind</h3>
          <p>A mental health platform built by university students, led by Kazi Mayesha Mehzabin, Graduate Research Assistant.</p>
        </div>
      </article>
    </div>

    <div class="work-cta">
      <a href="https://shidujaman.com/" target="_blank" class="btn btn-primary">More Projects on shidujaman.com ↗</a>
    </div>
  </div>
</section>

<footer>© 2026 MSLab, Independent University, Bangladesh. All rights reserved.</footer>

<script src="{{ asset('js/welcome.js') }}" defer></script>

</body>
</html>
