// code js menu mobile
let menu_mobile = document.querySelector(".menu_mobile");
let nav_menu = document.querySelector(".nav_menu");

menu_mobile.onclick = function() {
    nav_menu.classList.toggle("show");
}

//
$(".sub-menu-toggle").click(function(e) {
    e.preventDefault();
    $(this).parent(".list_item").find(".sub_menu").toggle();
});

//code jquery datepicker

$('#check_in').daterangepicker({
    singleDatePicker: true,
    opens: 'right',
    drops: 'down',
});


$('#check_out').daterangepicker({
    singleDatePicker: true,
    drops: 'down',
});

//code jquery datepicker list room

$('.res_checkin-input').daterangepicker({
    singleDatePicker: true,
    opens: 'right',
    drops: 'down',
});


$('.res_checkout-input').daterangepicker({
    singleDatePicker: true,
    drops: 'down',
});

// owl banner
$('.banner-slider').owlCarousel({
	items: 1,
	autoplay: true,
	autoplayTimeout: 3000,
	autoplaySpeed: 800,
    loop: true,
    nav: false,
    dots: false,
    margin: 0,
    navText: ["<i class='fal fa-angle-left'></i>", "<i class='fal fa-angle-right'></i>"]
})

//code slide
$('.carousel_lod--list').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    margin: 20,
    navText: ["<i class='fal fa-angle-left'></i>", "<i class='fal fa-angle-right'></i>"],
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        }
    }
})

$('.service-slide').owlCarousel({
    loop: true,
	autoplay: true,
	autoplayTimeout: 3000,
	autoplaySpeed: 800,
    margin: 15,
    nav: false,
    dots: false,
    responsiveClass: true,
    navText: ['<span class="fas fa-chevron-left fa-2x"></span>', '<span class="fas fa-chevron-right fa-2x"></span>'],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }

})

$('.carousel_lod--room').owlCarousel({
    loop: true,
    dots: false,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 3,
        }
    }
})

$('.carousel_two-n').owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    margin: 20,
    
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 1,
        },
        1000: {
            items: 1,
        }
    }
})

   $(".nav-next").click(function() {
        $(this).parents(".carousel_two-n").find(".owl-next").click();
    });

    $(".nav-prev").click(function() {
        $(this).parents(".carousel_two-n").find(".owl-prev").click();
    });


$('.slider-roomSingle').owlCarousel({
    items: 1,
	autoplay: true,
	autoplaySpeed: 800,
	autoplayTimeout: 3000,
    loop: true,
    center: true,
    margin: 10,
    dots: false,
   	nav: false,
    callbacks: true,
    URLhashListener: true,
    autoplayHoverPause: true,
    startPosition: 'URLHash',

});

$('.slider-thumb').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
	responsiveClass: true,
    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
    responsive: {
        0: {
            items: 2
        },
		 420: {
            items: 3
        },
        1000: {
            items: 5
        }
    }

})


$('.check-in-input').daterangepicker({
    singleDatePicker: true,
    opens: 'right',
    drops: 'down',
});


$('.check-out-input').daterangepicker({
    singleDatePicker: true,
    drops: 'down',
});

$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip();
});

