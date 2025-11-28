
      // Simple animation on scroll
      document.addEventListener("DOMContentLoaded", function () {
        const cards = document.querySelectorAll(".card-hover");

        // Add animation class to cards when they come into view
        const observer = new IntersectionObserver(
          (entries) => {
            entries.forEach((entry) => {
              if (entry.isIntersecting) {
                entry.target.style.animation = "slideIn 0.5s ease-out forwards";
                observer.unobserve(entry.target);
              }
            });
          },
          { threshold: 0.1 }
        );

        cards.forEach((card) => {
          observer.observe(card);
        });
      });
      let currentSlide = 0;
      const sliderTrack = document.getElementById("slider-track");
      const totalSlides = 3;

      function updateSlide() {
        sliderTrack.style.transform = `translateX(-${currentSlide * 100}%)`;
      }

      document.getElementById("next-btn").onclick = () => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlide();
      };

      document.getElementById("prev-btn").onclick = () => {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlide();
      };
      document.addEventListener("DOMContentLoaded", function () {
        const carousel = document.getElementById("carousel");
        const prevBtn = document.getElementById("prevBtn-struktur-inti");
        const nextBtn = document.getElementById("nextBtn-struktur-inti");
        const progressItems = document.querySelectorAll(".progress-item");

        let currentPosition = 0;
        const cardWidth = 272; // w-64 (256px) + gap-4 (16px) = 272px
        const cardsPerView = Math.floor(
          carousel.parentElement.offsetWidth / cardWidth
        );
        const totalCards = carousel.children.length;
        const maxPosition = Math.max(0, totalCards - cardsPerView);

        // Update progress bar
        function updateProgress() {
          const activeIndex = Math.floor(currentPosition / cardsPerView);
          progressItems.forEach((item, index) => {
            if (index === activeIndex) {
              item.classList.add("bg-cyan-400");
              item.classList.remove("bg-gray-200");
            } else {
              item.classList.remove("bg-cyan-400");
              item.classList.add("bg-gray-200");
            }
          });
        }

        // Navigate to previous set of cards
        prevBtn.addEventListener("click", function () {
          if (currentPosition > 0) {
            currentPosition = Math.max(0, currentPosition - cardsPerView);
            carousel.style.transform = `translateX(-${
              currentPosition * cardWidth
            }px)`;
            updateProgress();
          }
        });

        // Navigate to next set of cards
        nextBtn.addEventListener("click", function () {
          if (currentPosition < maxPosition) {
            currentPosition = Math.min(
              maxPosition,
              currentPosition + cardsPerView
            );
            carousel.style.transform = `translateX(-${
              currentPosition * cardWidth
            }px)`;
            updateProgress();
          }
        });

        // Initialize progress bar
        updateProgress();

        // Handle window resize
        window.addEventListener("resize", function () {
          const newCardsPerView = Math.floor(
            carousel.parentElement.offsetWidth / cardWidth
          );
          if (newCardsPerView !== cardsPerView) {
            // Reset position on resize
            currentPosition = 0;
            carousel.style.transform = `translateX(0)`;
            updateProgress();
          }
        });
      });
      // Navigation for Struktur Section
document.addEventListener('DOMContentLoaded', function() {
  const navItems = document.querySelectorAll('.struktur-nav-item');
  const contentSections = document.querySelectorAll('.struktur-content');

  // Function to show specific content
  function showContent(targetId) {
    // Hide all content sections
    contentSections.forEach(section => {
      section.classList.add('hidden');
      section.classList.remove('active');
    });

    // Remove active class from all nav items
    navItems.forEach(item => {
      item.classList.remove('bg-cyan-50', 'text-cyan-600', 'font-medium');
      item.classList.add('text-gray-700', 'hover:bg-gray-50');
    });

    // Show target content
    const targetContent = document.getElementById(targetId);
    if (targetContent) {
      targetContent.classList.remove('hidden');
      targetContent.classList.add('active');
    }

    // Activate corresponding nav item
    const activeNavItem = document.querySelector(`[data-target="${targetId}"]`);
    if (activeNavItem) {
      activeNavItem.classList.add('bg-cyan-50', 'text-cyan-600', 'font-medium');
      activeNavItem.classList.remove('text-gray-700', 'hover:bg-gray-50');
    }
  }

  // Add click event listeners to nav items
  navItems.forEach(item => {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('data-target');
      showContent(targetId);
    });
  });

  // Handle URL hash on page load
  function handleHash() {
    const hash = window.location.hash.substring(1);
    if (hash) {
      const validTargets = ['struktur-inti', 'bidang-1', 'bidang-2', 'bidang-3', 'bidang-4', 'bidang-5', 'bidang-6', 'bidang-7', 'bidang-8'];
      if (validTargets.includes(hash)) {
        showContent(hash);
      }
    }
  }

  // Handle initial load and hash changes
  handleHash();
  window.addEventListener('hashchange', handleHash);
});
