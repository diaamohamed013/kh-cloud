 <!-- Start header -->
 <header class="top-navbar">
     <nav class="navbar navbar-expand-lg navbar-light navBackground">
         <div class="container-fluid">
             <a class="navbar-brand d-flex justify-content-center align-items-center mb-0"
                 href="{{ route('site.home') }}">
                 <img src="{{ asset('site/images/logo.png') }}" alt="" width="70" />
                 <span class="mx-2 d-flex flex-column logoName">
                     <strong class="text-white">
                         Al Khwarizmi
                     </strong>
                     <strong class="subLogoName">
                         For Software
                     </strong>
                 </span>
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                 aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
                 <span class="icon-bar"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbars-host">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item @if (request()->is('home*')) active @endif">
                         <a class="nav-link" href="{{ route('site.home') }}">
                             Home
                         </a>
                     </li>
                     <li class="nav-item @if (request()->is('about-us*')) active @endif">
                         <a class="nav-link" href="{{ route('site.aboutUs') }}">
                             About Us
                         </a>
                     </li>
                     <li class="nav-item @if (request()->is('features*')) active @endif">
                         <a class="nav-link" href="{{ route('site.features') }}">
                             Features
                         </a>
                     </li>
                     <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="dropdown-a"
                             data-toggle="dropdown">Products </a>
                         <div class="dropdown-menu" aria-labelledby="dropdown-a">
                             <a class="dropdown-item" href="{{ route('site.products') }}">Edu Cloud System </a>
                         </div>
                     </li>
                     {{-- <li class="nav-item"><a class="nav-link" href="domain.html">Domain</a></li> --}}
                     <li class="nav-item @if (request()->is('pricing*')) active @endif">
                         <a class="nav-link" href="{{ route('site.pricing') }}">
                             Pricing
                         </a>
                     </li>
                     <li class="nav-item @if (request()->is('contact-us*')) active @endif">
                         <a class="nav-link" href="{{ route('site.contactUs') }}">
                             Contact
                         </a>
                     </li>
                     <div style="padding: 6px 0px;">
                         {{-- <a href="#" class="nav-item nav-link text-capitalize" onclick="selected()">
                             <i class="flag-icon flag-icon-gb"></i>
                         </a> --}}
                         <a href="#" class="nav-item nav-link text-capitalize" onclick="selected()">
                             <i class="flag-icon flag-icon-eg"></i>
                         </a>
                     </div>
                 </ul>
                 {{-- <ul class="nav navbar-nav navbar-right">
                     <li><a class="hover-btn-new log" href="#" data-toggle="modal"
                             data-target="#login"><span>Customer Login</span></a></li>
                 </ul> --}}
             </div>
         </div>
     </nav>
 </header>
 <!-- End header -->
