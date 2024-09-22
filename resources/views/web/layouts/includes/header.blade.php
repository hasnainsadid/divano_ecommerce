<nav>

  <div class="container">

      <a href="index.html" class="logo"><img src="{{asset('web')}}/assets/images/divano-logo.svg" alt=""  width="130" height="55"/></a>

      <!-- ==========  Top navigation ========== -->

      <div class="navigation navigation-top clearfix">
          <ul>
              <!--add active class for current page-->
              <li class="left-side"><a href="index.html" class="logo-icon"><img src="{{asset('web')}}/assets/images/divano-logo.svg" alt="Alternate Text" width="150" height="34"/></a></li>
              {{-- <li class="left-side"><a href="email-template.html">Email template</a></li>
              <li class="left-side"><a href="shortcodes.html">Shortcodes</a></li> --}}
              <li><a href="javascript:void(0);" class="open-login"><i class="icon icon-user"></i></a></li>
              <li><a href="javascript:void(0);" class="open-search"><i class="icon icon-magnifier"></i></a></li>
              <li><a href="javascript:void(0);" class="open-cart"><i class="icon icon-cart"></i> <span>4</span></a></li>
          </ul>
      </div>

      <!-- ==========  Main navigation ========== -->

      <div class="navigation navigation-main">
          <a href="#" class="open-login"><i class="icon icon-user"></i></a>
          <a href="#" class="open-search"><i class="icon icon-magnifier"></i></a>
          <a href="#" class="open-cart"><i class="icon icon-cart"></i> <span>4</span></a>
          <a href="#" class="open-menu"><i class="icon icon-menu"></i></a>

          <div class="floating-menu">
              <!--mobile toggle menu trigger-->
              <div class="close-menu-wrapper">
                  <span class="close-menu"><i class="icon icon-cross"></i></span>
              </div>
              <ul>
                  <li>
                      <a href="javacript:void(0)">Home <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                      <div class="navbar-dropdown navbar-dropdown-single">
                          <div class="navbar-box">
                              <div class="box-full">
                                  <div class="box clearfix">
                                      <ul>
                                          <li class="label">Homepages</li>
                                          <li><a href="index.html">Home - Normal</a></li>
                                          <li><a href="index-2.html">Home - Icons category</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li>
                      <a href="#">Pages <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                      <div class="navbar-dropdown navbar-dropdown-single">
                          <div class="navbar-box">
                              <div class="box-full">
                                  <div class="box clearfix">
                                      <ul>
                                          <li class="label">Addons</li>
                                          <li><a href="about.html">About us</a></li>
                                          <li><a href="contact.html">Contact</a></li>
                                          <li><a href="404.html">Not found 404</a></li>
                                          <li><a href="login.html">Login & Register</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li>
                      <a href="#">Blog <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                      <div class="navbar-dropdown navbar-dropdown-single">
                          <div class="navbar-box">
                              <div class="box-full">
                                  <div class="box clearfix">
                                      <ul>
                                          <li class="label">Blog categories</li>
                                          <li><a href="blog-grid.html">Blog - grid</a></li>
                                          <li><a href="blog-list.html">Blog - list</a></li>
                                          <li><a href="blog-fullpage.html">Blog - fullpage</a></li>
                                          <li class="label">Blog articles</li>
                                          <li><a href="article.html">Article - single</a></li>
                                          <li><a href="article-2.html">Article - right menu</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li>
                      <a href="#">Shop <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                      <div class="navbar-dropdown navbar-dropdown-single">
                          <div class="navbar-box">
                              <div class="box-full">
                                  <div class="box clearfix">
                                      <ul>
                                          <li class="label">Products</li>
                                          <li><a href="category.html">Product categories</a></li>
                                          <li><a href="products-grid.html">Products grid</a></li>
                                          <li><a href="products-list.html">Products list</a></li>
                                          <li><a href="products-topbar.html">Products topbar</a></li>
                                          <li><a href="product.html">Product overview</a></li>
                                          <li><a href="product-2.html">Product overview simple</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li>
                      <a href="#">Checkout <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                      <div class="navbar-dropdown navbar-dropdown-single">
                          <div class="navbar-box">
                              <div class="box-full">
                                  <div class="box clearfix">
                                      <ul>
                                          <li class="label">Checkout</li>
                                          <li><a href="checkout-1.html">Checkout - Cart items</a></li>
                                          <li><a href="checkout-2.html">Checkout - Delivery</a></li>
                                          <li><a href="checkout-3.html">Checkout - Payment</a></li>
                                          <li><a href="checkout-4.html">Checkout - Receipt</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li>
                      <a href="index.html">Boxmenu  <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                      <div class="navbar-dropdown">
                          <div class="navbar-box">
                              <div class="box-lg">
                                  <div class="box clearfix">
                                      <div class="row">
                                          <div class="col-lg-4">
                                              <ul>
                                                  <li class="label">Living Room</li>
                                                  <li><a href="#">Sofas</a></li>
                                                  <li><a href="#">Loveseats</a></li>
                                                  <li><a href="#">Sectionals</a></li>
                                                  <li><a href="#">Chairs & Chaises</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-4">
                                              <ul>
                                                  <li class="label">Packages</li>
                                                  <li><a href="#">Recliners</a></li>
                                                  <li><a href="#">Ottomans</a></li>
                                                  <li><a href="#">Cabinets</a></li>
                                                  <li><a href="#">Entertainment</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-4">
                                              <ul>
                                                  <li class="label">Dining</li>
                                                  <li><a href="#">Dining Packages</a></li>
                                                  <li><a href="#">Dining Tables</a></li>
                                                  <li><a href="#">Dining Chairs</a></li>
                                                  <li><a href="#">Dining Benches</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-4">
                                              <ul>
                                                  <li class="label">TV & Video</li>
                                                  <li><a href="#">TVs</a></li>
                                                  <li><a href="#">DVD & Blu-ray Players</a></li>
                                                  <li><a href="#">Home Audio & Theater</a></li>
                                                  <li><a href="#">TVs Accessories</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-4">
                                              <ul>
                                                  <li class="label">Bedroom</li>
                                                  <li><a href="#">King Beds</a></li>
                                                  <li><a href="#">Queen Beds</a></li>
                                                  <li><a href="#">Storage Beds</a></li>
                                                  <li><a href="#">Daybeds & Futons</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-4">
                                              <ul>
                                                  <li class="label">Storages</li>
                                                  <li><a href="#">Dressers & Chests</a></li>
                                                  <li><a href="#">Night Tables</a></li>
                                                  <li><a href="#">Mirrors</a></li>
                                                  <li><a href="#">Armoires</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="box-sm">
                                  <div class="image">
                                      <img src="{{asset('web')}}/assets/images/m-1.jpg" alt="Alternate Text" />
                                  </div>
                                  <div class="box">
                                      <div class="h4">Premium quality</div>
                                      <div class="clearfix">
                                          <p>Homes that differ in terms of style, concept and architectural solutions have been furnished by Furniture Factory. These spaces tell of an international lifestyle that expresses modernity, research and a creative spirit.</p>
                                          <a class="btn btn-clean btn-big" href="products-grid.html">Shop now</a>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div>
                  </li>

                  <li>
                      <a href="#">Megamenu <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                      <div class="navbar-dropdown">
                          <div class="navbar-box">
                              <div class="box-full">
                                  <div class="box clearfix">
                                      <div class="row">
                                          <div class="col-lg-3">
                                              <ul>
                                                  <li class="label">Packages</li>
                                                  <li><a href="#">Recliners</a></li>
                                                  <li><a href="#">Ottomans</a></li>
                                                  <li><a href="#">Cabinets</a></li>
                                                  <li><a href="#">Entertainment</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-3">
                                              <ul>
                                                  <li class="label">Dining</li>
                                                  <li><a href="#">Dining Packages</a></li>
                                                  <li><a href="#">Dining Tables</a></li>
                                                  <li><a href="#">Dining Chairs</a></li>
                                                  <li><a href="#">Dining Benches</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-3">
                                              <ul>
                                                  <li class="label">TV & Video</li>
                                                  <li><a href="#">TVs</a></li>
                                                  <li><a href="#">DVD & Blu-ray Players</a></li>
                                                  <li><a href="#">Home Audio & Theater</a></li>
                                                  <li><a href="#">TVs Accessories</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-3">
                                              <ul>
                                                  <li class="label">Bedroom</li>
                                                  <li><a href="#">King Beds</a></li>
                                                  <li><a href="#">Queen Beds</a></li>
                                                  <li><a href="#">Storage Beds</a></li>
                                                  <li><a href="#">Daybeds & Futons</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-3">
                                              <ul>
                                                  <li class="label">Storages</li>
                                                  <li><a href="#">Dressers & Chests</a></li>
                                                  <li><a href="#">Night Tables</a></li>
                                                  <li><a href="#">Mirrors</a></li>
                                                  <li><a href="#">Armoires</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-3">
                                              <ul>
                                                  <li class="label">Office</li>
                                                  <li><a href="#">Desks & Hutches</a></li>
                                                  <li><a href="#">Office Chairs</a></li>
                                                  <li><a href="#">Filing Cabinets</a></li>
                                                  <li><a href="#">Bookcases</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-3">
                                              <ul>
                                                  <li class="label">Floor Care</li>
                                                  <li><a href="#">Upright Vacuums</a></li>
                                                  <li><a href="#">Stick Vacuums</a></li>
                                                  <li><a href="#">Robotic Vacuums</a></li>
                                                  <li><a href="#">Handheld Vacuums</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                          <div class="col-lg-3">
                                              <ul>
                                                  <li class="label">Kids</li>
                                                  <li><a href="#">Full Beds</a></li>
                                                  <li><a href="#">Twin Beds</a></li>
                                                  <li><a href="#">Chests & Dressers</a></li>
                                                  <li><a href="#">Baby Furniture</a></li>
                                                  <li class="more"><a href="#"><i class="icon icon-chevron-right"></i> More</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>

                  <li class="nav-settings">
                      <a href="javascript:void(0);"><span class="nav-settings-value">USD</span> <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                      <div class="navbar-dropdown navbar-dropdown-single">
                          <div class="navbar-box">
                              <div class="box-full">
                                  <div class="box clearfix">
                                      <ul class="nav-settings-list">
                                          <li><a href="javascript:void(0);">USD</a></li>
                                          <li><a href="javascript:void(0);">EUR</a></li>
                                          <li><a href="javascript:void(0);">GBP</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li class="nav-settings">
                      <a href="javascript:void(0);"><span class="nav-settings-value">ENG</span> <span class="open-dropdown"><i class="fa fa-angle-down"></i></span></a>
                      <div class="navbar-dropdown navbar-dropdown-single">
                          <div class="navbar-box">
                              <div class="box-full">
                                  <div class="box clearfix">
                                      <ul class="nav-settings-list">
                                          <li><a href="javascript:void(0);">ENG</a></li>
                                          <li><a href="javascript:void(0);">GER</a></li>
                                          <li><a href="javascript:void(0);">لعربية</a></li>
                                          <li><a href="javascript:void(0);">עִבְרִית</a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </div>

      <!-- ==========  Search wrapper ========== -->

      <div class="search-wrapper">
          <input class="form-control" placeholder="Search..." />
          <button class="btn btn-outline-dark btn-sm">Search now</button>
      </div>

      <!-- ==========  Login wrapper ========== -->

      <div class="login-wrapper">
          <div class="h5">Sign in</div>
          <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                  <a href="#forgotpassword" class="open-popup btn btn-main btn-sm">Forgot password?</a>
                  <a href="{{ route('register') }}" class="open-popup btn btn-main btn-sm">Don't have an account?</a>
              </div>
              <button type="submit" class="btn btn-block btn-outline-primary">Submit</button>
          </form>
      </div>

      <!-- ==========  Cart wrapper ========== -->

      <div class="cart-wrapper">
          <div class="checkout">
              <div class="clearfix">

                  <!--cart item-->

                  <div class="row">

                      <div class="cart-block cart-block-item clearfix">
                          <div class="image">
                              <a href="product.html"><img src="{{asset('web')}}/assets/images/item-1.jpg" alt="" /></a>
                          </div>
                          <div class="title">
                              <div><a href="product.html">Product item</a></div>
                              <small>Product category</small>
                          </div>
                          <div class="quantity">
                              <input type="number" value="2" class="form-control form-quantity" />
                          </div>
                          <div class="price">
                              <span class="final">$ 1.998</span>
                              <span class="discount">$ 2.666</span>
                          </div>
                          <!--delete-this-item-->
                          <span class="icon icon-cross icon-delete"></span>
                      </div>

                      <!--cart item-->

                      <div class="cart-block cart-block-item clearfix">
                          <div class="image">
                              <a href="product.html"><img src="{{asset('web')}}/assets/images/item-2.jpg" alt="" /></a>
                          </div>
                          <div class="title">
                              <div><a href="product.html">Product item</a></div>
                              <small>Product category</small>
                          </div>
                          <div class="quantity">
                              <input type="number" value="2" class="form-control form-quantity" />
                          </div>
                          <div class="price">
                              <span class="final">$ 1.998</span>
                              <span class="discount">$ 2.666</span>
                          </div>
                          <!--delete-this-item-->
                          <span class="icon icon-cross icon-delete"></span>
                      </div>

                      <!--cart item-->

                      <div class="cart-block cart-block-item clearfix">
                          <div class="image">
                              <a href="product.html"><img src="{{asset('web')}}/assets/images/item-3.jpg" alt="" /></a>
                          </div>
                          <div class="title">
                              <div><a href="product.html">Product item</a></div>
                              <small>Product category</small>
                          </div>
                          <div class="quantity">
                              <input type="number" value="2" class="form-control form-quantity" />
                          </div>
                          <div class="price">
                              <span class="final">$ 1.998</span>
                              <span class="discount">$ 2.666</span>
                          </div>
                          <!--delete-this-item-->
                          <span class="icon icon-cross icon-delete"></span>
                      </div>

                  </div>

                  <hr />

                  <!--cart prices -->

                  <div class="clearfix">
                      <div class="cart-block cart-block-footer clearfix">
                          <div>
                              <strong>Discount 15%</strong>
                          </div>
                          <div>
                              <span>$ 159,00</span>
                          </div>
                      </div>

                      <div class="cart-block cart-block-footer clearfix">
                          <div>
                              <strong>Shipping</strong>
                          </div>
                          <div>
                              <span>$ 30,00</span>
                          </div>
                      </div>

                      <div class="cart-block cart-block-footer clearfix">
                          <div>
                              <strong>VAT</strong>
                          </div>
                          <div>
                              <span>$ 59,00</span>
                          </div>
                      </div>
                  </div>

                  <hr />

                  <!--cart final price -->

                  <div class="clearfix">
                      <div class="cart-block cart-block-footer clearfix">
                          <div>
                              <strong>Total</strong>
                          </div>
                          <div>
                              <div class="h4 title">$ 1259,00</div>
                          </div>
                      </div>
                  </div>


                  <!--cart navigation -->

                  <div class="cart-block-buttons clearfix">
                      <div class="row">
                          <div class="col-sm-6">
                              <a href="products-grid.html" class="btn btn-outline-info">Continue shopping</a>
                          </div>
                          <div class="col-sm-6 text-right">
                              <a href="checkout-1.html" class="btn btn-outline-warning"><span class="icon icon-cart"></span> Checkout</a>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>
</nav>