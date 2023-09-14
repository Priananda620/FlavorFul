
$(document).ready(function () {
    const parallaxElements = document.querySelectorAll('.parallax');

    function isElementOnScreen(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.bottom >= 0 &&
            rect.right >= 0 &&
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.left <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    var previousScrollY = window.scrollY;

    // Function to get the scrolled distance from the top
    function getScrolledDistance() {
        var currentScrollY = window.scrollY;
        var scrolledPixels = currentScrollY - previousScrollY;
        previousScrollY = currentScrollY;
        return scrolledPixels;
    }


    function updateParallax() {
        parallaxElements.forEach((element) => {
            if (isElementOnScreen(element)) {
                const offset = window.scrollY;
                let initialTranslateY = parseFloat(element.style.transform.replace('translateY(', '').replace('px)', '')) || 0;

                const scrollDirection = offset > element.lastScrollY ? 1 : -1;
                element.lastScrollY = offset;

                initialTranslateY += scrollDirection * .6;

                element.style.transform = `translateY(${initialTranslateY}px)`;
            }

        });

        // var scrolledPixels = window.scrollY;
        console.log("Scrolled pixels:", getScrolledDistance());


    }

    window.addEventListener('scroll', updateParallax);
    window.addEventListener('resize', updateParallax);
    updateParallax(); // Initial check


    console.log("Dsadsd")


    $("#toggle-home-filter").on("click", () => {
        if ($("#home-filters").attr('propActive') === "false") {
            $("#home-filters").addClass('h-filter-active')
            $("#home-filters").removeClass('overflow-hidden')
            $("#home-filters").attr('propActive', "true")
        } else {
            $("#home-filters").removeClass('h-filter-active')
            $("#home-filters").addClass('overflow-hidden')
            $("#home-filters").attr('propActive', "false")
        }
    })

    $('#selected-recipe-container').on('click', '.selected-recipe', function () {
        $(this).remove();
        if ($(".selected-recipe").length == 0 && $('.empty-recipe').length == 0) {
            console.log("empty")

            const newElement = $('<span class="badge bg-secondary my-1 position-relative empty-recipe">Select an Ingredient</span>');

            $('#selected-recipe-container').append(newElement);
        }
    });

    $('#remove-whole-recipe').on('click', function () {
        $('.selected-recipe').remove()

        if ($(".selected-recipe").length == 0 && $('.empty-recipe').length == 0) {
            console.log("empty")

            const newElement = $('<span class="badge bg-secondary my-1 position-relative empty-recipe">Select an Ingredient</span>');

            $('#selected-recipe-container').append(newElement);
        }
    })

    $('#add-recipe-search').on('keyup', function (event) {
        if (event.keyCode === 13) {
          // Enter key was pressed

          const removeEmpty = $('#selected-recipe-container .empty-recipe');
          if(removeEmpty.length){
            removeEmpty.remove()
          }
          const inputValue = $(this).val();
          console.log(inputValue)


          const newElement = $('<span class="badge bg-primary my-1 position-relative selected-recipe">'+inputValue+'</span>');

          $('#selected-recipe-container').append(newElement);

          // Optionally, you can perform other actions here
        }
      });
});
