<header id="home">

      <nav id="nav-wrap">

         <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
	      <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>

         <ul id="nav" class="nav">
            <li class="current"><a  href="{{ route('frontend.profile') }}">@lang('mylang.home')</a></li>
	         <li><a  href="{{ route('frontend.resume') }}">@lang('mylang.resume')</a></li>
            <li><a class="smoothscroll" href="#portfolio">@lang('mylang.work')</a></li>
            <li><a class="smoothscroll" href="#testimonials">@lang('mylang.testimonials')</a></li>
            <li><a class="smoothscroll" href="#contact">@lang('mylang.contact')</a></li>
            <li><a href="#">|</a></li>
            <li><a href="{{ route('swithLang', ['lang'  => 'vi']) }}">Vietnamese</a></li>
            <li><a href="{{ route('swithLang', ['lang'  => 'en']) }}">English</a></li>
            <li><a href="{{ route('swithLang', ['lang'  => 'ja']) }}">Japan</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">{{ $info->fullname }}</h1>
            <h3>I'm a Manila based <span>graphic designer</span>, <span>illustrator</span> and <span>webdesigner</span> creating awesome and
            effective visual identities for companies of all sizes around the globe. Let's <a class="smoothscroll" href="#about">start scrolling</a>
            and learn more <a class="smoothscroll" href="#about">about me</a>.</h3>
            <hr />
            <ul class="social">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header>