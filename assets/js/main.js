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
  const productGrid = document.getElementById('filterContainer');
  let cards = [];
  let visibleCount = 12;
  const itemsToShow = 12;
  let loadMoreWrap = null;
  let btnLoadMore = null;

  if (productGrid) {
    cards = Array.from(productGrid.querySelectorAll('.product-card'));
    
    // Create Load More Button wrapper
    loadMoreWrap = document.createElement('div');
    loadMoreWrap.className = 'section-footer';
    loadMoreWrap.style.marginTop = '2.5rem';
    loadMoreWrap.innerHTML = `<button id="btnLoadMore" class="btn btn-primary" style="margin:0 auto;display:flex;">Show More Products <i class="fa-solid fa-arrow-down" style="margin-left:0.5rem;"></i></button>`;
    productGrid.parentNode.insertBefore(loadMoreWrap, productGrid.nextSibling);
    btnLoadMore = document.getElementById('btnLoadMore');

    btnLoadMore.addEventListener('click', () => {
      visibleCount += itemsToShow;
      updateVisibility();
    });
  }

  function updateVisibility() {
    if (!productGrid) return;
    const activeFilter = document.querySelector('.filter-chips .filter-chip.active')?.dataset.filter || 'all';
    const searchQuery = (document.getElementById('productSearch')?.value || '').toLowerCase().trim();

    let matchCount = 0;
    cards.forEach(card => {
      const matchesFilter = activeFilter === 'all' || card.dataset.category === activeFilter;
      const matchesSearch = !searchQuery || 
        (card.querySelector('.product-name')?.textContent || '').toLowerCase().includes(searchQuery) ||
        (card.querySelector('.product-cat')?.textContent || '').toLowerCase().includes(searchQuery);

      if (matchesFilter && matchesSearch) {
        if (matchCount < visibleCount) {
          card.style.display = '';
        } else {
          card.style.display = 'none';
        }
        matchCount++;
      } else {
        card.style.display = 'none';
      }
    });

    if (matchCount <= visibleCount) {
      loadMoreWrap.style.display = 'none';
    } else {
      loadMoreWrap.style.display = 'block';
    }
  }

  document.querySelectorAll('.filter-chip').forEach(chip => {
    chip.addEventListener('click', () => {
      const group = chip.closest('.filter-chips, .sol-filters');
      if (!group) return;
      group.querySelectorAll('.filter-chip').forEach(c => c.classList.remove('active'));
      chip.classList.add('active');

      const filter = chip.dataset.filter;
      const container = document.getElementById('filterContainer') || document.getElementById('solContainer');
      if (!container) return;

      if (container.id === 'filterContainer') {
        visibleCount = itemsToShow;
        updateVisibility();
      } else {
        // Solutions page filter
        container.querySelectorAll('[data-category]').forEach(card => {
          const matches = filter === 'all' || card.dataset.category === filter;
          card.style.display = matches ? '' : 'none';
          card.style.animation = matches ? 'fadeInCard 0.3s ease' : '';
        });
      }
    });
  });

  /* ── 8. Product search ── */
  const searchInput = document.getElementById('productSearch');
  if (searchInput) {
    searchInput.addEventListener('input', () => {
      if (productGrid) {
        visibleCount = itemsToShow;
        updateVisibility();
      } else {
        const q = searchInput.value.toLowerCase().trim();
        document.querySelectorAll('.product-card').forEach(card => {
          const name = (card.querySelector('.product-name')?.textContent || '').toLowerCase();
          const cat  = (card.querySelector('.product-cat')?.textContent  || '').toLowerCase();
          card.style.display = (name.includes(q) || cat.includes(q)) ? '' : 'none';
        });
      }
    });
  }

  // Initialize products visibility
  if (productGrid) {
    updateVisibility();
  }

  /* ── 8b. Partner category mobile expander ── */
  document.querySelectorAll('.btn-partner-toggle').forEach(btn => {
    btn.addEventListener('click', () => {
      const cat = btn.closest('.partner-category');
      if (!cat) return;
      cat.classList.toggle('expanded');
      const isExpanded = cat.classList.contains('expanded');
      const totalCount = cat.querySelectorAll('.partner-logo').length;
      const hiddenCount = totalCount - 6;
      btn.textContent = isExpanded ? 'Show Less' : `Show All (+${hiddenCount})`;
      
      // Optional smooth scroll to category top when collapsing
      if (!isExpanded) {
        cat.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  /* ── 9. Contact form AJAX handler ── */
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    const removeMessages = () => {
      const oldAlerts = contactForm.querySelectorAll('.form-alert');
      oldAlerts.forEach(el => el.remove());
    };

    contactForm.addEventListener('submit', e => {
      e.preventDefault();
      removeMessages();

      const btn = contactForm.querySelector('.form-submit');
      const original = btn.innerHTML;
      
      // Loading state
      btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending...';
      btn.disabled = true;

      const formData = new FormData(contactForm);

      fetch('contact.php?ajax=1', {
        method: 'POST',
        body: formData
      })
      .then(res => res.json())
      .then(data => {
        const alertEl = document.createElement('div');
        alertEl.className = 'form-alert';
        alertEl.style.padding = '1rem';
        alertEl.style.borderRadius = 'var(--radius-sm)';
        alertEl.style.marginBottom = '1.5rem';
        alertEl.style.fontSize = '0.9rem';
        alertEl.style.borderLeft = '4px solid';
        alertEl.style.animation = 'fadeInCard 0.3s ease';

        if (data.status === 'success') {
          // Success Feedback
          btn.innerHTML = '<i class="fa-solid fa-circle-check"></i> Message Sent!';
          btn.style.background = '#059669';
          btn.style.borderColor = '#059669';

          alertEl.style.background = '#d1fae5';
          alertEl.style.borderColor = '#10b981';
          alertEl.style.color = '#065f46';
          alertEl.textContent = data.message;

          // Insert alert before form inputs
          contactForm.insertBefore(alertEl, contactForm.querySelector('.form-row'));
          contactForm.reset();

          setTimeout(() => {
            btn.innerHTML = original;
            btn.style.background = '';
            btn.style.borderColor = '';
            btn.disabled = false;
          }, 5000);
        } else {
          // Error Feedback
          btn.innerHTML = original;
          btn.disabled = false;

          alertEl.style.background = '#fee2e2';
          alertEl.style.borderColor = '#ef4444';
          alertEl.style.color = '#991b1b';
          alertEl.textContent = data.message;

          contactForm.insertBefore(alertEl, contactForm.querySelector('.form-row'));
        }
      })
      .catch(err => {
        btn.innerHTML = original;
        btn.disabled = false;

        const alertEl = document.createElement('div');
        alertEl.className = 'form-alert';
        alertEl.style.padding = '1rem';
        alertEl.style.borderRadius = 'var(--radius-sm)';
        alertEl.style.marginBottom = '1.5rem';
        alertEl.style.fontSize = '0.9rem';
        alertEl.style.borderLeft = '4px solid #ef4444';
        alertEl.style.background = '#fee2e2';
        alertEl.style.color = '#991b1b';
        alertEl.textContent = 'A network error occurred. Please try again or email us directly.';
        alertEl.style.animation = 'fadeInCard 0.3s ease';

        contactForm.insertBefore(alertEl, contactForm.querySelector('.form-row'));
      });
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
