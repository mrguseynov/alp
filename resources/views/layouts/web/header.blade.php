<div class="ttloading-bg"></div>
<div id="header-sticky" class="header-sticky header_sticky_on">
    <div id="header-layout" class="header_style2 header-layout">
        <header>
        <div class="header">
            <div id="top">
                <div class="container">
                    <div class="header-top-left col-sm-6">
                    <div class="header-top-cms">
                        <aside id="header-top">
                            <div class="html-content">
                                <div class="box-content">
                                <div id="ttcmsheader">
                                    <div class="ttheader-service">World's Fastest Online Shopping Destination</div>
                                </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    </div>
                    <div class="header-top-right col-sm-6">
                    <div class="ttlanguage">
                        <div class="pull-left">
                            <div id="form-language">
                                <div class="btn-group">
                                    <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ asset('images/flags/'.app()->getLocale().'.svg') }}" alt="English" title="English">
                                    <span class="hidden-xs hidden-sm hidden-md">Language</span>&nbsp;<i class="material-icons"></i></button>
                                    <ul>
                                        @foreach (config('app.available_locales') as $language => $locale)

                                            <li>
                                                <a href="/{{$locale}}" class="btn btn-link btn-block language-select @if ( $locale == app()->getLocale())selected @endif">
                                                    <img src="{{ asset('images/flags/'.$locale.'.svg') }}" alt="{{$language}}" title="{{$language}}" />
                                                    {{$language}}
                                                </a>
                                            </li>


                                        @endforeach

                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="ttcurrency">
                        <div class="pull-left">
                            <form action="#" method="post" enctype="multipart/form-data" id="form-currency">
                                <div class="btn-group">
                                <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">                               <strong>$</strong>        <span class="hidden-xs hidden-sm hidden-md">Currency</span>&nbsp;<i class="material-icons"></i></button>
                                <ul>
                                    <li>
                                        <button class="currency-select btn btn-link btn-block " type="button" name="EUR">€ Euro</button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link btn-block " type="button" name="GBP">£ Pound Sterling</button>
                                    </li>
                                    <li>
                                        <button class="currency-select btn btn-link btn-block selected" type="button" name="USD">$ US Dollar</button>
                                    </li>
                                </ul>
                                </div>
                                <input type="hidden" name="code" value="" />
                                <input type="hidden" name="redirect" value="#" />
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="full-header">
                <div class="container">
                    <div class="header-left">
                    <div id="logo">
                        <a href="#"><img src="{{ asset('images/items/logo.png') }}" title="Your Store" alt="Your Store" class="img-responsive" /></a>
                    </div>
                    <div id="mobile-logo">
                        <a href="#"><img src="{{ asset('images/items/logo.png') }}g" title="Your Store" alt="Your Store" class="mobile-logo" /></a>
                    </div>
                    </div>
                    <div class="search-icon col-sm-5">
                    <div class="header-bottom">
                        <aside id="header-bottom">
                            <div class="html-content">
                                <div class="box-content">
                                <div id="ttcmstopservices">
                                    <div class="tttopservices">
                                        <ul class="ttlink-main">
                                            <li><a href="#"><span class="ttlink link1" title="Offer Zone">Offer Zone</span></a></li>
                                            <li><a href="#"><span class="ttlink link2" title="Track Order">Track Order</span></a></li>
                                            <li><a href="#"><span class="ttlink link3" title="Best Salling items">Best Selling items</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="search col-sm-6">
                        <div id="header-search" class="input-group">
                            <select name="category_id" class="form-control innner-search">
                                <option value="0">Categories</option>
                                <option value="20">Tablets</option>
                                <option value="26">&nbsp;&nbsp;&nbsp;&nbsp;Headphones</option>
                                <option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On-Ear</option>
                                <option value="114">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earbuds</option>
                                <option value="115">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open-Back</option>
                                <option value="27">&nbsp;&nbsp;&nbsp;&nbsp;Ipods</option>
                                <option value="117">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Speakers</option>
                                <option value="118">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nikon</option>
                                <option value="119">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Canon</option>
                                <option value="87">&nbsp;&nbsp;&nbsp;&nbsp;Subwoofers</option>
                                <option value="92">&nbsp;&nbsp;&nbsp;&nbsp;Gadgets</option>
                                <option value="25">Electronics</option>
                                <option value="98">&nbsp;&nbsp;&nbsp;&nbsp;Mobile</option>
                                <option value="101">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTC</option>
                                <option value="100">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Samsung</option>
                                <option value="102">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vivo</option>
                                <option value="120">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oppo</option>
                                <option value="121">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nokia</option>
                                <option value="99">&nbsp;&nbsp;&nbsp;&nbsp;Computer</option>
                                <option value="103">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dell</option>
                                <option value="105">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desktops</option>
                                <option value="104">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laptop stand</option>
                                <option value="122">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lenovo</option>
                                <option value="123">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Keyboards</option>
                            </select>
                            <input type="text" name="search" value="" placeholder="Search" class="form-control input-lg" />
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-default btn-lg header-search-btn"><i class="material-icons icon-search">search</i>
                            <span>Search</span>
                            </button>
                            </span>
                        </div>
                        <script>
                            $('#header-search button.header-search-btn').bind('click', function() {
                            url = 'index.php?route=product/search';

                            var search = $('#header-search input[name=\'search\']').prop('value');

                            if (search) {
                                url += '&search=' + encodeURIComponent(search);
                            }

                            var category_id = $('#header-search select[name=\'category_id\']').prop('value');

                            if (category_id > 0) {
                                url += '&category_id=' + encodeURIComponent(category_id);
                            }

                                url += '&sub_category=true';
                                url += '&description=true';

                            //alert (url);
                            location = url;
                            });

                            $('#header-search input[name=\'search\']').bind('keydown', function(e) {
                            if (e.keyCode == 13) {
                                $('#header-search button.header-search-btn').trigger('click');
                            }
                            });

                        </script>
                    </div>
                    </div>
                    <div class="header-right col-sm-4 col-xs-4">
                    <div class="header-right-cms">
                        <aside id="header-right">
                            <div class="html-content">
                                <div class="box-content">
                                <div class="offer-banner col-sm-4">
                                    <a href="#">
                                    <img src="{{ asset('images/items/header-banner.jpg') }}" alt="banner1">
                                    </a>
                                </div>
                                </div>
                            </div>
                            <div class="html-content">
                                <div class="box-content">
                                <div id="ttcmsheaderservices">
                                    <div class="ttcmsheaderservice">
                                        <div class="service">
                                            <div class="ttsupport_img service-icon1"></div>
                                            <div class="ttservice-content">
                                            <div class="service-title">Save Your Money</div>
                                            <div class="service-desc">Big Weekly Sales</div>
                                            </div>
                                        </div>
                                        <div class="service">
                                            <div class="ttsupport_img service-icon2"></div>
                                            <div class="ttservice-content">
                                            <div class="service-title">Have a Questions?</div>
                                            <div class="service-desc">088-888-888</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    </div>
                </div>
                <div class="full-bottom">
                    <div class="container">
                    <div class="header-bottom-left">
                        <aside id="header-left">
                            <div class="main-category-list left-menu">
                                <div class="cat-menu">
                                <div class="TT-panel-heading @if(Route::is('home'))default-open @else current-close @endif " title="Shop Categories">
                                    <i class='material-icons'>dehaze</i>
                                    <i class='material-icons close-icon'>close</i>
                                    <span>Shop Categories</span>
                                </div>
                                <div class="tt-menu horizontal-menu tt-menu-bar" id="tt-menu-9974">
                                    <ul class="ul-top-items" @if(Route::is('home')) @else style="display:none" @endif>
                                        <li class="li-top-item mega-menu">
                                            <a class="a-top-link" href="#">
                                            <span>Home</span>
                                            </a>
                                            <!-- Mega Menu -->
                                            <div class="mega-menu-container sub-menu-container ">
                                            <div class="col-sm-12 sub-item2-content" data-cols="12">
                                                <h4><strong></strong></h4>
                                                <div class="banner-static static-menu">
                                                    <div class="column layout-1">
                                                        <a href="#">
                                                        <span class="menu-title">
                                                        Electronics
                                                        </span>
                                                        <span class="image">
                                                        <img src="{{ asset('images/items/demo-1.png') }}" alt="image">
                                                        </span>
                                                        </a>
                                                    </div>
                                                    <div class="column layout-2">
                                                        <a href="#">
                                                        <span class="menu-title">
                                                        Electronics v2
                                                        </span>
                                                        <span class="image">
                                                        <img src="{{ asset('images/items/demo-2.png') }}" alt="image">
                                                        </span>
                                                        </a>
                                                    </div>
                                                    <div class="column layout-3">
                                                        <a href="#">
                                                        <span class="menu-title">
                                                        Electronics v3
                                                        </span>
                                                        <span class="image">
                                                        <img src="{{ asset('images/items/demo-3.png') }}" alt="image">
                                                        </span>
                                                        </a>
                                                    </div>
                                                    <div class="column layout-11">
                                                        <a href="#">
                                                        <span class="menu-title">
                                                        Coming Soon
                                                        </span>
                                                        <span class="image">
                                                        <img src="{{ asset('images/items/demo-4.png') }}" alt="image">
                                                        </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- Flyout Menu -->
                                        </li>
                                        <li class="li-top-item mega-menu">
                                            <a class="a-top-link" href="index.php?route=product/category&amp;path=20">
                                            <span>Category</span>
                                            </a>
                                            <!-- Mega Menu -->
                                            <div class="mega-menu-container sub-menu-container ">
                                            <div class="col-sm-6 sub-item2-content"
                                                data-cols="6"  >
                                                <a class="a-mega-second-link" href="#">
                                                    <h4><strong>Category page settings</strong></h4>
                                                </a>
                                                <div class="sub_item3-content">
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>Filter Toggle</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>Off Canvas Left Filter</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>Off Canvas Right Filter</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>Pagination</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>Load More</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>Product Masonary</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 sub-item2-content"
                                                data-cols="6"  >
                                                <a class="a-mega-second-link" href="#">
                                                    <h4><strong>Category page product</strong></h4>
                                                </a>
                                                <div class="sub_item3-content">
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>4 Columns Mode</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>5 Columns Mode</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>6 Columns Mode</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>7 Columns Mode</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=20">
                                                        <h5>8 Columns Mode</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- Flyout Menu -->
                                        </li>
                                        <li class="li-top-item mega-menu">
                                            <a class="a-top-link" href="index.php?route=product/product&amp;product_id=42">
                                            <span>Shop</span>
                                            </a>
                                            <!-- Mega Menu -->
                                            <div class="mega-menu-container sub-menu-container ">
                                            <div class="col-sm-6 sub-item2-content"
                                                data-cols="6"  >
                                                <a class="a-mega-second-link" href="#">
                                                    <h4><strong>Product page layout</strong></h4>
                                                </a>
                                                <div class="sub_item3-content">
                                                    <a class="a-mega-third-link" href="index.php?route=product/product&amp;product_id=42">
                                                        <h5>Product Default</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/product&amp;product_id=42">
                                                        <h5>Product Gallery Slider</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/product&amp;product_id=42">
                                                        <h5>Product Grid Images</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/product&amp;product_id=42">
                                                        <h5>Product With Sticky Details</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/product&amp;product_id=42">
                                                        <h5>Product Compact</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/product&amp;product_id=42">
                                                        <h5>Product Extended</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 sub-item2-content"
                                                data-cols="6"  >
                                                <a class="a-mega-second-link" href="#">
                                                    <h4><strong>Product effect</strong></h4>
                                                </a>
                                                <div class="sub_item3-content">
                                                    <a class="a-mega-third-link" href="index.php?route=common/home">
                                                        <h5>Bottom Product Icon</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=common/home">
                                                        <h5>Bottom Product Icon With Radius</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=common/home">
                                                        <h5>Button Center On Image</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- Flyout Menu -->
                                        </li>
                                        <li class="li-top-item mega-menu">
                                            <a class="a-top-link" href="index.php?route=product/category&amp;path=20">
                                            <span>Tablets</span>
                                            </a>
                                            <!-- Mega Menu -->
                                            <div class="mega-menu-container sub-menu-container ">
                                            <div class="col-sm-4 sub-item2-content" data-cols="4">
                                                <a class="a-mega-second-link" href="index.php?route=product/category&amp;path=99">
                                                    <h4><strong>Computer</strong></h4>
                                                </a>
                                                <div class="sub_item3-content">
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=99_103">
                                                        <h5>Dell</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=99_105">
                                                        <h5>Desktops</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=99_104">
                                                        <h5>Laptop stand</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=99_122">
                                                        <h5>Lenovo</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=99_123">
                                                        <h5>Keyboards</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 sub-item2-content" data-cols="4">
                                                <a class="a-mega-second-link" href="index.php?route=product/category&amp;path=98">
                                                    <h4><strong>Mobile</strong></h4>
                                                </a>
                                                <div class="sub_item3-content">
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=98_101">
                                                        <h5>HTC</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=98_100">
                                                        <h5>Samsung</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=98_102">
                                                        <h5>Vivo</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=98_120">
                                                        <h5>Oppo</h5>
                                                    </a>
                                                    <a class="a-mega-third-link" href="index.php?route=product/category&amp;path=98_121">
                                                        <h5>Nokia</h5>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 sub-item2-content" data-cols="4">
                                                <h4><strong></strong></h4>
                                                <div class="menu-banner">
                                                    <a href="#">
                                                    <img src="{{ asset('images/items/menu-banner.jpg') }}" alt="menu-banner">
                                                    </a>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- Flyout Menu -->
                                        </li>
                                        <li class="li-top-item ">
                                            <a class="a-top-link" href="index.php?route=product/category&amp;path=25">
                                            <span>Electronics</span>
                                            </a>
                                        </li>
                                        <li class="li-top-item ">
                                            <a class="a-top-link" href="index.php?route=product/category&amp;path=20_27">
                                            <span>Ipods</span>
                                            </a>
                                        </li>
                                        <li class="li-top-item ">
                                            <a class="a-top-link" href="index.php?route=product/category&amp;path=99_103">
                                            <span>Dell</span>
                                            </a>
                                        </li>
                                        <li class="li-top-item ">
                                            <a class="a-top-link" href="index.php?route=product/category&amp;path=98_101">
                                            <span>HTC</span>
                                            </a>
                                        </li>
                                        <li class="li-top-item ">
                                            <a class="a-top-link" href="index.php?route=product/category&amp;path=98_102">
                                            <span>Vivo</span>
                                            </a>
                                        </li>
                                        <li class="li-top-item ">
                                            <a class="a-top-link" href="index.php?route=product/category&amp;path=99_122">
                                            <span>Lenovo</span>
                                            </a>
                                        </li>
                                        <li class="li-top-item ">
                                            <a class="a-top-link" href="index.php?route=product/category&amp;path=98_120">
                                            <span>Oppo</span>
                                            </a>
                                        </li>
                                        <li class="li-top-item ">
                                            <a class="a-top-link" href="index.php?route=product/category&amp;path=99_105">
                                            <span>Desktops</span>
                                            </a>
                                        </li>
                                        <li class="li-top-item ">
                                            <a class="a-top-link" href="index.php?route=information/tt_blog/blogs">
                                            <span>Blog</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div id="tttoplink_block">
                        <ul id="tt_toplink" class="block_content">
                            <li class="tttoplink tthome"><a title="home" href="#">Home</a></li>
                            <li class="tttoplink"><a href="index.php?route=product/manufacturer">Brands</a></li>
                            <li class="tttoplink"><a href="index.php?route=account/voucher">Gift Certificates</a></li>
                            <li class="tttoplink"><a href="index.php?route=affiliate/login">Affiliate</a></li>
                            <li class="tttoplink"><a href="index.php?route=information/contact">Contact Us</a></li>
                            <li class="tttoplink"><a href="">Site Map</a></li>
                        </ul>
                    </div>
                    <div class="user-cart">


                        <div class="user-info">
                            <div class="dropdown">
                                <a href="index.php?route=account/account" title="My Account" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="material-icons user">perm_identity</i>
                                <span class="ttuserheading">My Account</span><i class="material-icons expand-more">expand_more</i></a>
                                <ul class="dropdown-menu dropdown-menu-right account-link-toggle">
                                    @if (Route::has('login'))
                                        @auth
                                        <li><a href="{{route('user.profile', app()->getlocale())}}">Profile</a></li>

                                        <li>
                                            <a href="{{ route('logout', app()->getLocale()) }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout', app()->getLocale()) }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>

                                        </li>
                                        @else
                                            <li><a href="{{route('login', app()->getLocale())}}"><i class="material-icons">lock_outline</i> Login</a></li>
                                            @if (Route::has('register'))
                                            <li><a href="{{ route('register', app()->getLocale()) }}"><i class='material-icons reg-person'>perm_identity</i> Register</a></li>
                                            @endif
                                        @endauth
                                    @else

                                    @endif

                                    <li><a href="index.php?route=product/compare" id="compare-total" title="Compare (0)">
                                        <i class="material-icons icon-compare">repeat</i> <span class="hidden-sm hidden-md">Compare (0)</span></a>
                                    </li>
                                    <li><a href="index.php?route=account/wishlist" id="wishlist-total" title="Wish List (0)"><i class="material-icons favorite">favorite_border</i> <span class="hidden-sm hidden-md">Wish List (0)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="cart">
                            <div id="cart" class="btn-group">
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="material-icons shopping-cart">shopping_cart</i>
                                <span class="cart-heading">My Cart</span>
                                <span id="cart-total"><span>Items</span> 0</span>
                                </button>
                                <ul class="dropdown-menu pull-right header-cart-toggle">
                                <li>
                                    <p class="text-center">Your shopping cart is empty!</p>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </header>
    </div>
</div>

<script>
    $(document).ready(function() {
    /* ---------------- start link more menu ----------------------*/
    var max_link = 4;
    var moretext= "More";
    var items = $('#tttoplink_block ul li');
    var surplus = items.slice(max_link, items.length);
    surplus.wrapAll('<li class="more_menu tttoplink"><ul class="top-link clearfix">');
    $('.more_menu').prepend('<a href="#" class="level-top">'+moretext+'</a>');
    $('.more_menu').mouseover(function(){
    $(this).children('ul').addClass('shown-link');
    })
    $('.more_menu').mouseout(function(){
    $(this).children('ul').removeClass('shown-link');
    });

    jQuery("body #tttoplink_block ul.block_content li.more_menu").hover(function() {
            jQuery("body").addClass("menu_hover");
        }, function() {
            jQuery("body").removeClass("menu_hover");
        });


    /* ---------------- End  link more menu ----------------------*/
    });

</script>
