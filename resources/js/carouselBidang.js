        const carouselBidang = document.getElementById("carousel-bidang-1");
        const prevBtnBidang = document.getElementById("prevBtn-bidang-1");
        const nextBtnBidang = document.getElementById("nextBtn-bidang-1");
        const progressItemsBidang = document.querySelectorAll(".progress-item-bidang-1");

        let currentPositionBidang = 0;
        const cardWidthBidang = 272; // w-64 (256px) + gap-4 (16px) = 272px
        const cardsPerViewBidang = Math.floor(
          carouselBidang.parentElement.offsetWidth / cardWidthBidang
        );
        const totalCardsBidang = carouselBidang.children.length;
        const maxPosition = Math.max(0, totalCardsBidang - cardsPerViewBidang);

        // Update progress bar
        function updateProgress() {
          const activeIndex = Math.floor(currentPositionBidang / cardsPerViewBidang);
          progressItemsBidang.forEach((item, index) => {
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
        prevBtnBidang.addEventListener("click", function () {
          if (currentPositionBidang > 0) {
            currentPositionBidang = Math.max(0, currentPositionBidang - cardsPerViewBidang);
            carouselBidang.style.transform = `translateX(-${
              currentPositionBidang * cardWidthBidang
            }px)`;
            updateProgress();
          }
        });

        // Navigate to next set of cards
        nextBtnBidang.addEventListener("click", function () {
          if (currentPositionBidang < maxPosition) {
            currentPositionBidang = Math.min(
              maxPosition,
              currentPositionBidang + cardsPerViewBidang
            );
            carouselBidang.style.transform = `translateX(-${
              currentPositionBidang * cardWidthBidang
            }px)`;
            updateProgress();
          }
        });

        // Initialize progress bar
        updateProgress();

        // Handle window resize
        window.addEventListener("resize", function () {
          const newCardsPerViewBidang = Math.floor(
            carouselBidang.parentElement.offsetWidth / cardWidthBidang
          );
          if (newCardsPerViewBidang !== cardsPerViewBidang) {
            // Reset position on resize
            currentPositionBidang = 0;
            carouselBidang.style.transform = `translateX(0)`;
            updateProgress();
          }
        });