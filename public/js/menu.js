$(document).ready(function() {
    $('.sub-menu-container').each(function() {
        var total_cols = 0;
        $(this).find('.sub-item2-content').each(function() {
            var cols = parseFloat($(this).data('cols'));
            if (total_cols == 0) {
                $(this).css('clear', 'left')
            }
            total_cols += cols;
            if (total_cols > 12) {
                $(this).css('clear', 'left');
                total_cols = cols
            }
            if (total_cols == 12) {
                total_cols = 0
            }
        })
    });
    $('.vertical-menu .tt-menu-bar').click(function() {
        var effect = $(this).closest('.tt-menu').find('.menu-effect').val();
        if (effect == "none") {
            $('.vertical-menu .ul-top-items').toggle()
        }
        if (effect == "fade") {
            $('.vertical-menu .ul-top-items').fadeToggle()
        }
        if (effect == "slide") {
            $('.vertical-menu .ul-top-items').slideToggle()
        }
    });
    $('.a-plus').click(function() {
        var effect = $(this).closest('.tt-menu').find('.menu-effect').val();
        if (effect == "none") {
            $('.li-plus').hide();
            $('.over').show()
        }
        if (effect == "fade") {
            $('.li-plus').fadeOut();
            $('.over').fadeIn()
        }
        if (effect == "slide") {
            $('.li-plus').slideUp();
            $('.over').slideDown()
        }
    });
    $('.a-minus').click(function() {
        var effect = $(this).closest('.tt-menu').find('.menu-effect').val();
        if (effect == "none") {
            $('.over').hide();
            $('.li-plus').show()
        }
        if (effect == "fade") {
            $('.over').fadeOut();
            $('.li-plus').fadeIn()
        }
        if (effect == "slide") {
            $('.over').slideUp();
            $('.li-plus').slideDown()
        }
    });
    $('.tt-menu .sub-menu-container').each(function() {
        var menu = $('.tt-menu').offset();
        var dropdown = $(this).parent().offset();
        var i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('.tt-menu').outerWidth());
        if (i > 0) {
            $(this).css('margin-left', '-' + (i + 10) + 'px')
        }
    })


	
$(document).ready(function() {

    if (!$("body").is('.common-home')) {
        $(".TT-panel-heading").removeClass("default-open");
        $(".TT-panel-heading").addClass("current-close");
    }
 

   $('.TT-panel-heading').click(function() {
    if($(this).hasClass('default-open') && $(window).width() < 992){
      if($(this).hasClass('current-close')) {
        $(this).addClass("current-open");
        $('body').addClass("menu-current-open");
        $(this).removeClass("current-close");
        $('.tt-menu ul.ul-top-items').slideToggle("2000");
      } else {
        $(this).removeClass("default-open");
        $(this).addClass("current-open");
        $('body').addClass("menu-current-open");
        $(this).removeClass("current-close");
        $('.tt-menu ul.ul-top-items').slideToggle("2000");
      }    
    }else if($(this).hasClass('default-open')){
      if($(this).hasClass('current-close')) {
        $(this).addClass("current-open");
        $('body').addClass("menu-current-open");
        $(this).removeClass("current-close");
        $('.tt-menu ul.ul-top-items').slideToggle("2000");
      } else if($(this).hasClass('current-open')) {
        $(this).addClass("current-close");
        $(this).removeClass("current-open");
        $('body').removeClass("menu-current-open");
        $('.tt-menu ul.ul-top-items').slideToggle("2000");
      }
    }
    else{
      if($(this).hasClass('current-open')) {
        $(this).addClass("current-close");
        $('body').removeClass("menu-current-open");
        $(this).removeClass("current-open");
        $('.tt-menu ul.ul-top-items').slideToggle("2000");
      } else{
        $(this).addClass("current-open");
        $(this).removeClass("current-close");
        $('body').addClass("menu-current-open");
        $('.tt-menu ul.ul-top-items').slideToggle("2000");
      }
    }
    if($(this).hasClass('default-open') && !$('.full-header').hasClass('fixed')) {
      $(this).addClass("current-close");
      $(this).removeClass("default-open");
      $('.tt-menu ul.ul-top-items').slideToggle("2000");
    }	
    if($(this).hasClass('default-open') && $('.full-header').hasClass('fixed')) {
      $(this).addClass("current-open");
      $('body').addClass("menu-current-open");
      $(this).removeClass("default-open");
      $('.tt-menu ul.ul-top-items').slideDown("2000");
    }
  });
});

function menuMaxItem() {
    if($(document).width() <= 1199){
        var max_elem = 6;
    } else if ($(document).width() <= 1366) {
        var max_elem = 8;
    } else {
        var max_elem = 11;
    }
    var menu = $('.main-category-list .tt-menu  ul.ul-top-items > li');	
    if ( menu.length > max_elem ) {
    $('.main-category-list .tt-menu ul.ul-top-items').append('<li class="more"><div class="more-menu"><span class="categories">More</span></div></li>');
    }
    
    $('.main-category-list .tt-menu ul.ul-top-items .more-menu').click(function() {
    if ($(this).hasClass('active')) {
    menu.each(function(j) {
    if ( j >= max_elem ) {
    $(this).slideUp(200);
    }
    });
    $(this).removeClass('active');
    $('.more-menu').html('<span class="categories">More</span>');
    } else {
    menu.each(function(j) {
    if ( j >= max_elem  ) {
    $(this).slideDown(200);
    }
    });
    $(this).addClass('active');
    $('.more-menu').html('<span class="categories">Less</span>');
    }
    });
    
    menu.each(function(j) {
    if ( j >= max_elem ) { 
    $(this).css('display', 'none');
    }
    });
}
$(document).ready(function() {
menuMaxItem();
});
$(window).resize(function() {
//    menuMaxItem();
});

function menuClass() {
	if($( window ).width() > 991) {
		$( ".main-category-list" ).addClass( "left-menu" );
	}
	else {
		$(".main-category-list").removeClass('left-menu');
		
	}
}
$(document).ready(function(){menuClass();});
$(window).resize(function() {menuClass();});
	

/* --------------- End Sticky-header JS ---------------*/

	
	/*jQuery('.main-category-list .TT-panel-heading').click(function(event) {
        jQuery(this).toggleClass('active');
        //jQuery("body #page").toggleClass("menu_hover");
        event.stopPropagation();
        jQuery('.main-category-list .tt-menu-bar ul.ul-top-items').slideToggle("2000");
    });*/

    $(".main-category-list .tt-menu > ul > li").hover(
		function () {
			$("body").addClass("menu_hover");
		},
		function () {
			$("body").removeClass("menu_hover");
		}
	);



});

function menuToggle() {
    if ($(window).width() < 992) {
        //$(".header_style2 .full-bottom .main-category-list").appendTo(".full-header > .container");
			
        //$(".main-category-list .horizontal-menu ul.ul-top-items").css('display', 'none');
        $(".main-category-list ul.ul-top-items li.mega-menu > i").remove();
        $(".main-category-list ul.ul-top-items li.more-menu > i").remove();
        /*$(".main-category-list .TT-panel-heading").unbind("click");
        $('.main-category-list .TT-panel-heading').click(function() {
            $(this).parent().toggleClass('TTactive').find('ul.ul-top-items').slideToggle("fast")
        });*/
        $(".main-category-list ul.ul-top-items > li.mega-menu > a").after("<i class='material-icons'></i>");
        $(".main-category-list ul.ul-top-items > li.more-menu > a").after("<i class='material-icons'></i>");
        $(".main-category-list ul.ul-top-items > li.li-top-item > i").unbind("click");
        $(".main-category-list ul.ul-top-items > li.li-top-item > i").click(function() {
            $(this).parent().toggleClass("active").find(".sub-menu-container").first().slideToggle()
        })
    } else {
        $(".header_default .full-header > .container > .main-category-list").prependTo (".full-bottom > .container");
        $(".header_style1 .full-header > .container > .main-category-list").prependTo (".full-bottom > .container");
       // $(".main-category-list .horizontal-menu ul.ul-top-items").css('display', 'block');
        $(".main-category-list ul.ul-top-items li.li-top-item > i").unbind("click");
        $(".main-category-list ul.ul-top-items li.li-top-item > i").removeClass("active");
    }
}
$(window).resize(function() {
    menuToggle()
});
$(document).ready(function() {
    menuToggle()
});
