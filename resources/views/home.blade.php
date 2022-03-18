@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
       <div id="content" class="col-sm-12">
          <div class="tt-category-featured bottom-to-top hb-animate-element">
             <div class="box-heading">
                <h3>Hot Categories</h3>
             </div>
             <div class="ttfcat-items">
                <div class="row">
                   <div class="category-feature tt-carousel">

                      @foreach ($categories->chunk(2) as $cat_chunk)
                        <div class='single-column'>
                            @foreach ( $cat_chunk as $row)
                                <div class="item">
                                    <div class="content">
                                    <div class="image col-xs-5 col-sm-5">
                                        <a href="index.php?route=product/category&amp;path=20">
                                        <img src="{{$row->img}}" alt="Tablets" title="Tablets" class="img-responsive" />
                                        </a>
                                    </div>
                                    <div class="caption col-xs-7 col-sm-7">
                                        <div class="cat-title">
                                            <h4><a href="index.php?route=product/category&amp;path=20">{{$row->title}}</a></h4>
                                        </div>
                                        <div class="description">
                                            {{ \Illuminate\Support\Str::limit($row->description, 150, $end=' ...') }}

                                        </div>
                                        <p class="desc"> {{$row->products_count }} <span>Items</span></p>
                                        <div class="cat-sub">
                                            <ul>
                                                <li><a href="index.php?route=product/category&amp;path=20_26" class="list-group-item">Headphones</a></li>
                                                <li><a href="index.php?route=product/category&amp;path=20_27" class="list-group-item">Ipods</a></li>
                                                <li><a href="index.php?route=product/category&amp;path=20_87" class="list-group-item">Subwoofers</a></li>
                                                <li><a href="index.php?route=product/category&amp;path=20_92" class="list-group-item">Gadgets</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Caption END -->
                                    </div>
                                </div>

                            @endforeach
                        </div>
                      @endforeach
                   </div>
                </div>
             </div>
          </div>
          <div class="ttproduct-main hb-animate-element right-to-left">
             <div class="TTProduct-Tab TT-product-carousel products-list">
                <div class="tthometab">
                   <div class="box-heading tthometab-title">
                      <h3>Trending Products</h3>
                   </div>
                   <div id="TTPTab-0" class="tab-box-heading">
                      <ul class="nav nav-tabs">
                         <li><a href="#tab-latest-0" data-toggle="tab">Latest</a></li>
                         <li><a href="#tab-featured-0" data-toggle="tab">Featured</a></li>
                         <li><a href="#tab-bestseller-0" data-toggle="tab">Bestseller</a></li>
                      </ul>
                   </div>
                </div>
                <div class="tab-content">
                   <div id="tab-latest-0" class="tab-pane row">
                      <div id="owl1" class="products-carousel">






                        @foreach ($products->chunk(2) as $prod_chunk)
                        <div class='single-column'>
                            @foreach ( $prod_chunk as $row)

                            <div class="product-layouts">
                                <div class="product-thumb transition">
                                   <div class="ttimg-bg"></div>
                                   <div class="image">
                                      <a href="" class="">
                                      <img class="image_thumb" src="{{$row->img}}" title="French Door Refrigerator in Fingerprint Resistant Stainless Steel" alt="French Door Refrigerator in Fingerprint Resistant Stainless Steel" />
                                      <img class="image_thumb_swap fade" src="{{$row->img}}" title="French Door Refrigerator in Fingerprint Resistant Stainless Steel" alt="French Door Refrigerator in Fingerprint Resistant Stainless Steel" /> </a>
                                      <div class="button-group">
                                         <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('47');">
                                         <i class="material-icons icon-wishlist">favorite_border</i>
                                         <span title="Add to wishlist">Add to wishlist</span>
                                         <span class="loading"><i class="material-icons">cached</i></span>
                                         </button>
                                         <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('47')">
                                         <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                         </span>
                                         <span class="loading"><i class="material-icons">cached</i></span>
                                         </button>
                                         <button class="btn-compare" title="Add to Compare"  onclick="compare.add('47');">
                                         <i class="material-icons icon-exchange">sync</i>
                                         <span title="Add to Compare">Add to Compare</span>
                                         <span class="loading"><i class="material-icons">cached</i></span>
                                         </button>
                                      </div>
                                      <div class="main-button-group">
                                         <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                         <i class="material-icons quick_view_icon">visibility</i>
                                         <span title="Quick View">Quick View</span>
                                         <span class="loading"><i class="material-icons">cached</i></span>
                                         </button>
                                      </div>
                                   </div>
                                   <div class="thumb-description">
                                      <div class="caption">
                                         <h4><a href="#">{{$row->title}}</a></h4>
                                         <div class="rating no-rating">
                                           {{$row->category->title}}

                                         </div>
                                         <div class="price">
                                            $122.00
                                            <span class="price-tax">Without tax: $100.00</span>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>







                            @endforeach
                        </div>
                      @endforeach



































                      </div>
                   </div>
                   <div id="tab-featured-0" class="tab-pane row">
                      <div id="owl2" class="products-carousel">
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image">
                                  <a href="index.php?route=product/product&amp;product_id=42" class="">
                                  <img class="image_thumb" src="image/01-228x296.jpg" title="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" alt="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" />
                                  <img class="image_thumb_swap fade" src="image/01-02-228x296.jpg" title="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" alt="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('42');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('42')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('42');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=42')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description">
                                  <div class="caption">
                                     <h4><a href="index.php?route=product/product&amp;product_id=42">OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage</a></h4>
                                     <div class="rating">
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price"> 							$122.00
                                        <span class="price-tax">Without tax: $100.00</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image">
                                  <a href="index.php?route=product/product&amp;product_id=28" class="">
                                  <img class="image_thumb" src="image/04-228x296.jpg" title="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" alt="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" />
                                  <img class="image_thumb_swap fade" src="image/04-02-228x296.jpg" title="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" alt="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('28');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('28')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('28');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=28')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description">
                                  <div class="caption">
                                     <h4><a href="index.php?route=product/product&amp;product_id=28">Domestic Gourmet Automatic Espresso Coffee Capsule Machine</a></h4>
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price"> 							$122.00
                                        <span class="price-tax">Without tax: $100.00</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image">
                                  <a href="index.php?route=product/product&amp;product_id=48" class="">
                                  <img class="image_thumb" src="image/18-228x296.jpg" title="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" alt="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" />
                                  <img class="image_thumb_swap fade" src="image/18-02-228x296.jpg" title="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" alt="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('48');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('48')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('48');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=48')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description">
                                  <div class="caption">
                                     <h4><a href="index.php?route=product/product&amp;product_id=48">Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit</a></h4>
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price"> 							$122.00
                                        <span class="price-tax">Without tax: $100.00</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image">
                                  <a href="index.php?route=product/product&amp;product_id=29" class="">
                                  <img class="image_thumb" src="image/13-228x296.jpg" title="MSI 27&quot; Modern AM271P All-in-One Desktop Computer (White)" alt="MSI 27&quot; Modern AM271P All-in-One Desktop Computer (White)" />
                                  <img class="image_thumb_swap fade" src="image/13-02-228x296.jpg" title="MSI 27&quot; Modern AM271P All-in-One Desktop Computer (White)" alt="MSI 27&quot; Modern AM271P All-in-One Desktop Computer (White)" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('29');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('29')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('29');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=29')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description">
                                  <div class="caption">
                                     <h4><a href="index.php?route=product/product&amp;product_id=29">MSI 27&quot; Modern AM271P All-in-One Desktop Computer (White)</a></h4>
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price"> 							$337.99
                                        <span class="price-tax">Without tax: $279.99</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image">
                                  <a href="index.php?route=product/product&amp;product_id=49" class=" disabled ">
                                  <img class="image_thumb" src="image/20-228x296.jpg" title="Jmdi Power Bank Mi First Copy No Replacement 10400mah" alt="Jmdi Power Bank Mi First Copy No Replacement 10400mah" />
                                  <img class="image_thumb_swap fade" src="image/20-02-228x296.jpg" title="Jmdi Power Bank Mi First Copy No Replacement 10400mah" alt="Jmdi Power Bank Mi First Copy No Replacement 10400mah" />
                                  </a>
                                  <div class="btn-outofcart  disabled ">
                                     <span class="out of stock">Out Of Stock</span>
                                  </div>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('49');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart  disabled " type="button" title="Out Of Stock" onclick=""
                                        >
                                     <i class="material-icons">shopping_cart</i><span class="out of stock">Out Of Stock
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('49');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=49')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description">
                                  <div class="caption">
                                     <h4><a href="index.php?route=product/product&amp;product_id=49">Jmdi Power Bank Mi First Copy No Replacement 10400mah</a></h4>
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price"> 							$241.99
                                        <span class="price-tax">Without tax: $199.99</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div id="tab-bestseller-0" class="tab-pane row">
                      <div id="owl3" class="products-carousel">
                         <div class='single-column'>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=40" class="">
                                     <img class="image_thumb" src="image/19-228x296.jpg" title="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" alt="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" />
                                     <img class="image_thumb_swap fade" src="image/19-02-228x296.jpg" title="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" alt="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('40');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('40')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('40');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=40')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=40">Bose Home Speaker 300, with Amazon Alexa Built-in, Silver</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$123.20
                                           <span class="price-tax">Without tax: $101.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=41" class="">
                                     <img class="image_thumb" src="image/05-228x296.jpg" title="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" alt="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" />
                                     <img class="image_thumb_swap fade" src="image/05-02-228x296.jpg" title="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" alt="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('41');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('41')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('41');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=41')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=41">Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone</a></h4>
                                        <div class="rating">
                                           <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                           <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                           <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                           <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$122.00
                                           <span class="price-tax">Without tax: $100.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class='single-column'>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=45" class="">
                                     <img class="image_thumb" src="image/11-228x296.jpg" title="Fully-Automatic Front Loading Washing Machine" alt="Fully-Automatic Front Loading Washing Machine" />
                                     <img class="image_thumb_swap fade" src="image/11-02-228x296.jpg" title="Fully-Automatic Front Loading Washing Machine" alt="Fully-Automatic Front Loading Washing Machine" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('45');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('45')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('45');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=45')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=45">Fully-Automatic Front Loading Washing Machine</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$2,000.00
                                           <span class="price-tax">Without tax: $2,000.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=47" class="">
                                     <img class="image_thumb" src="image/03-228x296.jpg" title="French Door Refrigerator in Fingerprint Resistant Stainless Steel" alt="French Door Refrigerator in Fingerprint Resistant Stainless Steel" />
                                     <img class="image_thumb_swap fade" src="image/03-02-228x296.jpg" title="French Door Refrigerator in Fingerprint Resistant Stainless Steel" alt="French Door Refrigerator in Fingerprint Resistant Stainless Steel" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('47');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('47')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('47');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=47')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=47">French Door Refrigerator in Fingerprint Resistant Stainless Steel</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$122.00
                                           <span class="price-tax">Without tax: $100.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class='single-column'>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=31" class="">
                                     <img class="image_thumb" src="image/12-228x296.jpg" title="Bose Light Headphones Wireless Noise Cancelling" alt="Bose Light Headphones Wireless Noise Cancelling" />
                                     <img class="image_thumb_swap fade" src="image/12-02-228x296.jpg" title="Bose Light Headphones Wireless Noise Cancelling" alt="Bose Light Headphones Wireless Noise Cancelling" />
                                     </a>
                                     <div class="sale-icon">Sale</div>
                                     <span class="percent">-33%</span>
                                     <div class="product-countdown">
                                        <div id="countdown3_31" class="item-countdown" data-date="2022-03-17"></div>
                                     </div>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('31');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('31')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('31');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=31')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=31">Bose Light Headphones Wireless Noise Cancelling</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price">  <span class="price-new">$98.00</span> <span class="price-old">$146.00</span> 						 <span class="price-tax">Without tax: $80.00</span>  </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=30" class="">
                                     <img class="image_thumb" src="image/02-228x296.jpg" title="Microsoft Surface Laptop 4 15&quot; i7 512GB/16GB (Platinum)" alt="Microsoft Surface Laptop 4 15&quot; i7 512GB/16GB (Platinum)" />
                                     <img class="image_thumb_swap fade" src="image/02-02-228x296.jpg" title="Microsoft Surface Laptop 4 15&quot; i7 512GB/16GB (Platinum)" alt="Microsoft Surface Laptop 4 15&quot; i7 512GB/16GB (Platinum)" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('30');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('30')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('30');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=30')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=30">Microsoft Surface Laptop 4 15&quot; i7 512GB/16GB (Platinum)</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$122.00
                                           <span class="price-tax">Without tax: $100.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class='single-column'>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=42" class="">
                                     <img class="image_thumb" src="image/01-228x296.jpg" title="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" alt="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" />
                                     <img class="image_thumb_swap fade" src="image/01-02-228x296.jpg" title="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" alt="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('42');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('42')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('42');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=42')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=42">OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage</a></h4>
                                        <div class="rating">
                                           <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                           <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                           <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$122.00
                                           <span class="price-tax">Without tax: $100.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=44" class="">
                                     <img class="image_thumb" src="image/10-228x296.jpg" title="Vivo iQOO 7 Legend - 4000 mAh Lithium-Polymer" alt="Vivo iQOO 7 Legend - 4000 mAh Lithium-Polymer" />
                                     <img class="image_thumb_swap fade" src="image/10-02-228x296.jpg" title="Vivo iQOO 7 Legend - 4000 mAh Lithium-Polymer" alt="Vivo iQOO 7 Legend - 4000 mAh Lithium-Polymer" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('44');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('44')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('44');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=44')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=44">Vivo iQOO 7 Legend - 4000 mAh Lithium-Polymer</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$122.00
                                           <span class="price-tax">Without tax: $100.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class='single-column'>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=48" class="">
                                     <img class="image_thumb" src="image/18-228x296.jpg" title="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" alt="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" />
                                     <img class="image_thumb_swap fade" src="image/18-02-228x296.jpg" title="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" alt="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('48');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('48')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('48');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=48')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=48">Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$122.00
                                           <span class="price-tax">Without tax: $100.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=36" class="">
                                     <img class="image_thumb" src="image/06-228x296.jpg" title="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" alt="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" />
                                     <img class="image_thumb_swap fade" src="image/06-02-228x296.jpg" title="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" alt="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('36');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('36')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('36');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=36')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=36">Galaxy S10 lite - Qualcomm Snapdragon 855 Processor</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$122.00
                                           <span class="price-tax">Without tax: $100.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class='single-column'>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=28" class="">
                                     <img class="image_thumb" src="image/04-228x296.jpg" title="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" alt="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" />
                                     <img class="image_thumb_swap fade" src="image/04-02-228x296.jpg" title="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" alt="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('28');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('28')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('28');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=28')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=28">Domestic Gourmet Automatic Espresso Coffee Capsule Machine</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$122.00
                                           <span class="price-tax">Without tax: $100.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="product-layouts">
                               <div class="product-thumb transition">
                                  <div class="ttimg-bg"></div>
                                  <div class="image">
                                     <a href="index.php?route=product/product&amp;product_id=43" class="">
                                     <img class="image_thumb" src="image/09-228x296.jpg" title="Sony Smart Speaker LFS50G with Google Assistant Built In- White" alt="Sony Smart Speaker LFS50G with Google Assistant Built In- White" />
                                     <img class="image_thumb_swap fade" src="image/09-02-228x296.jpg" title="Sony Smart Speaker LFS50G with Google Assistant Built In- White" alt="Sony Smart Speaker LFS50G with Google Assistant Built In- White" />
                                     </a>
                                     <div class="button-group">
                                        <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('43');">
                                        <i class="material-icons icon-wishlist">favorite_border</i>
                                        <span title="Add to wishlist">Add to wishlist</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('43')">
                                        <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                        </span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                        <button class="btn-compare" title="Add to Compare"  onclick="compare.add('43');">
                                        <i class="material-icons icon-exchange">sync</i>
                                        <span title="Add to Compare">Add to Compare</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                     <div class="main-button-group">
                                        <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=43')">
                                        <i class="material-icons quick_view_icon">visibility</i>
                                        <span title="Quick View">Quick View</span>
                                        <span class="loading"><i class="material-icons">cached</i></span>
                                        </button>
                                     </div>
                                  </div>
                                  <div class="thumb-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=43">Sony Smart Speaker LFS50G with Google Assistant Built In- White</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <div class="price"> 						$14.00
                                           <span class="price-tax">Without tax: $10.00</span>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <script>
                      jQuery(document).ready(function($){
                      $(".item-countdown").each(function(){
                      var date = $(this).data('date');
                      $(this).lofCountDown({
                       TargetDate:date,
                       DisplayFormat:"<div>%%D%% <span>Days</span></div><div>%%H%% <span>Hours</span></div><div>%%M%% <span>Min</span></div><div>%%S%% <span>Sec</span></div>"
                      });
                      });
                      });
                   </script>
                </div>
             </div>
          </div>
          <script>
             $('.TTProduct-Tab > .tthometab > .tab-box-heading > ul > li:first-child').addClass('active');
             $('.TTProduct-Tab > .tab-content > .tab-pane:first-child').addClass('active');
          </script>
          <div class="html-content">
             <div class="box-content">
                <div id="ttcmssubbanner" class="bottom-to-top hb-animate-element">
                   <div class="subbanner-container">
                      <div class="row">
                         <div class="subbanner subbanner1 col-sm-4 col-xs-4">
                            <a href="#">
                            <img src="image/subbanner-01.jpg" alt="subbanner-1">
                            </a>
                            <div class="description">
                               <div class="tt-desc">
                                  <div class="subtitle">New Arrivals</div>
                                  <div class="title">Redmi a1-Red</div>
                                  <div class="button"><a class="btn" href="#">Shop Now</a></div>
                               </div>
                            </div>
                         </div>
                         <div class="subbanner subbanner2 col-sm-4 col-xs-4">
                            <a href="#">
                            <img src="image/subbanner-02.jpg" alt="subbanner-2">
                            </a>
                            <div class="description">
                               <div class="tt-desc">
                                  <div class="subtitle">Appliances</div>
                                  <div class="title">kitchen Items</div>
                                  <div class="button"><a class="btn" href="#">Shop Now</a></div>
                               </div>
                            </div>
                         </div>
                         <div class="subbanner subbanner3 col-sm-4 col-xs-4">
                            <a href="#">
                            <img src="image/subbanner-03.jpg" alt="subbanner-2">
                            </a>
                            <div class="description">
                               <div class="tt-desc">
                                  <div class="subtitle">Save 35% OFF</div>
                                  <div class="title">New Laptop</div>
                                  <div class="button"><a class="btn" href="#">Shop Now</a></div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="tt-special-countdown bottom-to-top hb-animate-element">
             <div class="ttspecial-products-innner">
                <div class="tt-countdown-carousel list-products">
                   <div class="box-heading">
                      <h3>Deal of the day</h3>
                   </div>
                   <div class="ttcountdown-inner">
                      <div class="special-countdown products-carousel row">
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <h2 class="tt-title"><span>Top Deals</span></h2>
                               <div class="countdown-images col-sm-5 col-xs-5">
                                  <span class="percent">-33%</span>
                                  <div class="special-image">
                                     <a href="#">
                                     <img class="image_thumb" src="image/12-494x593.jpg" title="Bose Light Headphones Wireless Noise Cancelling" alt="Bose Light Headphones Wireless Noise Cancelling" />
                                     </a>
                                     <div class="countdown-labele">
                                        <span class="hot">Hot</span>
                                     </div>
                                  </div>
                                  <div class="additional-images-container">
                                     <div class="special-additional-images">
                                        <div class="image-additional">
                                           <img src="image/12-02-570x741.jpg" title="Deal of the day" data-image-large-src="image/12-02-494x593.jpg" alt="Deal of the day" />
                                        </div>
                                        <div class="image-additional">
                                           <img src="image/12-03-570x741.jpg" title="Deal of the day" data-image-large-src="image/12-03-494x593.jpg" alt="Deal of the day" />
                                        </div>
                                        <div class="image-additional">
                                           <img src="image/12-04-570x741.jpg" title="Deal of the day" data-image-large-src="image/12-04-494x593.jpg" alt="Deal of the day" />
                                        </div>
                                        <div class="image-additional">
                                           <img src="image/12-05-570x741.jpg" title="Deal of the day" data-image-large-src="image/12-05-494x593.jpg" alt="Deal of the day" />
                                        </div>
                                        <div class="image-additional">
                                           <img src="image/09-570x741.jpg" title="Deal of the day" data-image-large-src="image/09-494x593.jpg" alt="Deal of the day" />
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-7 col-xs-7">
                                  <div class="product-description">
                                     <div class="caption">
                                        <h4><a href="index.php?route=product/product&amp;product_id=31">Bose Light Headphones Wireless Noise Cancelling</a></h4>
                                        <div class="rating no-rating">
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                           <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        </div>
                                        <p class="description">
                                           Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combine..
                                        </p>
                                        <div class="price">
                                           <span class="price-new">$98.00</span>
                                           <span class="price-old">$146.00</span>
                                           <span class="price-tax">Ex Tax: $80.00</span>
                                        </div>
                                        <div class="button-group">
                                           <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('31')">
                                           <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                           </span>
                                           </button>
                                           <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('31');">
                                           <i class="material-icons icon-wishlist">favorite_border</i>
                                           <span title="Add to wishlist">Add to wishlist</span>
                                           <span class="loading"><i class="material-icons">cached</i></span>
                                           </button>
                                           <button class="btn-compare" title="Add to Compare"  onclick="compare.add('31');">
                                           <i class="material-icons icon-exchange">sync</i>
                                           <span title="Add to Compare">Add to Compare</span>
                                           <span class="loading"><i class="material-icons">cached</i></span>
                                           </button>
                                           <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=31')">
                                           <i class="material-icons quick_view_icon">visibility</i>
                                           <span title="Quick View">Quick View</span>
                                           <span class="loading"><i class="material-icons">cached</i></span>
                                           </button>
                                        </div>
                                     </div>
                                     <div class="ttqtyprogress">
                                        <div class="QuantityAvailable">Available:</div>
                                        <div class="quantity">998</div>
                                        <div class="progress">
                                           <div class="progress-bar" role="progressbar"></div>
                                        </div>
                                     </div>
                                     <div class="special-countdown">
                                        <div class="countmain">
                                           <div class="count-title">Hurry up!</div>
                                           <div class="count-desc">Offer end in:</div>
                                        </div>
                                        <div id="countdown_31" class="item-countdown" data-date="2022-03-17"></div>
                                     </div>
                                  </div>
                               </div>
                               <script>
                                  jQuery(document).ready(function($){
                                  $(".item-countdown").each(function(){
                                  var date = $(this).data('date');
                                  $(this).lofCountDown({
                                      TargetDate:date,
                                      DisplayFormat:"<div>%%D%% <span>Days</span></div><div>%%H%% <span>Hours</span></div><div>%%M%% <span>Min</span></div><div>%%S%% <span>Sec</span></div>"
                                  });
                                  });
                                  });
                               </script>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="ttcat-main bottom-to-top hb-animate-element">
             <div class="TTProduct-Tab TT-cat-carousel products-list">
                <div class="tt-titletab">
                   <div class="box-heading tthometab-title">
                      <h3>Top Categories</h3>
                   </div>
                   <div id="TTCTab-" class="tab-box-heading">
                      <ul class="nav nav-tabs">
                         <li  class="active"><a href="#tab-1" data-toggle="tab">Electronics</a></li>
                         <li ><a href="#tab-2" data-toggle="tab">Tablets</a></li>
                      </ul>
                   </div>
                </div>
                <div class="tab-content">
                   <div class="tab-pane fade	 active in row" id="tab-1">
                      <div class="TTcategory-tab products-carousel">
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/05-270x324.jpg" title="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" alt="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" />
                                  <img class="image_thumb_swap fade" src="image/05-02-270x324.jpg" title="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" alt="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('41');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('41')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('41');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=41')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="index.php?route=product/product&amp;product_id=41">Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone</a></h4>
                                     <!--<p class="description">
                                        Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned with marketing talk this particular statement is c..</p>-->
                                     <div class="rating">
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $122.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="index.php?route=product/product&amp;product_id=40" class="">
                                  <img class="image_thumb" src="image/19-270x324.jpg" title="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" alt="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" />
                                  <img class="image_thumb_swap fade" src="image/19-02-270x324.jpg" title="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" alt="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('40');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('40')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('40');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('index.php?route=product/product&amp;product_id=40')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="index.php?route=product/product&amp;product_id=40">Bose Home Speaker 300, with Amazon Alexa Built-in, Silver</a></h4>
                                     <!--<p class="description">
                                        iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also autom..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $123.20
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/12-270x324.jpg" title="Bose Light Headphones Wireless Noise Cancelling" alt="Bose Light Headphones Wireless Noise Cancelling" />
                                  <img class="image_thumb_swap fade" src="image/12-02-270x324.jpg" title="Bose Light Headphones Wireless Noise Cancelling" alt="Bose Light Headphones Wireless Noise Cancelling" />
                                  </a>
                                  <div class="sale-icon">Sale</div>
                                  <span class="percent">-33%</span>
                                  <div class="product-countdown">
                                     <div id="countdown5_31" class="item-countdown" data-date="2022-03-17"></div>
                                  </div>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('31');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('31')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('31');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">Bose Light Headphones Wireless Noise Cancelling</a></h4>
                                     <!--<p class="description">
                                        Engineered with pro-level features and performance, the 12.3-effective-megapixel D300 combines brand new technologies with advanced features inherited from Nikon&#39;s newly..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">  <span class="price-new">$98.00</span> <span class="price-old">$146.00</span>                      </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/08-270x324.jpg" title="Bose Portable Home Wireless Bluetooth 4.2 Support" alt="Bose Portable Home Wireless Bluetooth 4.2 Support" />
                                  <img class="image_thumb_swap fade" src="image/08-02-270x324.jpg" title="Bose Portable Home Wireless Bluetooth 4.2 Support" alt="Bose Portable Home Wireless Bluetooth 4.2 Support" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('32');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('32')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('32');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">Bose Portable Home Wireless Bluetooth 4.2 Support</a></h4>
                                     <!--<p class="description">
                                        Revolutionary multi-touch interface.
                                        iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll through your songs and videos wi..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $122.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/04-270x324.jpg" title="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" alt="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" />
                                  <img class="image_thumb_swap fade" src="image/04-02-270x324.jpg" title="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" alt="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('28');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('28')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('28');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">Domestic Gourmet Automatic Espresso Coffee Capsule Machine</a></h4>
                                     <!--<p class="description">
                                        HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $122.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/03-270x324.jpg" title="French Door Refrigerator in Fingerprint Resistant Stainless Steel" alt="French Door Refrigerator in Fingerprint Resistant Stainless Steel" />
                                  <img class="image_thumb_swap fade" src="image/03-02-270x324.jpg" title="French Door Refrigerator in Fingerprint Resistant Stainless Steel" alt="French Door Refrigerator in Fingerprint Resistant Stainless Steel" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('47');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('47')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('47');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">French Door Refrigerator in Fingerprint Resistant Stainless Steel</a></h4>
                                     <!--<p class="description">
                                        Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentati..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $122.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/06-270x324.jpg" title="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" alt="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" />
                                  <img class="image_thumb_swap fade" src="image/06-02-270x324.jpg" title="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" alt="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('36');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('36')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('36');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">Galaxy S10 lite - Qualcomm Snapdragon 855 Processor</a></h4>
                                     <!--<p class="description">
                                        Video in your pocket.

                                        Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inc..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $122.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade	 row" id="tab-2">
                      <div class="TTcategory-tab products-carousel">
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/05-270x324.jpg" title="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" alt="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" />
                                  <img class="image_thumb_swap fade" src="image/05-02-270x324.jpg" title="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" alt="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('41');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('41')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('41');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone</a></h4>
                                     <!--<p class="description">
                                        Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned with marketing talk this particular statement is c..</p>-->
                                     <div class="rating">
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $122.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/19-270x324.jpg" title="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" alt="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" />
                                  <img class="image_thumb_swap fade" src="image/19-02-270x324.jpg" title="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" alt="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('40');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('40')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('40');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">Bose Home Speaker 300, with Amazon Alexa Built-in, Silver</a></h4>
                                     <!--<p class="description">
                                        iPhone is a revolutionary new mobile phone that allows you to make a call by simply tapping a name or number in your address book, a favorites list, or a call log. It also autom..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">
                                         $123.20
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/08-270x324.jpg" title="Bose Portable Home Wireless Bluetooth 4.2 Support" alt="Bose Portable Home Wireless Bluetooth 4.2 Support" />
                                  <img class="image_thumb_swap fade" src="image/08-02-270x324.jpg" title="Bose Portable Home Wireless Bluetooth 4.2 Support" alt="Bose Portable Home Wireless Bluetooth 4.2 Support" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('32');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('32')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('32');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">Bose Portable Home Wireless Bluetooth 4.2 Support</a></h4>
                                     <!--<p class="description">
                                        Revolutionary multi-touch interface.
                                        iPod touch features the same multi-touch screen technology as iPhone. Pinch to zoom in on a photo. Scroll through your songs and videos wi..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $122.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/04-270x324.jpg" title="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" alt="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" />
                                  <img class="image_thumb_swap fade" src="image/04-02-270x324.jpg" title="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" alt="Domestic Gourmet Automatic Espresso Coffee Capsule Machine" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('28');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('28')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('28');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">Domestic Gourmet Automatic Espresso Coffee Capsule Machine</a></h4>
                                     <!--<p class="description">
                                        HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $122.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/03-270x324.jpg" title="French Door Refrigerator in Fingerprint Resistant Stainless Steel" alt="French Door Refrigerator in Fingerprint Resistant Stainless Steel" />
                                  <img class="image_thumb_swap fade" src="image/03-02-270x324.jpg" title="French Door Refrigerator in Fingerprint Resistant Stainless Steel" alt="French Door Refrigerator in Fingerprint Resistant Stainless Steel" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('47');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('47')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('47');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">French Door Refrigerator in Fingerprint Resistant Stainless Steel</a></h4>
                                     <!--<p class="description">
                                        Stop your co-workers in their tracks with the stunning new 30-inch diagonal HP LP3065 Flat Panel Monitor. This flagship monitor features best-in-class performance and presentati..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $122.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/06-270x324.jpg" title="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" alt="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" />
                                  <img class="image_thumb_swap fade" src="image/06-02-270x324.jpg" title="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" alt="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('36');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('36')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('36');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">Galaxy S10 lite - Qualcomm Snapdragon 855 Processor</a></h4>
                                     <!--<p class="description">
                                        Video in your pocket.

                                        Its the small iPod with one very big idea: video. The worlds most popular music player now lets you enjoy movies, TV shows, and more on a two-inc..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $122.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="product-layouts">
                            <div class="product-thumb transition">
                               <div class="ttimg-bg"></div>
                               <div class="image col-sm-12 col-xs-12">
                                  <a href="#" class="">
                                  <img class="image_thumb" src="image/16-270x324.jpg" title="Google Pixelbook 12.3&quot; Multi-Touch 2-in-1 Chromebook (Silver)" alt="Google Pixelbook 12.3&quot; Multi-Touch 2-in-1 Chromebook (Silver)" />
                                  <img class="image_thumb_swap fade" src="image/16-02-270x324.jpg" title="Google Pixelbook 12.3&quot; Multi-Touch 2-in-1 Chromebook (Silver)" alt="Google Pixelbook 12.3&quot; Multi-Touch 2-in-1 Chromebook (Silver)" />
                                  </a>
                                  <div class="button-group">
                                     <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('33');">
                                     <i class="material-icons icon-wishlist">favorite_border</i>
                                     <span title="Add to wishlist">Add to wishlist</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('33')">
                                     <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                     </span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                     <button class="btn-compare" title="Add to Compare"  onclick="compare.add('33');">
                                     <i class="material-icons icon-exchange">sync</i>
                                     <span title="Add to Compare">Add to Compare</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                                  <div class="main-button-group">
                                     <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                     <i class="material-icons quick_view_icon">visibility</i>
                                     <span title="Quick View">Quick View</span>
                                     <span class="loading"><i class="material-icons">cached</i></span>
                                     </button>
                                  </div>
                               </div>
                               <div class="thumb-description col-sm-12 col-xs-12">
                                  <div class="caption">
                                     <h4><a href="#">Google Pixelbook 12.3&quot; Multi-Touch 2-in-1 Chromebook (Silver)</a></h4>
                                     <!--<p class="description">
                                        Imagine the advantages of going big without slowing down. The big 19&quot; 941BW monitor combines wide aspect ratio with fast pixel response time, for bigger images, more room t..</p>-->
                                     <div class="rating no-rating">
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                        <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                     </div>
                                     <div class="price">                     $242.00
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <script>
             jQuery(document).ready(function($){
             $(".item-countdown").each(function(){
             var date = $(this).data('date');
             $(this).lofCountDown({
              TargetDate:date,
              DisplayFormat:"<div>%%D%% <span>Days</span></div><div>%%H%% <span>Hours</span></div><div>%%M%% <span>Min</span></div><div>%%S%% <span>Sec</span></div>"
             });
             });
             });
          </script>
          <div class="bestseller-carousel products-list col-sm-8 bottom-to-top hb-animate-element">
             <div class="box-heading">
                <h3>Best Sellers</h3>
             </div>
             <div class="bestseller-items products-carousel row">
                <div class='single-column'>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="#" class="">
                            <img class="image_thumb" src="image/19-130x169.jpg" title="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" alt="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" />
                            <img class="image_thumb_swap fade" src="image/19-02-130x169.jpg" title="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" alt="Bose Home Speaker 300, with Amazon Alexa Built-in, Silver" />
                            </a>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="#">Bose Home Speaker 300, with Amazon Alexa Built-in, Silver</a></h4>
                               <div class="rating no-rating">
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                               </div>
                               <div class="price">
                                  $123.20
                                  <span class="price-tax">Ex Tax: $101.00</span>
                               </div>
                               <div class="button-group">
                                  <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('40')">
                                  <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                  </span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('40');">
                                  <i class="material-icons icon-wishlist">favorite_border</i>
                                  <span title="Add to wishlist">Add to wishlist</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-compare" title="Add to Compare"  onclick="compare.add('40');">
                                  <i class="material-icons icon-exchange">sync</i>
                                  <span title="Add to Compare">Add to Compare</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                  <i class="material-icons quick_view_icon">visibility</i>
                                  <span title="Quick View">Quick View</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="#" class="">
                            <img class="image_thumb" src="image/05-130x169.jpg" title="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" alt="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" />
                            <img class="image_thumb_swap fade" src="image/05-02-130x169.jpg" title="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" alt="Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone" />
                            </a>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="#">Bang &amp; Olufsen Beoplay H4 2nd Gen-Wireless Over-Ear Headphone</a></h4>
                               <div class="rating">
                                  <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                  <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                  <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                  <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                               </div>
                               <div class="price">
                                  $122.00
                                  <span class="price-tax">Ex Tax: $100.00</span>
                               </div>
                               <div class="button-group">
                                  <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('41')">
                                  <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                  </span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('41');">
                                  <i class="material-icons icon-wishlist">favorite_border</i>
                                  <span title="Add to wishlist">Add to wishlist</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-compare" title="Add to Compare"  onclick="compare.add('41');">
                                  <i class="material-icons icon-exchange">sync</i>
                                  <span title="Add to Compare">Add to Compare</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                  <i class="material-icons quick_view_icon">visibility</i>
                                  <span title="Quick View">Quick View</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class='single-column'>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="#" class="">
                            <img class="image_thumb" src="image/11-130x169.jpg" title="Fully-Automatic Front Loading Washing Machine" alt="Fully-Automatic Front Loading Washing Machine" />
                            <img class="image_thumb_swap fade" src="image/11-02-130x169.jpg" title="Fully-Automatic Front Loading Washing Machine" alt="Fully-Automatic Front Loading Washing Machine" />
                            </a>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="#">Fully-Automatic Front Loading Washing Machine</a></h4>
                               <div class="rating no-rating">
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                               </div>
                               <div class="price">
                                  $2,000.00
                                  <span class="price-tax">Ex Tax: $2,000.00</span>
                               </div>
                               <div class="button-group">
                                  <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('45')">
                                  <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                  </span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('45');">
                                  <i class="material-icons icon-wishlist">favorite_border</i>
                                  <span title="Add to wishlist">Add to wishlist</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-compare" title="Add to Compare"  onclick="compare.add('45');">
                                  <i class="material-icons icon-exchange">sync</i>
                                  <span title="Add to Compare">Add to Compare</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                  <i class="material-icons quick_view_icon">visibility</i>
                                  <span title="Quick View">Quick View</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="#" class="">
                            <img class="image_thumb" src="image/03-130x169.jpg" title="French Door Refrigerator in Fingerprint Resistant Stainless Steel" alt="French Door Refrigerator in Fingerprint Resistant Stainless Steel" />
                            <img class="image_thumb_swap fade" src="image/03-02-130x169.jpg" title="French Door Refrigerator in Fingerprint Resistant Stainless Steel" alt="French Door Refrigerator in Fingerprint Resistant Stainless Steel" />
                            </a>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="#">French Door Refrigerator in Fingerprint Resistant Stainless Steel</a></h4>
                               <div class="rating no-rating">
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                               </div>
                               <div class="price">
                                  $122.00
                                  <span class="price-tax">Ex Tax: $100.00</span>
                               </div>
                               <div class="button-group">
                                  <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('47')">
                                  <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                  </span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('47');">
                                  <i class="material-icons icon-wishlist">favorite_border</i>
                                  <span title="Add to wishlist">Add to wishlist</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-compare" title="Add to Compare"  onclick="compare.add('47');">
                                  <i class="material-icons icon-exchange">sync</i>
                                  <span title="Add to Compare">Add to Compare</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                  <i class="material-icons quick_view_icon">visibility</i>
                                  <span title="Quick View">Quick View</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class='single-column'>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="#" class="">
                            <img class="image_thumb" src="image/12-130x169.jpg" title="Bose Light Headphones Wireless Noise Cancelling" alt="Bose Light Headphones Wireless Noise Cancelling" />
                            <img class="image_thumb_swap fade" src="image/12-02-130x169.jpg" title="Bose Light Headphones Wireless Noise Cancelling" alt="Bose Light Headphones Wireless Noise Cancelling" />
                            </a>
                            <div class="sale-icon">Sale</div>
                            <span class="percent">-33%</span>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="#">Bose Light Headphones Wireless Noise Cancelling</a></h4>
                               <div class="rating no-rating">
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                               </div>
                               <div class="price">
                                  <span class="price-new">$98.00</span>
                                  <span class="price-old">$146.00</span>
                                  <span class="price-tax">Ex Tax: $80.00</span>
                               </div>
                               <div class="button-group">
                                  <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('31')">
                                  <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                  </span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('31');">
                                  <i class="material-icons icon-wishlist">favorite_border</i>
                                  <span title="Add to wishlist">Add to wishlist</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-compare" title="Add to Compare"  onclick="compare.add('31');">
                                  <i class="material-icons icon-exchange">sync</i>
                                  <span title="Add to Compare">Add to Compare</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                  <i class="material-icons quick_view_icon">visibility</i>
                                  <span title="Quick View">Quick View</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                               </div>
                               <div class="product-countdown">
                                  <div id="countdown7_31" class="item-countdown" data-date="2022-03-17"></div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="#" class="">
                            <img class="image_thumb" src="image/02-130x169.jpg" title="Microsoft Surface Laptop 4 15&quot; i7 512GB/16GB (Platinum)" alt="Microsoft Surface Laptop 4 15&quot; i7 512GB/16GB (Platinum)" />
                            <img class="image_thumb_swap fade" src="image/02-02-130x169.jpg" title="Microsoft Surface Laptop 4 15&quot; i7 512GB/16GB (Platinum)" alt="Microsoft Surface Laptop 4 15&quot; i7 512GB/16GB (Platinum)" />
                            </a>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="#">Microsoft Surface Laptop 4 15&quot; i7 512GB/16GB (Platinum)</a></h4>
                               <div class="rating no-rating">
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                               </div>
                               <div class="price">
                                  $122.00
                                  <span class="price-tax">Ex Tax: $100.00</span>
                               </div>
                               <div class="button-group">
                                  <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('30')">
                                  <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                  </span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('30');">
                                  <i class="material-icons icon-wishlist">favorite_border</i>
                                  <span title="Add to wishlist">Add to wishlist</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-compare" title="Add to Compare"  onclick="compare.add('30');">
                                  <i class="material-icons icon-exchange">sync</i>
                                  <span title="Add to Compare">Add to Compare</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                  <i class="material-icons quick_view_icon">visibility</i>
                                  <span title="Quick View">Quick View</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class='single-column'>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="#" class="">
                            <img class="image_thumb" src="image/01-130x169.jpg" title="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" alt="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" />
                            <img class="image_thumb_swap fade" src="image/01-02-130x169.jpg" title="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" alt="OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage" />
                            </a>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="#">OnePlus 8T 5G-Aquamarine Green, 8GB RAM, 128GB Storage</a></h4>
                               <div class="rating">
                                  <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                  <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                  <span class="fa-stack"><i class="material-icons star_on">star</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                               </div>
                               <div class="price">
                                  $122.00
                                  <span class="price-tax">Ex Tax: $100.00</span>
                               </div>
                               <div class="button-group">
                                  <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('42')">
                                  <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                  </span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('42');">
                                  <i class="material-icons icon-wishlist">favorite_border</i>
                                  <span title="Add to wishlist">Add to wishlist</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-compare" title="Add to Compare"  onclick="compare.add('42');">
                                  <i class="material-icons icon-exchange">sync</i>
                                  <span title="Add to Compare">Add to Compare</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                  <i class="material-icons quick_view_icon">visibility</i>
                                  <span title="Quick View">Quick View</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="#" class="">
                            <img class="image_thumb" src="image/10-130x169.jpg" title="Vivo iQOO 7 Legend - 4000 mAh Lithium-Polymer" alt="Vivo iQOO 7 Legend - 4000 mAh Lithium-Polymer" />
                            <img class="image_thumb_swap fade" src="image/10-02-130x169.jpg" title="Vivo iQOO 7 Legend - 4000 mAh Lithium-Polymer" alt="Vivo iQOO 7 Legend - 4000 mAh Lithium-Polymer" />
                            </a>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="#">Vivo iQOO 7 Legend - 4000 mAh Lithium-Polymer</a></h4>
                               <div class="rating no-rating">
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                               </div>
                               <div class="price">
                                  $122.00
                                  <span class="price-tax">Ex Tax: $100.00</span>
                               </div>
                               <div class="button-group">
                                  <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('44')">
                                  <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                  </span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('44');">
                                  <i class="material-icons icon-wishlist">favorite_border</i>
                                  <span title="Add to wishlist">Add to wishlist</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-compare" title="Add to Compare"  onclick="compare.add('44');">
                                  <i class="material-icons icon-exchange">sync</i>
                                  <span title="Add to Compare">Add to Compare</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                  <i class="material-icons quick_view_icon">visibility</i>
                                  <span title="Quick View">Quick View</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class='single-column'>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="#" class="">
                            <img class="image_thumb" src="image/18-130x169.jpg" title="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" alt="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" />
                            <img class="image_thumb_swap fade" src="image/18-02-130x169.jpg" title="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" alt="Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit" />
                            </a>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="#">Samsung NX Mini Mirrorless Digital Camera with 9mm and 9-27mm Lenses and Case Kit</a></h4>
                               <div class="rating no-rating">
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                               </div>
                               <div class="price">
                                  $122.00
                                  <span class="price-tax">Ex Tax: $100.00</span>
                               </div>
                               <div class="button-group">
                                  <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('48')">
                                  <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                  </span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('48');">
                                  <i class="material-icons icon-wishlist">favorite_border</i>
                                  <span title="Add to wishlist">Add to wishlist</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-compare" title="Add to Compare"  onclick="compare.add('48');">
                                  <i class="material-icons icon-exchange">sync</i>
                                  <span title="Add to Compare">Add to Compare</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('#')">
                                  <i class="material-icons quick_view_icon">visibility</i>
                                  <span title="Quick View">Quick View</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="product-layouts">
                      <div class="product-thumb transition">
                         <div class="image">
                            <a href="#" class="">
                            <img class="image_thumb" src="image/06-130x169.jpg" title="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" alt="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" />
                            <img class="image_thumb_swap fade" src="image/06-02-130x169.jpg" title="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" alt="Galaxy S10 lite - Qualcomm Snapdragon 855 Processor" />
                            </a>
                         </div>
                         <div class="thumb-description">
                            <div class="caption">
                               <h4><a href="#">Galaxy S10 lite - Qualcomm Snapdragon 855 Processor</a></h4>
                               <div class="rating no-rating">
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                                  <span class="fa-stack"><i class="material-icons star_off">star_border</i></span>
                               </div>
                               <div class="price">
                                  $122.00
                                  <span class="price-tax">Ex Tax: $100.00</span>
                               </div>
                               <div class="button-group">
                                  <button class="btn-cart " type="button" title="Add to Cart" onclick="cart.add('36')">
                                  <i class="material-icons">shopping_cart</i> <span class="hidden-xs hidden-sm hidden-md">Add to Cart
                                  </span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-wishlist" title="Add to wishlist"  onclick="wishlist.add('36');">
                                  <i class="material-icons icon-wishlist">favorite_border</i>
                                  <span title="Add to wishlist">Add to wishlist</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-compare" title="Add to Compare"  onclick="compare.add('36');">
                                  <i class="material-icons icon-exchange">sync</i>
                                  <span title="Add to Compare">Add to Compare</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                                  <button class="btn-quickview" type="button" title="Quick View" onclick="tt_quickview.ajaxView('$')">
                                  <i class="material-icons quick_view_icon">visibility</i>
                                  <span title="Quick View">Quick View</span>
                                  <span class="loading"><i class="material-icons">cached</i></span>
                                  </button>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <script>
             jQuery(document).ready(function($){
             $(".item-countdown").each(function(){
             var date = $(this).data('date');
             $(this).lofCountDown({
              TargetDate:date,
              DisplayFormat:"<div>%%D%% <span>Days</span></div><div>%%H%% <span>Hours</span></div><div>%%M%% <span>Min</span></div><div>%%S%% <span>Sec</span></div>"
             });
             });
             });
          </script>
          <div class="html-content">
             <div class="box-content">
                <div id="ttcmstestimonial" class="col-sm-4 bottom-to-top hb-animate-element">
                   <div class="tttestimonial">
                      <div class="tt-titletab">
                         <h3 class="tt-title">Testimonials</h3>
                      </div>
                      <div class="tttestimonial-content">
                         <div class="tttestimonial-inner">
                            <ul id="tttestimonial-carousel" class="tt-carousel">
                               <li>
                                  <div class="testimonial-image"><img src="image/user1.jpg" alt=""></div>
                                  <div class="testimonial-content">
                                     <div class="testimonial-user-title">
                                        <h4>John Duff</h4>
                                        <span class="tttestimonial-subtitle">web designer</span>
                                     </div>
                                     <div class="testimonial-desc">
                                        <p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu pulvinar. Nullam mattis arcu convallis...</p>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="testimonial-image"><img alt="" src="image/user2.jpg"></div>
                                  <div class="testimonial-content">
                                     <div class="testimonial-user-title">
                                        <h4>John Duff</h4>
                                        <span class="tttestimonial-subtitle">Producer</span>
                                     </div>
                                     <div class="testimonial-desc">
                                        <p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu pulvinar. Nullam mattis arcu convallis...</p>
                                     </div>
                                  </div>
                               </li>
                               <li>
                                  <div class="testimonial-image"><img alt="" src="image/user3.jpg"></div>
                                  <div class="testimonial-content">
                                     <div class="testimonial-user-title">
                                        <h4>John Duff</h4>
                                        <span class="tttestimonial-subtitle">web developer</span>
                                     </div>
                                     <div class="testimonial-desc">
                                        <p>Duis faucibus enim vitae nunc molestie, nec facilisis arcu pulvinar. Nullam mattis arcu convallis...</p>
                                     </div>
                                  </div>
                               </li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="html-content">
             <div class="box-content">
                <div id="ttcmsservices" class="col-sm-3 hb-animate-element left-to-right">
                   <div class="mianservice">
                      <div class="ttcmsservices">
                         <div class="ttservice">
                            <div class="icon">
                               <div class="ttgift_img service-icon"></div>
                            </div>
                            <div class="service-content">
                               <div class="service-title">24x7 Support</div>
                               <div class="service-desc">24x7 Support Open</div>
                            </div>
                         </div>
                         <div class="ttservice">
                            <div class="icon">
                               <div class="ttdisc_img service-icon"></div>
                            </div>
                            <div class="service-content">
                               <div class="service-title">Daily Saving</div>
                               <div class="service-desc">Saving Offers Daily</div>
                            </div>
                         </div>
                         <div class="ttservice">
                            <div class="icon">
                               <div class="ttshipping_img service-icon"></div>
                            </div>
                            <div class="service-content">
                               <div class="service-title">Love To Share</div>
                               <div class="service-desc">Love the way to Share</div>
                            </div>
                         </div>
                         <div class="ttservice">
                            <div class="icon">
                               <div class="ttsupport_img service-icon"></div>
                            </div>
                            <div class="service-content">
                               <div class="service-title">Love To Use</div>
                               <div class="service-desc">Love the way to Use</div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="html-content">
             <div class="box-content">
                <div class="custom-top-banner col-sm-9">
                   <div class="top-banner hb-animate-element right-to-left">
                      <div class="row">
                         <div class="banner banner1 col-sm-8 col-xs-12">
                            <div class="banner-1 col-sm-6 col-xs-6">
                               <div class="bannerimg">
                                  <a href="#">
                                  <img src="image/topbanner-01.jpg" alt="banner1">
                                  </a>
                                  <div class="banner-content banner-content1 left">
                                     <div class="banner-inner">
                                        <div class="subtitle">Season Sale</div>
                                        <div class="title">Apple <br>Monitor</div>
                                        <div class="button1"><a class="btn" href="#">Go, Shop</a></div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="banner-2 col-sm-6 col-xs-6">
                               <div class="bannerimg">
                                  <a href="#">
                                  <img src="image/topbanner-02.jpg" alt="banner2">
                                  </a>
                                  <div class="banner-content banner-content2 left">
                                     <div class="banner-inner">
                                        <div class="subtitle">Save 35% off</div>
                                        <div class="title">Mixer Grinder</div>
                                        <div class="button2"><a class="btn" href="#">Go, Shop</a></div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="bottom-banner1 col-sm-12">
                               <div class="bannerimg">
                                  <a href="#">
                                  <img src="image/topbanner-03.jpg" alt="banner3">
                                  </a>
                                  <div class="banner-content banner-content3 right">
                                     <div class="banner-inner">
                                        <div class="subtitle">Next Generation</div>
                                        <div class="title">Wirless Headphones</div>
                                        <div class="button3"><a class="btn" href="#">Shop Now</a></div>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="banner banner2 col-sm-4 col-xs-12">
                            <div class="bannerimg">
                               <a href="#">
                               <img src="image/topbanner-04.jpg" alt="banner4">
                               </a>
                               <div class="banner-content banner-content4">
                                  <div class="banner-inner">
                                     <div class="subtitle">New in Mega offer</div>
                                     <div class="title">JBL CLIP 2</div>
                                     <div class="button4"><a class="btn" href="#">Shop Now</a></div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="brand-carousel bottom-to-top hb-animate-element">
             <div class="box-heading">
                <h3>Brands</h3>
             </div>
             <div class="swiper-viewport">
                <div id="carousel0" class="swiper-container brand-items">
                   <div class="swiper-wrapper">
                      <div class="swiper-slide text-center">
                         <a href="#"><img src="image/brand-logo-01-150x100.png" alt="NFL" class="img-responsive" /></a>
                         <div class="brand-description"></div>
                      </div>
                      <div class="swiper-slide text-center">
                         <a href="#"><img src="image/brand-logo-02-150x100.png" alt="RedBull" class="img-responsive" /></a>
                         <div class="brand-description"></div>
                      </div>
                      <div class="swiper-slide text-center">
                         <a href="#"><img src="image/brand-logo-03-150x100.png" alt="Sony" class="img-responsive" /></a>
                         <div class="brand-description"></div>
                      </div>
                      <div class="swiper-slide text-center">
                         <a href="#"><img src="image/brand-logo-04-150x100.png" alt="Coca Cola" class="img-responsive" /></a>
                         <div class="brand-description"></div>
                      </div>
                      <div class="swiper-slide text-center">
                         <a href="#"><img src="image/brand-logo-05-150x100.png" alt="Burger King" class="img-responsive" /></a>
                         <div class="brand-description"></div>
                      </div>
                      <div class="swiper-slide text-center">
                         <a href="#"><img src="image/brand-logo-06-150x100.png" alt="Canon" class="img-responsive" /></a>
                         <div class="brand-description"></div>
                      </div>
                      <div class="swiper-slide text-center">
                         <a href="#"><img src="image/brand-logo-07-150x100.png" alt="Harley Davidson" class="img-responsive" /></a>
                         <div class="brand-description"></div>
                      </div>
                   </div>
                </div>
                <div class="swiper-pagination carousel0"></div>
                <div class="swiper-pager">
                   <div class="swiper-button-prev">prev</div>
                   <div class="swiper-button-next">next</div>
                </div>
             </div>
          </div>
          <script>
             $('#carousel0').swiper({
                 mode: 'horizontal',
                 autoplay: 3000,
                 //pagination: '.carousel0',
                 pagination: false,
                 paginationClickable: false,
                 prevButton: '.swiper-button-prev',
                 nextButton: '.swiper-button-next',

              // Default parameters
               slidesPerView: 5,

               // Responsive breakpoints
               breakpoints: {
                     // when window width is <= 1200px
                     1300: {
                       slidesPerView: 5
                     },
                      // when window width is <= 1199px
                     1199: {
                       slidesPerView: 4
                     },
                      // when window width is <= 767px
                     767: {
                       slidesPerView: 3
                     },
                     // when window width is <= 480px
                     480: {
                       slidesPerView: 2
                     }
                }

             });
             -->
          </script>
       </div>
    </div>
 </div>


@endsection
