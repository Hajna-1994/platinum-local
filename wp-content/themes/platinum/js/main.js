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

  // 2. FAQ Accordion Functionality
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(item => {
    const trigger = item.querySelector('.faq-trigger');
    if (trigger) {
      trigger.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        
        // Close all active items
        faqItems.forEach(otherItem => {
          otherItem.classList.remove('active');
        });

        // Toggle current item
        if (!isActive) {
          item.classList.add('active');
        }
      });
    }
  });

  // 3. Service Areas Tabs and SVG Map Interaction
  const tabButtons = document.querySelectorAll('.area-tab-btn');
  const mapStates = document.querySelectorAll('.map-state');
  const mapMarkers = document.querySelectorAll('.map-marker');
  
  // Data for active suburbs by city
  const cityData = {
    sydney: {
      name: "Sydney, NSW",
      desc: "Providing lightning-fast IT support and expert tech repair services across the greater Sydney metropolitan area. From the CBD to the suburbs, our certified technicians are on hand same-day.",
      suburbs: ["Sydney CBD", "North Sydney", "Parramatta", "Surry Hills", "Chatswood", "Manly", "Ryde", "Bondi Junction"]
    },
    melbourne: {
      name: "Melbourne, VIC",
      desc: "Expert on-site and remote IT assistance for Melbournians. We support small businesses and residential clients with reliable computer repair and platform setup solutions.",
      suburbs: ["Melbourne CBD", "Richmond", "St Kilda", "Fitzroy", "Southbank", "Brunswick", "Hawthorn", "Footscray"]
    },
    brisbane: {
      name: "Brisbane, QLD",
      desc: "Your local tech solutions provider in Sunshine State. Certified technicians available for same-day hardware installations, software troubleshooting, and Wi-Fi optimization.",
      suburbs: ["Brisbane CBD", "Fortitude Valley", "South Brisbane", "Indooroopilly", "Chermside", "Carindale", "Sunnybank", "Paddington"]
    },
    adelaide: {
      name: "Adelaide, SA",
      desc: "Fast and affordable tech repairs and network troubleshooting for Adelaide homes and businesses. Our team is dedicated to keeping your digital tools running smoothly.",
      suburbs: ["Adelaide CBD", "North Adelaide", "Glenelg", "Norwood", "Prospect", "Unley", "Marion", "Mawson Lakes"]
    },
    perth: {
      name: "Perth, WA",
      desc: "Premium tech support and reliable computer repair services in Western Australia. We offer fast turnarounds and professional, remote troubleshooting help.",
      suburbs: ["Perth CBD", "Fremantle", "Subiaco", "Joondalup", "Victoria Park", "Scarborough", "Midland", "Armadale"]
    },
    hobart: {
      name: "Hobart, TAS",
      desc: "Quality remote and localized IT support for Tasmanian businesses and households. Experience stress-free computer setups and secure backup systems today.",
      suburbs: ["Hobart CBD", "Sandy Bay", "Glenorchy", "Bellerive", "Kingston", "Moonah", "New Town", "North Hobart"]
    },
    darwin: {
      name: "Darwin, NT",
      desc: "Reliable IT assistance for Darwin and surrounding territories. Dedicated certified technical experts offering immediate remote solutions to get you running fast.",
      suburbs: ["Darwin CBD", "Casuarina", "Palmerston", "Nightcliff", "Larrakeyah", "Parap", "Fannie Bay", "Winnellie"]
    }
  };

  function activateCity(cityKey) {
    const data = cityData[cityKey];
    if (!data) return;

    // Update details panel
    const cityNameEl = document.getElementById('active-city-name');
    const cityDescEl = document.getElementById('active-city-desc');
    const suburbsGridEl = document.getElementById('active-suburbs-grid');

    if (cityNameEl) cityNameEl.textContent = data.name;
    if (cityDescEl) cityDescEl.textContent = data.desc;
    
    if (suburbsGridEl) {
      suburbsGridEl.innerHTML = '';
      data.suburbs.forEach(suburb => {
        const item = document.createElement('div');
        item.className = 'suburb-item';
        item.textContent = suburb;
        suburbsGridEl.appendChild(item);
      });
    }

    // Update active tab buttons
    tabButtons.forEach(btn => {
      if (btn.getAttribute('data-city') === cityKey) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    });

    // Update active map state outline
    const targetStateId = getCityStateId(cityKey);
    mapStates.forEach(state => {
      if (state.id === targetStateId) {
        state.classList.add('active');
      } else {
        state.classList.remove('active');
      }
    });

    // Update active map marker
    mapMarkers.forEach(marker => {
      if (marker.getAttribute('data-city') === cityKey) {
        marker.classList.add('active');
      } else {
        marker.classList.remove('active');
      }
    });
  }

  function getCityStateId(cityKey) {
    switch (cityKey) {
      case 'sydney': return 'state-nsw';
      case 'melbourne': return 'state-vic';
      case 'brisbane': return 'state-qld';
      case 'adelaide': return 'state-sa';
      case 'perth': return 'state-wa';
      case 'hobart': return 'state-tas';
      case 'darwin': return 'state-nt';
      default: return '';
    }
  }

  tabButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      const cityKey = this.getAttribute('data-city');
      activateCity(cityKey);
    });
  });

  mapMarkers.forEach(marker => {
    marker.addEventListener('click', function() {
      const cityKey = this.getAttribute('data-city');
      activateCity(cityKey);
    });
  });

  mapStates.forEach(state => {
    state.addEventListener('click', function() {
      // Find city associated with this state
      let cityKey = '';
      if (this.id === 'state-nsw') cityKey = 'sydney';
      else if (this.id === 'state-vic') cityKey = 'melbourne';
      else if (this.id === 'state-qld') cityKey = 'brisbane';
      else if (this.id === 'state-sa') cityKey = 'adelaide';
      else if (this.id === 'state-wa') cityKey = 'perth';
      else if (this.id === 'state-tas') cityKey = 'hobart';
      else if (this.id === 'state-nt') cityKey = 'darwin';
      
      if (cityKey) activateCity(cityKey);
    });
  });
});
