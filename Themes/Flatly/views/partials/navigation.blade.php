{{-- <header>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="col-md-12 text-center"><a href="index.html" class="brand"><img alt="Ben" src="images/logo.svg" class="default"><img alt="Ben" src="images/logo-white.svg" class="white"></a>
        <ul class="main-nav">
          <li><a href="index.html" title="Work" class="active">Portfolio</a>
          </li>
          <li><a href="pages/about.html" title="About">About</a>
          </li>
          <li><a href="pages/blog.html" title="Blog">Blog</a>
          </li>
          <li><a href="pages/contact.html" title="Contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header> --}}

{{-- <nav class="navbar navbar-default @guest navbar-fixed-top @endguest" style="@auth margin-top: -52px @endauth"> --}}
    {{-- <div class="container"> --}}
        {{-- <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('/') }}">@setting('core::site-name')</a>
        </div> --}}
    <header style="padding-bottom: 40px;">
        <div class="container-fluid">
          <div class="row-fluid">
            <div class="col-md-12 text-center"><a href="../home" class="brand"><img alt="Ben" src="@thumbnail('/assets/media/images/logo.svg', 'smallThumb')" class="default"></a>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                    {!! Menu::get('menu', 'Modules\Menu\Presenters\MenuPresenter') !!}
                </div>
            </div>
          </div>
        </div>
    </header>
    {{-- </div> --}}
{{-- </nav> --}}
