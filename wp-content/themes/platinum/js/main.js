document.addEventListener('DOMContentLoaded', function() {
  // 1. Mobile Menu Functionality
  const mobileToggle = document.querySelector('.mobile-menu-toggle');
  const mobileDrawer = document.querySelector('.mobile-navigation-drawer');
  const mobileOverlay = document.querySelector('.mobile-menu-overlay');

  if (mobileToggle && mobileDrawer && mobileOverlay) {
    function toggleMobileMenu() {
      mobileToggle.classList.toggle('active');
      mobileDrawer.classList.toggle('active');
      mobileOverlay.classList.toggle('active');
      document.body.classList.toggle('no-scroll');
    }

    mobileToggle.addEventListener('click', toggleMobileMenu);
    mobileOverlay.addEventListener('click', toggleMobileMenu);

    // Close mobile menu on clicking links
    const mobileLinks = mobileDrawer.querySelectorAll('a');
    mobileLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (mobileDrawer.classList.contains('active')) {
          toggleMobileMenu();
        }
      });
    });
  }

  // 2. FAQ accordion + load more
  const faqItems = document.querySelectorAll('.faq-section__item');
  const faqLoadMore = document.getElementById('faq-load-more');
  const faqHiddenItems = document.querySelectorAll('.faq-section__item--hidden');

  faqItems.forEach((item) => {
    const trigger = item.querySelector('.faq-section__trigger');
    if (!trigger) return;

    trigger.addEventListener('click', () => {
      const isOpen = item.classList.contains('is-open');

      faqItems.forEach((otherItem) => {
        otherItem.classList.remove('is-open');
        const otherTrigger = otherItem.querySelector('.faq-section__trigger');
        if (otherTrigger) {
          otherTrigger.setAttribute('aria-expanded', 'false');
        }
      });

      if (!isOpen) {
        item.classList.add('is-open');
        trigger.setAttribute('aria-expanded', 'true');
      }
    });
  });

  if (faqLoadMore && faqHiddenItems.length) {
    faqLoadMore.addEventListener('click', () => {
      faqHiddenItems.forEach((item) => {
        item.classList.remove('faq-section__item--hidden');
      });
      faqLoadMore.setAttribute('aria-expanded', 'true');
      faqLoadMore.hidden = true;
    });
  } else if (faqLoadMore) {
    faqLoadMore.hidden = true;
  }

  // 3. Service Areas — state tabs, city columns, tab indicator
  const areaTabs = document.querySelectorAll('.service-areas-section__tab');
  const areasCitiesPanel = document.getElementById('areas-cities-panel');
  const areaTabDot = document.querySelector('.service-areas-section__tab-dot');

  const stateAreasData = {
    nsw: [
      ['Sydney', 'Central Coast', 'Mittagong', 'Orange', 'Taree', 'Coffs Harbour'],
      ['Newcastle', 'Port Macquarie', 'Mittagong', 'Tweed Heads', 'Taree', 'Bathurst', 'Maitland'],
      ['Nowra', 'Tamworth', 'Wollongong']
    ],
    vic: [
      ['Melbourne', 'Geelong', 'Ballarat', 'Bendigo', 'Shepparton', 'Warrnambool'],
      ['Frankston', 'Dandenong', 'Mornington', 'Traralgon', 'Wodonga', 'Mildura'],
      ['Horsham', 'Sale', 'Echuca']
    ],
    qld: [
      ['Brisbane', 'Gold Coast', 'Sunshine Coast', 'Cairns', 'Townsville', 'Toowoomba'],
      ['Rockhampton', 'Mackay', 'Bundaberg', 'Gladstone', 'Hervey Bay', 'Maryborough'],
      ['Ipswich', 'Logan', 'Redcliffe']
    ],
    sa: [
      ['Adelaide', 'Mount Gambier', 'Whyalla', 'Murray Bridge', 'Port Augusta', 'Port Pirie'],
      ['Gawler', 'Victor Harbor', 'Kadina', 'Naracoorte', 'Millicent', 'Renmark'],
      ['Berri', 'Clare', 'Port Lincoln']
    ],
    wa: [
      ['Perth', 'Fremantle', 'Mandurah', 'Bunbury', 'Geraldton', 'Kalgoorlie'],
      ['Albany', 'Broome', 'Karratha', 'Port Hedland', 'Esperance', 'Busselton'],
      ['Rockingham', 'Joondalup', 'Midland']
    ],
    tas: [
      ['Hobart', 'Launceston', 'Devonport', 'Burnie', 'Kingston', 'Ulverstone'],
      ['New Norfolk', 'George Town', 'Queenstown', 'Smithton', 'Sorell', 'Bridgewater'],
      ['Richmond', 'Deloraine', 'St Helens']
    ],
    nt: [
      ['Darwin', 'Alice Springs', 'Katherine', 'Palmerston', 'Nhulunbuy', 'Tennant Creek'],
      ['Jabiru', 'Yulara', 'Humpty Doo', 'Howard Springs'],
      ['Casuarina', 'Nightcliff', 'Larrakeyah']
    ],
    act: [
      ['Canberra', 'Belconnen', 'Tuggeranong', 'Gungahlin', 'Woden', 'Fyshwick'],
      ['Queanbeyan', 'Mitchell', 'Dickson', 'Civic'],
      ['Braddon', 'Kingston', 'Manuka']
    ]
  };

  function renderCityColumns(columns) {
    if (!areasCitiesPanel || !columns) return;

    areasCitiesPanel.innerHTML = '';
    columns.forEach((cities, index) => {
      const col = document.createElement('ul');
      col.className = 'service-areas-section__column';

      cities.forEach((city, cityIndex) => {
        const li = document.createElement('li');
        li.className = 'service-areas-section__city';
        if (index === 0 && cityIndex === 0) {
          li.classList.add('service-areas-section__city--featured');
        }
        li.textContent = city;
        col.appendChild(li);
      });

      areasCitiesPanel.appendChild(col);
    });
  }

  function moveAreaTabDot(activeTab) {
    if (!areaTabDot || !activeTab) return;
    const track = activeTab.closest('.service-areas-section__tabs-wrap');
    if (!track) return;

    const trackRect = track.querySelector('.service-areas-section__tab-track').getBoundingClientRect();
    const tabRect = activeTab.getBoundingClientRect();
    const center = tabRect.left + tabRect.width / 2 - trackRect.left;
    areaTabDot.style.left = `${center}px`;
  }

  function activateState(stateKey) {
    const data = stateAreasData[stateKey];
    if (!data) return;

    renderCityColumns(data);

    areaTabs.forEach((tab) => {
      const isActive = tab.getAttribute('data-state') === stateKey;
      tab.classList.toggle('is-active', isActive);
      tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
      if (isActive) {
        moveAreaTabDot(tab);
      }
    });
  }

  if (areaTabs.length && areasCitiesPanel) {
    areaTabs.forEach((tab) => {
      tab.addEventListener('click', function () {
        activateState(this.getAttribute('data-state'));
      });
    });

    const initialTab = document.querySelector('.service-areas-section__tab.is-active');
    if (initialTab) {
      moveAreaTabDot(initialTab);
    }

    window.addEventListener('resize', function () {
      const activeTab = document.querySelector('.service-areas-section__tab.is-active');
      if (activeTab) {
        moveAreaTabDot(activeTab);
      }
    });
  }

  // 4. Services slider (Swiper)
  const servicesSwiperEl = document.querySelector('.services-swiper');
  if (servicesSwiperEl && typeof Swiper !== 'undefined') {
    new Swiper('.services-swiper', {
      slidesPerView: 1.15,
      spaceBetween: 20,
      grabCursor: true,
      watchOverflow: true,
      pagination: {
        el: '.services-swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        480: {
          slidesPerView: 1.4,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2.2,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 3.1,
          spaceBetween: 28,
        },
        1280: {
          slidesPerView: 3.35,
          spaceBetween: 32,
        },
      },
    });
  }

  // 5. Testimonials slider (Swiper)
  const testimonialsSwiperEl = document.querySelector('.testimonials-swiper');
  if (testimonialsSwiperEl && typeof Swiper !== 'undefined') {
    new Swiper('.testimonials-swiper', {
      slidesPerView: 1.1,
      spaceBetween: 20,
      grabCursor: true,
      watchOverflow: true,
      breakpoints: {
        640: {
          slidesPerView: 1.5,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2.1,
          spaceBetween: 24,
        },
        1024: {
          slidesPerView: 2.6,
          spaceBetween: 28,
        },
        1280: {
          slidesPerView: 3.15,
          spaceBetween: 32,
        },
      },
    });
  }

  // 6. Homepage video banner — autoplay muted; play button removes poster + sound
  const videoBannerInner = document.querySelector('.video-banner__inner');
  const videoPoster = document.getElementById('video-banner-poster');
  const videoPlayBtn = document.getElementById('video-banner-play');
  const videoEl = document.getElementById('video-banner-video');

  if (videoEl) {
    videoEl.muted = true;
    videoEl.defaultMuted = true;

    function ensureVideoPlaying() {
      const promise = videoEl.play();
      if (promise && typeof promise.catch === 'function') {
        promise.catch(function() {});
      }
    }

    if (videoEl.readyState >= 2) {
      ensureVideoPlaying();
    } else {
      videoEl.addEventListener('loadeddata', ensureVideoPlaying, { once: true });
    }

    document.addEventListener('visibilitychange', function() {
      if (!document.hidden && videoPoster && !videoPoster.classList.contains('is-hidden')) {
        ensureVideoPlaying();
      }
    });

    function playBannerVideoWithSound() {
      if (videoPoster) {
        videoPoster.classList.add('is-hidden');
        videoPoster.setAttribute('aria-hidden', 'true');
      }
      if (videoBannerInner) {
        videoBannerInner.classList.add('is-playing');
      }
      videoEl.muted = false;
      videoEl.loop = false;
      videoEl.setAttribute('controls', '');
      ensureVideoPlaying();
    }

    if (videoPlayBtn) {
      videoPlayBtn.addEventListener('click', playBannerVideoWithSound);
    }

    if (videoPoster) {
      videoPoster.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          playBannerVideoWithSound();
        }
      });
    }
  }
});
