<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>MSLab — Dr. Mohammad Shidujaman</title>
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=newsreader:400,500,600,700|inter:400,500,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<link rel="stylesheet" href="{{ asset('css/lab.css') }}">
</head>
<body>

<x-menu />

<section id="pillars">
  <div class="container pillars-grid">
    <div class="pillars-content">
    <div class="pillars-brand">
      <span class="pillars-brand-mark">MSLab</span>
      <span class="pillars-brand-tag">Design &amp; Robotics Lab</span>
    </div>
    <div class="pillars-list">
      <div class="pillar-row">
        <div class="pillar-num-block">
          <span class="pillar-label">HRI</span>
          <div class="pillar-num-icon">
            <span class="pillar-number">01</span>
            <svg class="pillar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <circle cx="6" cy="12" r="3"></circle>
              <circle cx="18" cy="12" r="3"></circle>
              <line x1="9" y1="12" x2="15" y2="12"></line>
            </svg>
          </div>
        </div>
        <p class="pillar-text">Designing robots that read social cues and respond with warmth — from greeting gestures to companion behaviors — so people build trust and comfort around machines that share their space.</p>
      </div>

      <div class="pillar-row pillar-row--indent">
        <div class="pillar-num-block">
          <span class="pillar-label">Robot Design</span>
          <div class="pillar-num-icon">
            <span class="pillar-number">02</span>
            <svg class="pillar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <rect x="5" y="8" width="14" height="11" rx="3"></rect>
              <line x1="12" y1="8" x2="12" y2="4"></line>
              <circle cx="12" cy="3" r="1.1" fill="currentColor" stroke="none"></circle>
              <circle cx="9" cy="13.5" r="1.2" fill="currentColor" stroke="none"></circle>
              <circle cx="15" cy="13.5" r="1.2" fill="currentColor" stroke="none"></circle>
              <line x1="8.5" y1="17" x2="15.5" y2="17"></line>
            </svg>
          </div>
        </div>
        <p class="pillar-text">Translating expressive interaction techniques into physical and behavioral form — shaping how a robot moves, looks, and communicates to feel approachable and emotionally legible.</p>
      </div>

      <div class="pillar-row">
        <div class="pillar-num-block">
          <span class="pillar-label">HCI</span>
          <div class="pillar-num-icon">
            <span class="pillar-number">03</span>
            <svg class="pillar-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <rect x="3" y="4" width="18" height="12" rx="2"></rect>
              <line x1="8" y1="20" x2="16" y2="20"></line>
              <line x1="12" y1="16" x2="12" y2="20"></line>
              <path d="M9.5 8.2 14 10.6l-1.7.5 1 1.7-1 .6-1-1.7-1.6 1.3z" fill="currentColor" stroke="none"></path>
            </svg>
          </div>
        </div>
        <p class="pillar-text">Building interfaces around real cognitive and cultural context, so technology adapts to how people actually think, learn, and work — not the other way around.</p>
      </div>
    </div>
    </div>

    <div class="pillars-photo-wrap">
      <span class="pillars-photo-circle" aria-hidden="true"></span>
      <div class="pillars-photo">
        <img class="pillars-photo-img--default" src="{{ asset('img/robImg11.png') }}" alt="MSLab" loading="lazy" onerror="imgFallback(this)">
        <img class="pillars-photo-img--hover" src="{{ asset('img/robImg21.png') }}" alt="" loading="lazy" onerror="this.remove()">
        <div class="placeholder" style="display:none;">
          <span>public/img/robImg11.png</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="hero" id="home">
  <div class="hero-blob"></div>
  <div class="container hero-grid">
    <div>
      <span class="eyebrow">Assistant Professor · CSE, IUB</span>
      <h1>Dr. Mohammad<br>Shidujaman</h1>
      <p>A researcher working across human–robot interaction, human–computer interaction, and AI ethics — with a PhD in Design from Tsinghua University, where his doctoral work explored expressive interaction techniques for social robots.</p>
      <div class="hero-actions">
        <button class="btn btn-primary" onclick="openModal()">Read More</button>
        <a href="#research" class="btn btn-secondary">Research Interests</a>
      </div>
    </div>
    <div class="hero-photo">
      <img src="{{ asset('img/profile.png') }}" alt="Headshot of Dr. Mohammad Shidujaman" onerror="imgFallback(this)">
      <div class="placeholder" style="display:none;">
        <span>public/img/profile.png</span>
        <span>Headshot of Dr. Shidujaman</span>
      </div>
    </div>
  </div>
</section>

<section id="research">
  <div class="container">
    <span class="eyebrow">Research Focus</span>
    <h2>Where robotics, interaction design, and AI ethics meet.</h2>
    <div class="pills">
      <span class="pill">Human–Robot Interaction &amp; Social Robotics</span>
      <span class="pill">Human–Computer / Human–Machine Interaction</span>
      <span class="pill">AI Ethics and Policy</span>
      <span class="pill">AI-Generated Creativity</span>
      <span class="pill">Cross-Cultural Design Research</span>
      <span class="pill">Cognitive Psychology</span>
      <span class="pill">User-Centered &amp; Human-Centric Computing</span>
      <span class="pill">Assistive Technology in Education &amp; Healthcare</span>
      <span class="pill">Anthropomorphism &amp; New Interaction Paradigms</span>
      <span class="pill">Robotics and AI for Society</span>
    </div>
  </div>
</section>

<section id="work" class="section-alt">
  <div class="container">
    <span class="eyebrow">Current Work</span>
    <h2>Active projects at IUB.</h2>
    <div class="gallery-grid">
      <div class="gallery-item" tabindex="0">
        <img src="{{ asset('img/index1.avif') }}" alt="Explainable AI (XAI) for Trustworthy AI" loading="lazy" onerror="imgFallback(this)">
        <div class="placeholder" style="display:none;"><span>public/img/work-xai.jpg</span></div>
        <div class="gallery-overlay">
          <h3>Explainable AI (XAI) for Trustworthy AI</h3>
          <p>A community-empowered AI system to detect hate speech and mitigate racial bias in social media, with Saadia Binte Alam, PhD, and Ishtiaque Ahmed, PhD.</p>
        </div>
      </div>
      <div class="gallery-item" tabindex="0">
        <img src="{{ asset('img/robot3.jpg') }}" alt="WellBot" loading="lazy" onerror="imgFallback(this)">
        <div class="placeholder" style="display:none;"><span>public/img/work-wellbot.jpg</span></div>
        <div class="gallery-overlay">
          <h3>WellBot</h3>
          <p>An empathetic companion robot combining AI-enhanced healthcare support with interactive learning.</p>
        </div>
      </div>
      <div class="gallery-item" tabindex="0">
        <img src="{{ asset('img/ka.avif') }}" alt="RoboInsight" loading="lazy" onerror="imgFallback(this)">
        <div class="placeholder" style="display:none;"><span>public/img/work-roboinsight.jpg</span></div>
        <div class="gallery-overlay">
          <h3>RoboInsight</h3>
          <p>An affordable library-guidance robot integrating natural language processing, image processing, and interactive engagement.</p>
        </div>
      </div>
      <div class="gallery-item" tabindex="0">
        <img src="{{ asset('img/robot.avif') }}" alt="TINY" loading="lazy" onerror="imgFallback(this)">
        <div class="placeholder" style="display:none;"><span>public/img/work-tiny.jpg</span></div>
        <div class="gallery-overlay">
          <h3>TINY</h3>
          <p>A low-cost, voice-interactive children's educational robot built with natural language processing — an ongoing undergraduate thesis project.</p>
        </div>
      </div>
      <div class="gallery-item" tabindex="0">
        <img src="{{ asset('img/hym.jpg') }}" alt="HealYourMind" loading="lazy" onerror="imgFallback(this)">
        <div class="placeholder" style="display:none;"><span>public/img/work-healyourmind.jpg</span></div>
        <div class="gallery-overlay">
          <h3>HealYourMind</h3>
          <p>A mental health platform built by university students, led by Kazi Mayesha Mehzabin, Graduate Research Assistant.</p>
        </div>
      </div>
    </div>

    <div class="work-cta">
      <a href="{{ route('work') }}" class="btn btn-secondary">More Projects</a>
    </div>
  </div>
</section>

<section id="publications">
  <div class="container">
    <div class="pub-head">
      <div>
        <span class="eyebrow">Publications</span>
        <h2>Selected work.</h2>
      </div>
      <span class="pub-meta">~752 citations (approx.) · <a href="https://scholar.google.com/citations?user=4U9RcZAAAAAJ" target="_blank">Google Scholar</a></span>
    </div>

    <div class="pub"><p>Bo Wang, Zhenlin Gao, Mohammad Shidujaman. "Meaningful Place: A Phenomenological Approach to the Design of Spatial Experience in Open-world Games."</p><p class="venue">Games and Culture, 2023</p></div>
    <div class="pub"><p>Zerin Tasnim, Farhad Ahmed, Zarin Tasnim, Mohammad Shidujaman, Salah Uddin Ahmed. "PAINTIQUE: Design and Development of Interaction Model of a Line Following Spray-Painting Robot."</p><p class="venue">Culture and Computing, HCII 2023, Springer</p></div>
    <div class="pub"><p>Ayesha Amin, Mohammad Shidujaman, Bo Wang. "Improving HCI on Cognition for Children with Intelligent UI/UX."</p><p class="venue">Culture and Computing, HCII 2023, Springer</p></div>
    <div class="pub"><p>Rebekah Rousi, Sini Kolari, Mohammad Shidujaman. "Beauty in Interaction — A Framework for Social Robot Aesthetics (Pandemic Edition)."</p><p class="venue">Robotics for Pandemics, Elsevier, 2021</p></div>

    <div class="pub-links">
      <a href="{{ route('publications') }}" class="pub-more-link">Show more publications →</a>
      <a href="https://scholar.google.com/citations?user=4U9RcZAAAAAJ" target="_blank" class="pub-more-link">View full publication list on Google Scholar →</a>
    </div>
  </div>
</section>

<section class="lab-section" id="lab">
  <div class="lab-blob"></div>
  <div class="container">
    <span class="eyebrow">The Lab</span>
    <h2>MSLab, led by Dr. Shidujaman.</h2>
    <p class="lead">A small team working across robotics, interaction design, and AI ethics.</p>

    <div class="professor-photo">
      <img src="{{ asset('img/sir.png') }}" alt="Dr. Mohammad Shidujaman" loading="lazy" onerror="imgFallback(this)">
      <div class="placeholder" style="display:none;">
        <span>public/img/professor.jpg</span>
      </div>
    </div>

    <div class="slider-row">
      <button class="slide-btn" onclick="slidePrev()" aria-label="Previous">‹</button>
      <div class="track-viewport">
        <div class="track" id="team-track">
          <div class="team-item"><div class="team-photo"><img src="{{ asset('img/student2.png') }}" alt="PhD Researcher" loading="lazy" onerror="imgFallback(this)"><div class="placeholder" style="display:none;"><span>public/img/team-1.jpg</span></div></div><span class="team-role">PhD Researcher</span></div>
          <div class="team-item"><div class="team-photo"><img src="{{ asset('img/student31.png') }}" alt="Graduate Research Assistant" loading="lazy" onerror="imgFallback(this)"><div class="placeholder" style="display:none;"><span>public/img/team-2.jpg</span></div></div><span class="team-role">Graduate Research Assistant</span></div>
          <div class="team-item"><div class="team-photo"><img src="{{ asset('img/test.png') }}" alt="Undergraduate Researcher" loading="lazy" onerror="imgFallback(this)"><div class="placeholder" style="display:none;"><span>public/img/team-3.jpg</span></div></div><span class="team-role">Undergraduate Researcher</span></div>
          <div class="team-item"><div class="team-photo team-photo--placeholder"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Z"></path><path d="M5 20c0-3.9 3.13-7 7-7s7 3.1 7 7"></path></svg></div><span class="team-role">Research Assistant</span></div>
        </div>
      </div>
      <button class="slide-btn" onclick="slideNext()" aria-label="Next">›</button>
    </div>

    <div class="lab-cta">
      <a href="{{ route('lab') }}" class="btn btn-secondary">View Lab →</a>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container contact-grid">
    <div>
      <span class="eyebrow">Contact</span>
      <h2>Get in touch.</h2>
      <p>Room C7013, IUB Campus, Plot 16, Aftab Uddin Ahmed Road, Baridhara, Dhaka 1229<br>shidujaman@iub.edu.bd</p>
      <a href="mailto:shidujaman@iub.edu.bd" class="btn btn-primary">Send an Email</a>
    </div>
    <div class="contact-links">
      <a href="https://shidujaman.com/" target="_blank">Personal Website ↗</a>
      <a href="https://scholar.google.com/citations?user=4U9RcZAAAAAJ" target="_blank">Google Scholar ↗</a>
      <a href="https://orcid.org/0000-0002-7906-2508" target="_blank">ORCID ↗</a>
      <a href="https://www.researchgate.net/profile/Mohammad-Shidujaman" target="_blank">ResearchGate ↗</a>
      <a href="https://hk.linkedin.com/in/mohammad-shidujaman-phd-104a2848" target="_blank">LinkedIn ↗</a>
    </div>
  </div>
</section>

<footer>© 2026 MSLab, Independent University, Bangladesh. All rights reserved.</footer>

<div class="modal-overlay" id="modal" onclick="if(event.target===this)closeModal()">
  <div class="modal-panel">
    <button class="modal-close" onclick="closeModal()" aria-label="Close">×</button>
    <div class="modal-grid">
      <div class="modal-photo-wrap">
        <div class="modal-photo">
          <img src="{{ asset('img/image.jpg') }}" alt="Dr. Mohammad Shidujaman" loading="lazy" onerror="imgFallback(this)">
          <div class="placeholder" style="display:none;">
            <span>public/img/profile-large.jpg</span>
          </div>
        </div>

        <div class="modal-quickfacts">
          <h2>Dr. Mohammad Shidujaman</h2>
          <p class="role">Assistant Professor, Computer Science &amp; Engineering · Independent University, Bangladesh</p>

          <h3>Education</h3>
          <div class="list">
            <div><strong>PhD, Design</strong> — Tsinghua University, 2021</div>
            <div><strong>MSc, Electrical Engineering</strong> — National Taipei University, 2015</div>
            <div><strong>BSc</strong> — American International University-Bangladesh, 2012</div>
          </div>

          <h3>Appointments</h3>
          <div class="list">
            <div>2023–present — Assistant Professor, CSE, IUB</div>
            <div>2021–2023 — Assistant Professor, EEE, AIUB</div>
            <div>2017–2021 — Doctoral Researcher, MiLab &amp; Future Laboratory, Tsinghua University</div>
            <div>2013–2017 — Research Assistant, AIART Lab &amp; Tsinghua University</div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <h3>Background</h3>
        <p>Dr. Shidujaman is an Assistant Professor of Computer Science and Engineering at Independent University, Bangladesh (IUB), where he has taught since January 2023. He holds a PhD in Design from Tsinghua University, completed under Professor Haipeng Mi at the Media and Interaction Laboratory (MiLab), with doctoral work on expressive interaction design for social robots — techniques for building perceptual and emotional connection between humans and robots.</p>
        <p>His research spans human–robot interaction, human–computer interaction, and AI ethics, with recurring interests in social robotics, cross-cultural design, cognitive psychology, and AI-generated creativity. Before IUB, he was an Assistant Professor of Electrical and Electronic Engineering at American International University-Bangladesh (2021–2023).</p>
        <p>Outside academia, he has worked as an R&amp;D engineer at the autonomous-vehicle company iDriverplus and as an IT manager at Discovery Communications. He is active in international HRI/HCI conference organizing — including HCI International, ICSR, ICIPRoB, ARSO, and ICMIR.</p>

        <h3>Honors &amp; Recognition</h3>
        <div class="list">
          <div>2021 — Honorable Recognition, Highly Impactful Paper Award, ICIEV/ICIVPR, Japan</div>
          <div>2020 — Finalist, Robot Design Competition, ICSR, Colorado</div>
          <div>2019 — 2nd Prize, Best Project Award, ICCBC, Tsinghua University</div>
          <div>2015 — Fellowship Award, State Key Laboratory of Tribology, Tsinghua University</div>
          <div>2015 — MSc Best Student Award, National Taipei University</div>
        </div>

        <h3>Professional Service</h3>
        <p>Editorial Board Member, Archives of Advanced Engineering Science (2023–); Organizing Chair, ICMIR (2023, 2024); Program Board Member, HCI International; IEEE RAS Technical Committee on Cognitive Robotics (2017–present).</p>
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('js/welcome.js') }}" defer></script>

</body>
</html>
