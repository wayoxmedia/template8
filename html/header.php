<!-- Main Header / Header Style Four -->
<header class="main-header header-style-four">

  <!-- Header Upper -->
  <div class="header-upper">
    <div class="auto-container">
      <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
        <!-- Logo Box -->
        <div class="logo"><a href="#"><img src="images/logo-2.png" alt="" title=""></a></div>

        <div class="nav-outer d-flex">

          <!-- Main Menu -->
          <nav class="main-menu show navbar-expand-md d-flex align-items-center">
            <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>

            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
              <ul class="navigation clearfix">
                <li class="dropdown"><a href="#"><?= TXT_HOME ?></a>
                  <ul>
                    <li><a href="#"><?= LINK1 ?></a></li>
                    <li><a href="#"><?= LINK2 ?></a></li>
                    <li><a href="#"><?= LINK3 ?></a></li>

                    <li class="dropdown"><a href="#"><?= TXT_SUBMENU ?></a>
                      <ul>
                        <li><a href="#"><?= LINK1 ?></a></li>
                        <li><a href="#"><?= LINK2 ?></a></li>
                        <li><a href="#"><?= LINK3 ?></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown"><a href="#">About</a>
                  <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="testimonial.html">Testimonial</a></li>
                  </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>

            <!-- Search Box -->
            <div class="search-box-outer">
              <div class="search-box-btn"><span class="flaticon-search"></span></div>
            </div>

            <!-- Cart Box -->
            <div class="cart-box">
              <a class="cart fa-solid fa-cart-plus fa-fw" href="contact.html"></a>
            </div>

          </nav>
          <!-- Main Menu End-->

          <div class="outer-box d-flex align-items-center">

            <!-- Button Box -->
            <div class="button-box">
              <a class="btn-style-eight theme-btn btn-item" href="contact.html">
                <div class="btn-wrap">
                  <span class="text-one">Get A Quote</span>
                  <span class="text-two">Get NOW</span>
                </div>
              </a>
            </div>

          </div>

          <!-- Mobile Navigation Toggler -->
          <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

        </div>

      </div>
    </div>
  </div>

  <!-- Sticky Header  -->
  <div class="sticky-header">
    <div class="auto-container">
      <div class="d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <div class="logo">
          <a href="index.html" title=""><img src="images/logo-2.png" alt="" title=""></a>
        </div>

        <!-- Right Col -->
        <div class="right-box d-flex align-items-center flex-wrap">
          <!-- Main Menu -->
          <nav class="main-menu d-flex align-items-center">
            <!--Keep This Empty / Menu will come through Javascript-->
          </nav>
          <!-- Main Menu End-->

          <div class="outer-box d-flex align-items-center">

            <!-- Button Box -->
            <div class="button-box">
              <a class="btn-style-eight theme-btn btn-item" href="contact.html">
                <div class="btn-wrap">
                  <span class="text-one">Get A Quote</span>
                  <span class="text-two">Get A Quote</span>
                </div>
              </a>
            </div>

            <!-- Mobile Navigation Toggler -->
            <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

          </div>

        </div>

      </div>
    </div>
  </div>
  <!-- End Sticky Menu -->

  <!-- Mobile Menu  -->
  <div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><span class="icon fas fa-window-close fa-fw"></span></div>
    <nav class="menu-box">
      <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
      <!-- Search -->
      <div class="search-box">
        <form method="post" action="contact.html">
          <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
            <button type="submit"><span class="icon flaticon-001-loupe"></span></button>
          </div>
        </form>
      </div>
      <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
    </nav>
  </div>
  <!-- End Mobile Menu -->

</header>
<!-- End Main Header -->
