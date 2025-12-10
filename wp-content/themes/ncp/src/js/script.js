/* Header */
$(function () {
	// 	/** 1.1 GET AND ADD HEADER IN STICKY HEADER */
	var headerContent = $(".header-content").clone();
	$(".sticky-header .header .container").html(headerContent);

	function closeDropdownMenu() {
		$(".menu-item-has-children ul").slideUp();
		$(".menu-item-has-children").removeClass("current-menu-item");
	}

	function showDropdownMenu($link) {
		let $li = $link.parent("li");

		$(".menu-item-has-children")
			.not($li)
			.removeClass("current-menu-item")
			.children("ul")
			.slideUp();

		$li.toggleClass("current-menu-item");
		$li.children("ul").stop(true, true).slideToggle();
	}

	$(".menu-item-has-children > a").on("click", function (e) {
		e.preventDefault();
		showDropdownMenu($(this));
	});

	// Close when clicking outside
	$(document).on("click", function (e) {
		if (!$(e.target).closest(".menu-item-has-children").length) {
			closeDropdownMenu();
		}
	});

	function closeHamMenu() {
		$(".primary-menu").removeClass("active");
	}

	$(".ham").on("click", function (e) {
		e.preventDefault();
		$(".primary-menu").addClass("active");
	});

	$(".close-ham").on("click", function (e) {
		e.preventDefault();
		closeHamMenu();
	});

	$(".primary-menu").on("click", function (e) {
		if (!$(e.target).closest(".primary-menu-wrapper").length) {
			closeHamMenu();
		}
	});

	/** KEYBOARD CONTROLLER*/
	$(document).on("keydown", function (e) {
		if (e.key === "Escape" || e.keyCode === 27) {
			closeHamMenu();
			closeDropdownMenu();
			$(".active").removeClass("active");
			body.removeClass("overflow-hidden");
		}
	});

	/** STICKY MENU ON SCROLL */
	let lastScrollY = window.scrollY;

	$(window).on("scroll", function () {
		let currentScrollY = window.scrollY;
		let hasStickyTab = $(".sticky-tab").length > 0;

		if (!hasStickyTab) {
			if (currentScrollY > 200 && currentScrollY < lastScrollY) {
				$(".sticky-header").addClass("active");
				$(".toc-wrapper").css("top", "70px");
				$("button.search").show();
				// ----
			} else {
				$(".sticky-header").removeClass("active");
				$(".toc-wrapper").css("top", "0");
				$("button.search").hide();
			}
		}

		lastScrollY = currentScrollY;

		if (hasStickyTab && currentScrollY > window.innerHeight) {
			$(".sticky-tab").addClass("active");
			$(".tour-detail-aside").css("top", "10rem");
		} else {
			$(".sticky-tab").removeClass("active");
		}

		if (currentScrollY > window.innerHeight) {
			$(".back-to-top").show().addClass("d-flex");
		} else {
			$(".back-to-top").hide().removeClass("d-flex");
		}
	});

	$(window).on("scroll", function () {
		const isMobile = $(window).width() < 991;
		const blogMain = document.querySelector(".blog-main");

		if (!blogMain || !isMobile) return;

		const rect = blogMain.getBoundingClientRect();

		// Check if .blog-main is visible in the viewport
		const isVisible = rect.top < window.innerHeight && rect.bottom > 0;

		if (isVisible) {
			$(".toc-wrapper").slideDown();
		} else {
			$(".toc-wrapper").slideUp();
		}
	});
});

// testimonial slider
$(".testimonial-slider .slider-for").slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: ".testimonial-slider .slider-nav",
});
$(".testimonial-slider .slider-nav").slick({
	slidesToShow: 7,
	slidesToScroll: 1,
	asNavFor: ".testimonial-slider .slider-for",
	arrows: false,
	infinite: false,
	focusOnSelect: true,
	responsive: [
		{
			breakpoint: 992, // < 992px
			settings: { slidesToShow: 5 },
		},
		{
			breakpoint: 768, // < 768px
			settings: { slidesToShow: 3 },
		},
	],
});

// partners slider
$(".partners-slider").slick({
	slidesToShow: 7,
	slidesToScroll: 1,
	autoplay: true,
	speed: 3000,
	autoplaySpeed: 0,
	cssEase: "linear",
	infinite: true,
	pauseOnHover: true,
	arrows: false,

	responsive: [
		{
			breakpoint: 475,
			settings: {
				slidesToShow: 2,
			},
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
			},
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
			},
		},
		{
			breakpoint: 1199,
			settings: {
				slidesToShow: 6,
			},
		},
	],
});

/* Past Speaker Slider */
$(".past-speaker-slider").slick({
	slidesToShow: 5,
	slidesToScroll: 1,
	cssEase: "linear",
	arrows: true,
	// centerMode: true,
	nextArrow: $(".past-speaker .next"),
	prevArrow: $(".past-speaker .prev"),
	infinite: false,

	responsive: [
		{
			breakpoint: 525,
			settings: {
				slidesToShow: 2,
			},
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 3,
			},
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
			},
		},
	],
});

/* speaker-testimonial-slider */
$(".speaker-testimonial-slider").slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	cssEase: "linear",
	arrows: true,
	nextArrow: $(".speaker-testimonial .next"),
	prevArrow: $(".speaker-testimonial .prev"),
	infinite: false,

	responsive: [
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
			},
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 3,
			},
		},
	],
});

// Our journey slider
$(".our-journey-slider .slider-for").slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	asNavFor: ".our-journey-slider .slider-nav",
	vertical: true,
	verticalSwiping: true,
	infinite: false,
	adaptiveHeight: true,
	centerMode: false,
});

$(".our-journey-slider .slider-nav").slick({
	slidesToShow: 6,
	slidesToScroll: 1,
	asNavFor: ".our-journey-slider .slider-for",
	vertical: true,
	dots: false,
	// centerMode: true,
	centerMode: false,
	focusOnSelect: true,
	arrows: false,
	infinite: false,
	verticalSwiping: true,
});

/* For blog chapters */
$(function () {
	const $menuLinks = $(".blog-chapters a[data-scroll]");
	const sectionIds = $menuLinks
		.map(function () {
			return $(this).data("scroll");
		})
		.get();

	function setActive() {
		let scrollPos = $(window).scrollTop();

		let currentId = sectionIds[0];

		for (let i = 0; i < sectionIds.length; i++) {
			const $section = $("#" + sectionIds[i]);
			if ($section.length) {
				if (scrollPos >= $section.offset().top - 100) {
					currentId = sectionIds[i];
				} else {
					break;
				}
			}
		}

		$(".blog-chapters li").removeClass("active");
		$menuLinks
			.filter("[data-scroll='" + currentId + "']")
			.parent("li")
			.addClass("active");
	}

	// Run on scroll + page load
	$(window).on("scroll", setActive);
	setActive();

	// Smooth scroll on click
	$menuLinks.on("click", function (e) {
		e.preventDefault();
		const targetId = $(this).data("scroll");
		const $target = $("#" + targetId);

		if ($target.length) {
			$("html, body").animate({ scrollTop: $target.offset().top - 80 }, 500);
		}
	});
});

// faq
$(function () {
	$("[data-load-all='faq']").on("click", function (e) {
		e.preventDefault();

		const $button = $(this);
		const $wrapper = $button.parent("div");
		const $hiddenItems = $wrapper.find(".faq-hidden");

		const baseText = $button.data("label-base");
		const hiddenCount = $button.data("hidden-count");
		const hideText = $button.data("label-hide");

		if ($hiddenItems.is(":visible")) {
			$hiddenItems.slideUp(300);
			$button.find(".btn-label").text(`${baseText} (${hiddenCount})`);
		} else {
			$hiddenItems.slideDown(300);
			$button.find(".btn-label").text(hideText);
		}
	});
});
