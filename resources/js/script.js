
function initHorizontalCarousel(options) {
  const {
    carouselId,
    prevBtnId,
    nextBtnId,
    progressSelector,
    cardWidth = 272,
  } = options;

  const carousel = document.getElementById(carouselId);
  if (!carousel) return;

  const prevBtn = document.getElementById(prevBtnId);
  const nextBtn = document.getElementById(nextBtnId);
  const progressItems = document.querySelectorAll(progressSelector);

  let currentPosition = 0;
  let cardsPerView = calculateCardsPerView();
  let totalCards = carousel.children.length;
  let maxPosition = Math.max(0, totalCards - cardsPerView);

  function calculateCardsPerView() {
    return Math.floor(carousel.parentElement.offsetWidth / cardWidth);
  }

  function updateProgress() {
    const activeIndex = Math.floor(currentPosition / cardsPerView);
    progressItems.forEach((item, index) => {
      item.classList.toggle('bg-cyan-400', index === activeIndex);
      item.classList.toggle('bg-gray-200', index !== activeIndex);
    });
  }

  function moveCarousel() {
    carousel.style.transform = `translateX(-${currentPosition * cardWidth}px)`;
    updateProgress();
  }

  // Tombol Previous
  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      if (currentPosition > 0) {
        currentPosition = Math.max(0, currentPosition - cardsPerView);
        moveCarousel();
      }
    });
  }

  // Tombol Next
  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      if (currentPosition < maxPosition) {
        currentPosition = Math.min(maxPosition, currentPosition + cardsPerView);
        moveCarousel();
      }
    });
  }

  // Inisialisasi awal
  moveCarousel();

  // Responsif saat resize
  window.addEventListener('resize', () => {
    const newPerView = calculateCardsPerView();
    if (newPerView !== cardsPerView) {
      cardsPerView = newPerView;
      maxPosition = Math.max(0, totalCards - cardsPerView);
      currentPosition = 0;
      carousel.style.transform = 'translateX(0)';
      updateProgress();
    }
  });
}

// --------------------------------------------------
// 2. Fungsi reusable untuk slider sederhana (percentage-based)
// --------------------------------------------------
function initSimpleSlider(options = {}) {
  const {
    trackId = 'slider-track',
    prevBtnId = 'prev-btn',
    nextBtnId = 'next-btn',
    totalSlides = 3,
  } = options;

  const track = document.getElementById(trackId);
  if (!track) return;

  let currentSlide = 0;

  function updateSlide() {
    track.style.transform = `translateX(-${currentSlide * 100}%)`;
  }

  const nextBtn = document.getElementById(nextBtnId);
  const prevBtn = document.getElementById(prevBtnId);

  if (nextBtn) {
    nextBtn.onclick = () => {
      currentSlide = (currentSlide + 1) % totalSlides;
      updateSlide();
    };
  }

  if (prevBtn) {
    prevBtn.onclick = () => {
      currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
      updateSlide();
    };
  }
}

// --------------------------------------------------
// 3. Tab navigation dengan hash support
// --------------------------------------------------
function initStrukturTabNavigation() {
  const navItems = document.querySelectorAll('.struktur-nav-item');
  const contentSections = document.querySelectorAll('.struktur-content');

  if (!navItems.length || !contentSections.length) return;

  function showContent(targetId) {
    // Sembunyikan semua konten
    contentSections.forEach(section => {
      section.classList.add('hidden');
      section.classList.remove('active');
    });

    // Reset style semua nav item
    navItems.forEach(item => {
      item.classList.remove('bg-cyan-50', 'text-cyan-600', 'font-medium');
      item.classList.add('text-gray-700', 'hover:bg-gray-50');
    });

    // Tampilkan target
    const targetContent = document.getElementById(targetId);
    if (targetContent) {
      targetContent.classList.remove('hidden');
      targetContent.classList.add('active');
    }

    // Aktifkan nav item yang sesuai
    const activeNav = document.querySelector(`[data-target="${targetId}"]`);
    if (activeNav) {
      activeNav.classList.add('bg-cyan-50', 'text-cyan-600', 'font-medium');
      activeNav.classList.remove('text-gray-700', 'hover:bg-gray-50');
    }
  }

  // Klik pada nav item
  navItems.forEach(item => {
    item.addEventListener('click', e => {
      e.preventDefault();
      const targetId = item.getAttribute('data-target');
      showContent(targetId);
      // Optional: update URL hash
      history.replaceState(null, null, `#${targetId}`);
    });
  });

  // Handle hash pada load & perubahan
  function handleHash() {
    const hash = window.location.hash.substring(1);
    if (!hash) {
      // default ke tab pertama jika tidak ada hash
      const firstTarget = navItems[0]?.getAttribute('data-target');
      if (firstTarget) showContent(firstTarget);
      return;
    }

    const validTargets = Array.from(navItems).map(item => item.getAttribute('data-target'));
    if (validTargets.includes(hash)) {
      showContent(hash);
    }
  }

  handleHash();
  window.addEventListener('hashchange', handleHash);
}

// --------------------------------------------------
// 4. Animasi slide-in kartu saat masuk viewport
// --------------------------------------------------
function initScrollAnimation() {
  const cards = document.querySelectorAll('.card-hover');
  if (!cards.length) return;

  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.style.animation = 'slideIn 0.5s ease-out forwards';
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 }
  );

  cards.forEach(card => observer.observe(card));
}

// --------------------------------------------------
// Inisialisasi semua fitur saat DOM siap
// --------------------------------------------------
document.addEventListener('DOMContentLoaded', () => {
  // Inisialisasi animasi scroll (global untuk semua kartu)
  initScrollAnimation();

  // Inisialisasi slider sederhana (misal untuk 3 paslon utama)
  initSimpleSlider();

  // Inisialisasi carousel Struktur Inti
  initHorizontalCarousel({
    carouselId: 'carousel',
    prevBtnId: 'prevBtn-struktur-inti',
    nextBtnId: 'nextBtn-struktur-inti',
    progressSelector: '.progress-item',
  });

  // Inisialisasi carousel Bidang 1 (dan bisa ditambah bidang lain)
  initHorizontalCarousel({
    carouselId: 'carousel-bidang-1',
    prevBtnId: 'prevBtn-bidang-1',
    nextBtnId: 'nextBtn-bidang-1',
    progressSelector: '.progress-item-bidang-1',
  });

  // Tambahkan bidang lain di sini jika ada
  // initHorizontalCarousel({ carouselId: 'carousel-bidang-2', ... });

  // Inisialisasi tab navigation untuk bidang & struktur
  initStrukturTabNavigation();
});