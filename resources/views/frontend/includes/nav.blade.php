 <!-- Header -->
 <header class="">
     <nav class="navbar navbar-expand-lg">
         <div class="container">
             <a class="navbar-brand" href="{{ route('Front.index') }}">
                 <h2>Blog Project<em>.</em></h2>
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                 aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarResponsive">
                 <ul class="navbar-nav ml-auto">
                     <li class="nav-item active">
                         <a class="nav-link" href="{{ route('Front.index') }}">{{ __('Home') }}
                             <span class="sr-only">(current)</span>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('Front.about') }}">{{ __('About Us') }}</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('Front.all_post') }}">{{ __('Blog') }}</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="{{ route('contact-us') }}">{{ __('Contact Us') }}</a>
                     </li>
                 </ul>
             </div>
        </div>
     </nav>
 </header>
