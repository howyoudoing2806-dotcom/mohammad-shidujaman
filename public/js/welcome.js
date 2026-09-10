function imgFallback(img) {
  img.remove();
  img.parentElement.querySelector('.placeholder').style.display = 'flex';
}

function openModal() {
  document.getElementById('modal').classList.add('open');
  document.body.style.overflow = 'hidden';
}

function closeModal() {
  document.getElementById('modal').classList.remove('open');
  document.body.style.overflow = '';
}

function toggleNav(btn) {
  var links = document.getElementById('nav-links');
  var open = links.classList.toggle('is-open');
  btn.setAttribute('aria-expanded', open ? 'true' : 'false');
}

function closeNav() {
  var links = document.getElementById('nav-links');
  var toggle = document.querySelector('.nav-toggle');
  if (links) links.classList.remove('is-open');
  if (toggle) toggle.setAttribute('aria-expanded', 'false');
}

document.querySelectorAll('.nav-links a').forEach(function (a) {
  a.addEventListener('click', closeNav);
});

var slideOffset = 0;

function getSlideElements() {
  var track = document.getElementById('team-track');
  if (!track) return null;
  var viewport = track.parentElement;
  var prevBtn = document.querySelector('.slide-btn[aria-label="Previous"]');
  var nextBtn = document.querySelector('.slide-btn[aria-label="Next"]');
  return { track: track, viewport: viewport, prevBtn: prevBtn, nextBtn: nextBtn };
}

function getSlideStep(track) {
  var item = track.querySelector('.team-item');
  if (!item) return 0;
  var style = window.getComputedStyle(track);
  var gap = parseFloat(style.columnGap || style.gap) || 0;
  return item.getBoundingClientRect().width + gap;
}

function updateSlide() {
  var els = getSlideElements();
  if (!els) return;
  var maxOffset = Math.max(0, els.track.scrollWidth - els.viewport.clientWidth);
  slideOffset = Math.min(Math.max(slideOffset, 0), maxOffset);
  els.track.style.transform = 'translateX(-' + slideOffset + 'px)';

  var canScroll = maxOffset > 1;
  if (els.prevBtn) els.prevBtn.disabled = !canScroll || slideOffset <= 0;
  if (els.nextBtn) els.nextBtn.disabled = !canScroll || slideOffset >= maxOffset - 1;
  els.track.classList.toggle('track-centered', !canScroll);
}

function slidePrev() {
  var els = getSlideElements();
  if (!els) return;
  slideOffset -= getSlideStep(els.track);
  updateSlide();
}

function slideNext() {
  var els = getSlideElements();
  if (!els) return;
  slideOffset += getSlideStep(els.track);
  updateSlide();
}

window.addEventListener('resize', function () {
  if (document.getElementById('team-track')) updateSlide();
});
if (document.getElementById('team-track')) updateSlide();

if ('IntersectionObserver' in window) {
  var sections = document.querySelectorAll('section');
  var revealObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  sections.forEach(function (s) {
    s.classList.add('reveal');
    revealObserver.observe(s);
  });
}
