
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
            if (removeEmpty.length) {
                removeEmpty.remove()
            }
            const inputValue = $(this).val();
            console.log(inputValue)


            const newElement = $('<span class="badge bg-primary my-1 position-relative selected-recipe">' + inputValue + '</span>');

            $('#selected-recipe-container').append(newElement);

            // Optionally, you can perform other actions here
        }
    });



    $("#avatar").click(function () {
        $("#avatar-menu").toggle();
    });


    let selectedRating = 0;

    // Click event handler for star buttons
    $('#star-rating button').click(function () {
        const rating = $(this).data('rating');

        // Remove 'active' class from all buttons
        $('#star-rating button').removeClass('active');

        // Add 'active' class to the clicked button and all preceding buttons
        $(this).addClass('active').prevAll().addClass('active');

        // Update the selected rating
        selectedRating = rating;

        // Update the displayed rating
        $('#selected-rating').text(selectedRating);
    });


    $(".toggle-popup-menu").on('click', function (e) {
        console.log("fdsfdfds")
        const menu_body = $('#popup-menu')

        if(menu_body.hasClass('active')){
            menu_body.removeClass("active")
            setTimeout(function (){
                menu_body.addClass("d-none")
            }, 500);
        }else{
            menu_body.removeClass("d-none")
            setTimeout(function (){
                menu_body.addClass("active")
            }, 50);


        }
    })

    function onResizeActions(viewportWidth, viewportHeight) {
        const headerMenu = $('#header-list-menu')
        const headerSearch = $('.search-input')
        const toggleMenu = $('.toggle-popup-menu')


        if (viewportWidth < 720) {
            headerMenu.addClass("d-none")
            headerSearch.addClass("d-none")
            toggleMenu.removeClass("d-none")
        }else{
            headerMenu.removeClass("d-none")
            headerSearch.removeClass("d-none")
            toggleMenu.addClass("d-none")
        }
    }
    function handleResize() {
        console.log("resize")

        const viewportWidth2 = window.innerWidth || document.documentElement.clientWidth;
        const viewportHeight2 = window.innerHeight || document.documentElement.clientHeight;

        resizeTimeout = setTimeout(function () {


            onResizeActions(viewportWidth2, viewportHeight2);
        }, 100);
    }

    window.addEventListener('resize', handleResize);

    const viewportWidth = window.innerWidth || document.documentElement.clientWidth;
    const viewportHeight = window.innerHeight || document.documentElement.clientHeight;

    onResizeActions(viewportWidth, viewportHeight)
});
