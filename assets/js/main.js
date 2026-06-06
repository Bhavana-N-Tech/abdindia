/* ============================================================
   AB&D Software India Pvt Ltd — Main JavaScript
   ============================================================ */

document.addEventListener('DOMContentLoaded', () => {
  document.body.classList.add('js-enabled');

  /* ── 1. Navbar scroll shadow ── */
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    const onScroll = () => navbar.classList.toggle('scrolled', window.scrollY > 30);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ── 2. Mobile hamburger / drawer ── */
  const hamburger = document.getElementById('hamburger');
  const navDrawer  = document.getElementById('navDrawer');
  if (hamburger && navDrawer) {
    hamburger.addEventListener('click', () => {
      const isOpen = hamburger.classList.toggle('open');
      navDrawer.classList.toggle('open', isOpen);
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });
    navDrawer.querySelectorAll('a').forEach(a =>
      a.addEventListener('click', () => {
        hamburger.classList.remove('open');
        navDrawer.classList.remove('open');
        document.body.style.overflow = '';
      })
    );
    document.addEventListener('click', e => {
      if (navDrawer.classList.contains('open') &&
          !navDrawer.contains(e.target) &&
          !hamburger.contains(e.target)) {
        hamburger.classList.remove('open');
        navDrawer.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  }

  /* ── 3. Active nav link highlight ── */
  const currentPage = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-menu a, .nav-drawer a').forEach(link => {
    const href = link.getAttribute('href');
    if (href && (href === currentPage || (currentPage === '' && href === 'index.php'))) {
      link.classList.add('active');
    }
  });

  /* ── 4. Smooth scrolling ── */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', e => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  /* ── 5. Scroll-reveal animation ── */
  const revealElements = document.querySelectorAll('.reveal');
  if (revealElements.length && 'IntersectionObserver' in window) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -60px 0px' });
    revealElements.forEach(el => observer.observe(el));
  } else {
    revealElements.forEach(el => el.classList.add('visible'));
  }

  /* ── 6. Animated stat counters ── */
  const statNumbers = document.querySelectorAll('.stat-num[data-count]');
  if (statNumbers.length && 'IntersectionObserver' in window) {
    const countObs = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          countObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.5 });
    statNumbers.forEach(el => countObs.observe(el));
  }

  function animateCount(el) {
    const target  = parseInt(el.dataset.count, 10);
    const suffix  = el.dataset.suffix || '';
    const prefix  = el.dataset.prefix || '';
    const dur     = 1600;
    const start   = performance.now();
    const update  = now => {
      const elapsed  = Math.min((now - start) / dur, 1);
      const eased    = 1 - Math.pow(1 - elapsed, 3);
      const current  = Math.round(target * eased);
      el.innerHTML   = `${prefix}${current}<span>${suffix}</span>`;
      if (elapsed < 1) requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
  }

  /* ── 7. Product / Solution filter chips ── */
  document.querySelectorAll('.filter-chip').forEach(chip => {
    chip.addEventListener('click', () => {
      const group = chip.closest('.filter-chips, .sol-filters');
      if (!group) return;
      group.querySelectorAll('.filter-chip').forEach(c => c.classList.remove('active'));
      chip.classList.add('active');

      const filter = chip.dataset.filter;
      const container = document.getElementById('filterContainer') || document.getElementById('solContainer');
      if (!container) return;

      container.querySelectorAll('[data-category]').forEach(card => {
        const matches = filter === 'all' || card.dataset.category === filter;
        card.style.display = matches ? '' : 'none';
        card.style.animation = matches ? 'fadeInCard 0.3s ease' : '';
      });
    });
  });

  /* ── 8. Product search ── */
  const searchInput = document.getElementById('productSearch');
  if (searchInput) {
    searchInput.addEventListener('input', () => {
      const q = searchInput.value.toLowerCase().trim();
      document.querySelectorAll('.product-card').forEach(card => {
        const name = (card.querySelector('.product-name')?.textContent || '').toLowerCase();
        const cat  = (card.querySelector('.product-cat')?.textContent  || '').toLowerCase();
        card.style.display = (name.includes(q) || cat.includes(q)) ? '' : 'none';
      });
    });
  }

  /* ── 9. Contact form feedback ── */
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', e => {
      e.preventDefault();
      const btn = contactForm.querySelector('.form-submit');
      const original = btn.textContent;
      btn.textContent = '✓ Message Sent!';
      btn.style.background = '#059669';
      btn.disabled = true;
      setTimeout(() => {
        btn.textContent = original;
        btn.style.background = '';
        btn.disabled = false;
        contactForm.reset();
      }, 4000);
    });
  }

  /* ── 10. Inject fade keyframe ── */
  if (!document.querySelector('#abdfade')) {
    const s = document.createElement('style');
    s.id = 'abdfade';
    s.textContent = `
      @keyframes fadeInCard {
        from { opacity:0; transform: translateY(10px); }
        to   { opacity:1; transform: translateY(0); }
      }
    `;
    document.head.appendChild(s);
  }

});
