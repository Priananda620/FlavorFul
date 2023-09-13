
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


    $("#toggle-home-filter").on("click", ()=>{
        if($("#home-filters").attr('propActive') === "false"){
            $("#home-filters").addClass('h-filter-active')
            $("#home-filters").removeClass('overflow-hidden')
            $("#home-filters").attr('propActive', "true")
        }else{
            $("#home-filters").removeClass('h-filter-active')
            $("#home-filters").addClass('overflow-hidden')
            $("#home-filters").attr('propActive', "false")
        }
    })
});
