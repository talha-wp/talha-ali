/**
 * Sticky Header
 * Adds a class to header on scroll
 */
import magnificPopup from '../vendors/jquery-magnificpopup';
import organicTabs from '../vendors/organic-tab';
import slick from '../vendors/slick.min';
import owlCarousel from '../vendors/owl.carousel.min';





jQuery( document ).on( 'scroll', function() {
	if ( jQuery( document ).scrollTop() > 0 ) {
		jQuery( 'header, body' ).addClass( 'shrink' );
	} else {
		jQuery( 'header, body' ).removeClass( 'shrink' );
	}
} );

jQuery( function() {
	/**
	 * Header Wrapper Height Calculation for Navigation Overlay
	 */

	if ( jQuery( '.header-wrapper' ).length > 0 ) {
		function updateHeaderHeight() {
			jQuery( '.header-wrapper' ).each( function() {
				jQuery( this ).css( '--dgt_header-wrapper-default', jQuery( this ).outerHeight() + 'px' );
			} );
		}
		updateHeaderHeight();
		jQuery( window ).resize( updateHeaderHeight );
	}

	/**
	 * Toggle menu for mobile
	 */
	const navOverlay = jQuery( '.nav-overlay' );
	const htmlBody = jQuery( 'html, body' );

	jQuery( '.menu-btn' ).on( 'click', function() {
		jQuery( this ).toggleClass( 'active' );
		navOverlay.toggleClass( 'open' );
		htmlBody.toggleClass( 'no-overflow' );
		jQuery( '.header-nav ul li.active' ).removeClass( 'active' );
		jQuery( '.header-nav ul.sub-menu' ).slideUp();
	} );

	/**
	 * Add span tag to multi-level accordion menu for mobile menus
	 */

	jQuery( '.menu-item-has-children > a:first-child' ).each( function() {
		jQuery( this ).after( '<span class="submenu-icon"></span>' );
	} );

	/**
	 * Slide Up/Down internal sub-menu when mobile menu arrow clicked
	 */

	jQuery( '.header-nav' ).on( 'click', '.submenu-icon', function() {
		const parentLi = jQuery( this ).closest( 'li' );

		parentLi.siblings( '.active' )
			.removeClass( 'active' )
			.find( 'ul' ).slideUp();

		parentLi.toggleClass( 'active' ).find( 'ul' ).stop( true, true ).slideToggle();
		parentLi.parents( 'ul' ).toggleClass( 'disabled-menu', parentLi.hasClass( 'active' ) );
	} );

	/**
	 *  Accessibility for Simple menu & Mega menu
	 */
	jQuery( '.menu-item-has-children > a' ).on( 'focus blur', function( event ) {
		jQuery( this ).siblings( '.sub-menu, .mega-menu' ).toggleClass( 'focused', event.type === 'focus' );
	} );

	jQuery( '.sub-menu a, .mega-menu a' ).on( 'focus blur', function( event ) {
		jQuery( this ).closest( '.sub-menu, .mega-menu' ).toggleClass( 'focused', event.type === 'focus' );
	} );

	/**
	 * Script for Accessibility of html Tags
	 */
	jQuery( 'h1, h2, h3, h4, h5, h6,p,li,blockquote,cite,strong,dt,dd,th,td,b,i,u,s,em,small,sup,del,ins,abbr,mark,details,pre,kbd,samp,var,address,code,q,figure,figcaption,caption,.top-bar-text,.top-bar-cross,.copy-right,.post-author-img,.post-author-name,.post-meta-date,.post-date' ).each( function() {
		jQuery( this ).attr( {
			tabindex: 0,
		} );
	} );
	jQuery( '.header-nav li, .blog-nav li, .footer-nav li, .legal-nav li' ).each( function() {
		const link = jQuery( this ).find( 'a' );
		if ( link.length > 0 ) {
			jQuery( this ).removeAttr( 'tabindex' );
		} else {
			jQuery( this ).attr( 'tabindex', '0' );
		}
	} );
	jQuery( 'form p' ).each( function() {
		jQuery( this ).removeAttr( 'tabindex' );
	} );

	jQuery( 'a,button:not([href])' ).each( function() {
		jQuery( this ).attr( {
			tabindex: 0,
		} );
	} );

	setTimeout( () => {
		jQuery( '#daextlwcnf-cookie-notice-button-1' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-notice-button-2' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-settings-button-1' ).attr( 'role', 'button' );
		jQuery( '#daextlwcnf-cookie-settings-button-2' ).attr( 'role', 'button' );
	}, 500 );

	autosize();
	function autosize() {
		const text = jQuery( 'textarea' );

		text.each( function() {
			jQuery( this ).attr( 'rows', 5 );
			resize( jQuery( this ) );
		} );

		text.on( 'input', function() {
			resize( jQuery( this ) );
		} );

		function resize( $text ) {
			$text.css( 'min-height', 'auto' );
			$text.css( 'min-height', $text[ 0 ].scrollHeight + 'px' );
		}
	}
} );


// ====================================================================
// Slider JS 
// ====================================================================



jQuery(document).ready(function ($) {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots:false,
        autoplay: true,
        smartSpeed: 1000,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 7
            }
        }
    });
});


// ====================================================================
// Accordion JS 
// ====================================================================


(function () {
    document.querySelectorAll(".accordion-container").forEach(container => {
        const accordions = container.querySelectorAll(".accordions");

        if (accordions[0]) {
            accordions[0].classList.add("active");
            accordions[0].parentElement.classList.add("active"); // <-- parent main-acc pe bhi active
            accordions[0].nextElementSibling.style.maxHeight = accordions[0].nextElementSibling.scrollHeight + "px";
        }

        accordions.forEach(accordion => {
            accordion.addEventListener("click", () => {
                const isActive = accordion.classList.contains("active");

                accordions.forEach(acc => {
                    acc.classList.remove("active");
                    acc.parentElement.classList.remove("active"); // <-- parent se bhi remove
                    acc.nextElementSibling.style.maxHeight = null;
                });

                if (!isActive) {
                    accordion.classList.add("active");
                    accordion.parentElement.classList.add("active"); // <-- parent main-acc ko add
                    accordion.nextElementSibling.style.maxHeight = accordion.nextElementSibling.scrollHeight + "px";
                }
            });
        });
    });
})();





// ====================================================================
// MODEL JS 
// ====================================================================

function openModal(modalId) {
    // Guard: ignore empty or "#" which breaks jQuery selector
    if (!modalId || modalId === "" || modalId === "#") {
        return;
    }
    // Normalize: accept "myModal" or "#myModal"
    if (modalId.charAt(0) !== "#") {
        modalId = "#" + modalId;
    }
    var $modal = $(modalId);
    if ($modal.length === 0) {
        return; // Modal doesn't exist in DOM
    }
    var $content = $modal.find(".modal-contents");

    $modal.css({
        display: "block",
        overflowY: "auto"
    });

    var viewportHeight = $(window).height();
    var viewportWidth = $(window).width();
    var contentHeight = $content.outerHeight();
    var contentWidth = $content.outerWidth();

    var topPosition = contentHeight < viewportHeight
        ? (viewportHeight - contentHeight) / 2
        : 20;

    var leftPosition = (viewportWidth - contentWidth) / 2;

    $content.css({
        position: "absolute",
        top: "0px",
        left: leftPosition + "px",
        opacity: 0,
        maxHeight: "90vh",
        overflowY: "auto"
    });

    setTimeout(function () {
        $content.css({
            transition: "top 0.5s, opacity 0.5s",
            top: topPosition + "px",
            opacity: 1,
        });
    }, 10);
}


function closeModal(modalId) {
    var $modal = $("#" + modalId);
    var $content = $modal.find(".modal-contents");

    $content.css({
        transition: "top 0.5s, opacity 0.5s",
        opacity: 0,
        top: "0px",
    });

    setTimeout(function () {
        $modal.css("display", "none");
    }, 500);
}

$(document).ready(function () {

    $("a[href^='#']").on("click", function (event) {
        var href = $(this).attr("href") || "";
        // Ignore placeholder links like href="#"
        if (href === "#") {
            event.preventDefault();
            return;
        }
        
        // Only treat links as modals if the target modal actually exists
        if (href.charAt(0) === "#" && href.length > 1 && $(href).length) {
        event.preventDefault();
            openModal(href);
        }
    });

    $(window).on("click", function (event) {
        $(".styles-modal").each(function () {
            var $modal = $(this);
            if ($(event.target).is($modal)) {
                closeModal($modal.attr("id"));
            }
        });
    });
});

$(document).ready(function () {
    $(".close-btns").on("click", function () {
        var $modal = $(this).closest(".styles-modal");
        stopIframeVideo($modal);
    });

    $(window).on("click", function (event) {
        $(".styles-modal").each(function () {
            var $modal = $(this);
            if ($(event.target).is($modal)) {
                stopIframeVideo($modal);
            }
        });
    });

    function stopIframeVideo($modal) {
        $modal.find("iframe").each(function () {
            var $iframe = $(this);
            var src = $iframe.attr("src");
            $iframe.attr("src", "");
            setTimeout(function () {
                $iframe.attr("src", src);
            }, 500);
        });
    }
});


// ====================================================================
// CLOSE MODAL JS (SEPARATE)
// ====================================================================

$(document).ready(function () {

    $(".close-btns").on("click", function (e) {
        e.stopPropagation(); // window click conflict avoid

        var modalId = $(this).data("modal");
        closeModal(modalId);
    });

});




// ====================================================================
// LIGHTBOX JS 
// ====================================================================

document.addEventListener('DOMContentLoaded', () => {
    if (document.querySelector('.portfolio-lightbox')) {
        const portfolioLightbox = GLightbox({
            selector: '.portfolio-lightbox'
        });
    }
});


