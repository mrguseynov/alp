<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]>
<html dir="ltr" lang="en" class="ie8">
   <![endif]-->
   <!--[if IE 9 ]>
   <html dir="ltr" lang="en" class="ie9">
      <![endif]-->
      <!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="My Store" />
        <link href="image/cart.png" rel="icon" />
        <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <link href='https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" media="screen" />
        <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" media="screen" />
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen" />
        <link href="{{ asset('css/stylesheet.css') }}" rel="stylesheet">
        <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/ttblogstyle.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/ttcountdown.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/category-feature.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/newsletter.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/ttcolumn.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/ttheader-footer-setting.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/slick-slider.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/lightbox.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/swiper.min.css') }}" type="text/css" rel="stylesheet" media="screen" />
        <link href="{{ asset('css/opencart.css') }}" type="text/css" rel="stylesheet" media="screen" />
        <script src="{{ asset('js/common.js') }}"></script>

        <script src="{{ asset('js/menu.js') }}"></script>
        <script src="{{ asset('js/addonScript.js') }}"></script>
        <script src="{{ asset('js/lightbox-2.6.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="{{ asset('js/tt_quickview.js') }}"></script>
        <script src="{{ asset('js/theia-sticky-sidebar.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>
        <script src="{{ asset('js/ttcountdown.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/ttheader-footer-setting.js') }}"></script>
        <script src="{{ asset('js/ttcolumn.js') }}"></script>
        <script src="{{ asset('js/inview.js') }}"></script>
        <script src="{{ asset('js/jquery.bpopup.min.js') }}"></script>
        <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>

        <script src="{{ asset('js/swiper.jquery.js') }}"></script>
        <script src="{{ asset('js/jquery.bpopup.min.js') }}"></script>
        <script src="{{ asset('js/jquery.cookie.js') }}"></script>
        <script src="{{ asset('js/ttcountdown.js') }}"></script>
    </head>
    <body class="common-home header_style2 product_btn_style1 product_pagination productlayout_default responsive_style1    ">
        <div id="page">
            <div class="ttloading-bg"></div>
            @include('layouts.web.header')
            @yield('content')
            @include('layouts.web.footer')
        </div>
        <script><!--
            var tt_live_search = {
                selector: '#header-search input[name=\'search\']',
                text_no_matches: '',
                height: '50px'
            }

            $(document).ready(function() {
                var html = '';
                html += '<div class="live-search">';
                html += '	<ul>';
                html += '	</ul>';
                html += '<div class="result-text"></div>';
                html += '</div>';

                //$(tt_live_search.selector).parent().closest('div').after(html);
                $(tt_live_search.selector).after(html);

                $(tt_live_search.selector).autocomplete({
                    'source': function(request, response) {
                        var filter_name = $(tt_live_search.selector).val();
                        var cat_id = 0;
                        var module_tt_live_search_min_length = '1';
                        if (filter_name.length < module_tt_live_search_min_length) {
                            $('.live-search').css('display','none');
                            $('body').removeClass('search-open');
                        }
                        else{
                            var html = '';
                            html += '<li style="text-align: center;height:10px;">';
                            html +=	'<img class="loading" src="image/loading.gif" />';
                            html +=	'</li>';
                            $('.live-search ul').html(html);
                            $('.live-search').css('display','block');
                            $('body').addClass('search-open');

                            $.ajax({
                                url: 'index.php?route=extension/module/tt_live_search&filter_name=' +  encodeURIComponent(filter_name),
                                dataType: 'json',
                                success: function(result) {
                                    var products = result.products;
                                    $('.live-search ul li').remove();
                                    $('.result-text').html('');
                                    if (!$.isEmptyObject(products)) {
                                        var show_image = 1;
                                        var show_price = 1;
                                        var show_description = 0;
                                        $('.result-text').html('<a href="https://link.ge/Opencart/OPCTM01/OPCTM010_techyguy/OPC01/index.php?route=product/search&amp;search='+filter_name+'" class="view-all-results">     View all results      ('+result.total+')</a>');

                                        $.each(products, function(index,product) {
                                            var html = '';

                                            html += '<li>';
                                            html += '<a href="' + product.url + '" title="' + product.name + '">';
                                            if(product.image && show_image){
                                                html += '	<div class="product-image col-sm-3 col-xs-4"><img alt="' + product.name + '" src="' + product.image + '"></div>';
                                            }
                                            html += '<div class="search-description col-sm-9 col-xs-8">';
                                            html += '	<div class="product-name">' + product.name ;
                                            if(show_description){
                                                html += '<p>' + product.extra_info + '</p>';
                                            }
                                            html += '</div>';
                                            if(show_price){
                                                if (product.special) {
                                                    html += '	<div class="product-price"><span class="price">' + product.special + '</span><span class="special">' + product.price + '</span></div>';
                                                } else {
                                                    html += '	<div class="product-price"><span class="price">' + product.price + '</span></div>';
                                                }
                                            }
                                            html += '</div>';
                                            html += '<span style="clear:both"></span>';
                                            html += '</a>';
                                            html += '</li>';
                                            $('.live-search ul').append(html);
                                        });
                                    } else {
                                        var html = '';
                                        html += '<li style="text-align: center;height:10px;">';
                                        html +=	tt_live_search.text_no_matches;
                                        html +=	'</li>';

                                        $('.live-search ul').html(html);
                                    }
                                    $('.live-search').css('display','block');
                                    $('body').addClass('search-open');
                                    return false;
                                }
                            });
                        }
                    },
                    'select': function(product) {
                        $(tt_live_search.selector).val(product.name);
                    }
                });

                $(document).bind( "mouseup touchend", function(e){
                var container = $('.live-search');
                if (!container.is(e.target) && container.has(e.target).length === 0)
                {
                    container.hide();
                }
                });
            });
            //-->
        </script>
    </body>
</html>







