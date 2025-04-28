    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky header-feature">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route('site.products') }}" class="logo py-1">
                            Edu Cloud System
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav navLink">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#courses">Modules</a></li>
                            <li class="scroll-to-section"><a href="#contact">Contact Us</a></li>
                            <li class="scroll-to-section featurePageContainer"
                                style="background-color: #f5a425 ; border-radius: 5px; color: #fff !important;">
                                <a href="{{ route('site.products.features') }}" target="_b" id="featurePage">
                                    Features
                                </a>
                            </li>
                            {{-- <div style="padding: 6px 0px;">
                                <a href="#" class="nav-item nav-link text-capitalize" onclick="selected()">
                                    <i class="flag-icon flag-icon-gb"></i>
                                </a>
                                <a href="#" class="nav-item nav-link text-capitalize" onclick="selected()">
                                    <i class="flag-icon flag-icon-eg"></i>
                                </a>
                            </div> --}}
                            <div class="selectCategory">
                                <div class="categories">
                                    <i class="fa fa-chevron-down" aria-hidden="true" id="IconArrow"></i>
                                    <p class="mb-0 mx-1" id="selectText" style="color: #fff;">
                                        EN
                                    </p>
                                    <ul id="lists">
                                        <li class="categoryOptions">
                                            <a href="http://localhost/sahelbooks.com/home/switch-lang/english">
                                                ع
                                            </a>
                                        </li>
                                        <li class="categoryOptions">
                                            <a href="http://localhost/sahelbooks.com/home/switch-lang/arabic">
                                                EN
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </ul>
                        <div class="clr"></div>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
