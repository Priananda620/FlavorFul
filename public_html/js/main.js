
var debounceTimer;
var debounceDelay = 600;

var totalAlertActive = 0

function delay(ms) {
    return new Promise(resolve => {
        setTimeout(resolve, ms);
    });
}

async function pushAlert(message, type = "secondary") {
    ++totalAlertActive

    const $alertDiv = $(`
    <div class="alert alert-${type} w-100 shadow fade" role="alert">
        ${message}
    </div>
  `);

    $(".alert-target").prepend($alertDiv);

    setTimeout(() => {
        $alertDiv.addClass("show");
    }, 500);

    const $alert = $(".alert-target .alert:last");

    // Automatically remove the alert after 3 seconds
    await delay(3000)
    $alertDiv.removeClass("show");
    $alertDiv.addClass("hide");

    // After the alert disappears, remove it from the DOM
    await delay(500)
    $alertDiv.remove();
}

function copyToClipboard(text) {
    navigator.clipboard.writeText(text)
        .then(() => {
            console.log('Text successfully copied to clipboard');
        })
        .catch(err => {
            console.error('Unable to copy text to clipboard', err);
        });
}

function beforePopoverShow(event) {
    console.log("Popover is about to be shown")

    copyToClipboard(window.location.href);
}




$(document).ready(function () {
    $(".loading-overlay").attr("style", "display: none !important");

    const popoverTriggerListCopy = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover-copy-link"]'))
    const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    popoverTriggerListCopy.map(function (popoverTriggerEl) {

        const popover = new bootstrap.Popover(popoverTriggerEl);

        // Attach the event listener
        popoverTriggerEl.addEventListener('show.bs.popover', beforePopoverShow);

        return popover;

    })

    popoverTriggerList.map(function (popoverTriggerEl) {

        var popover = new bootstrap.Popover(popoverTriggerEl);
        return popover;

    })

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
        // console.log("Scrolled pixels:", getScrolledDistance());


    }

    // window.addEventListener('scroll', updateParallax);
    // window.addEventListener('resize', updateParallax);
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

    // $('#selected-recipe-container').on('click', '.selected-recipe', function () {

    // });



    // $('#add-recipe-search').on('keyup', function (event) {
    //     if (event.keyCode === 13) {

    //         const removeEmpty = $('#selected-recipe-container .empty-recipe');
    //         if (removeEmpty.length) {
    //             removeEmpty.remove()
    //         }
    //         const inputValue = $(this).val();
    //         console.log(inputValue)


    //         const newElement = $('<span class="badge bg-primary my-1 position-relative selected-recipe">' + inputValue + '</span>');

    //         $('#selected-recipe-container').append(newElement);

    //     }
    // });



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
        $('#rating_numeric').empty()
        $('#rating_numeric').append(new Array(selectedRating + 1).join('<i class="fas fa-star"></i>'));
        $('#rating_numeric').append(new Array((5 - selectedRating) + 1).join('<i class="far fa-star"></i>'));
    });

    const textarea = document.querySelector("textarea");
    textarea === null ?? textarea.addEventListener('input', autoResizeTextarea, false)

    function autoResizeTextarea() {
        this.style.height = 'auto';
        this.style.height = this.scrollHeight + 'px';
    }

    const menu_body = $('#popup-menu')
    $(".toggle-popup-menu").on('click', function (e) {
        console.log("fdsfdfds")
        

        if (menu_body.hasClass('active')) {
            menu_body.removeClass("active")
            setTimeout(function () {
                menu_body.addClass("d-none")
            }, 500);
        } else {
            menu_body.removeClass("d-none")
            setTimeout(function () {
                menu_body.addClass("active")
            }, 50);


        }
    })

    function onResizeActions(viewportWidth, viewportHeight) {
        const headerMenu = $('#header-list-menu')
        const headerSearch = $('.search-input')
        const toggleMenu = $('.toggle-popup-menu')


        if (viewportWidth < 770) {
            headerMenu.addClass("d-none")
            headerSearch.addClass("d-none")
            toggleMenu.removeClass("d-none")

            menu_body.removeClass("active")
            setTimeout(function () {
                menu_body.addClass("d-none")
            }, 500);
        } else {
            headerMenu.removeClass("d-none")
            headerSearch.removeClass("d-none")
            toggleMenu.addClass("d-none")
        }
    }
    function handleResize() {
        // console.log("resize")

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


    $('body').on('mousedown', '.rippleEffect', function (e) {
        var ripple = $('<div class="ripple"></div>');
        var offset = $(this).offset();
        var x = e.pageX - offset.left;
        var y = e.pageY - offset.top;

        ripple.css({ top: y, left: x });
        $(this).append(ripple);

        ripple.on('animationend', function () {
            ripple.remove();
        });

        console.log('ripple');
    });
});
