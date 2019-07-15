<nav class="navbar navbar-inverse" >
	<div class="wrapper-inside">
    <a class="navbar-brand" href="#">
      <img src="{{url('/src/imgs/mpbl_logo.png')}}" alt="" style="width: 101px;background: #ef161f;margin-left: -15px;">
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav" style="margin-left: 50%;">
        <li class="nav-item {{(Request::is('/')) ? 'active' : ''}}">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item {{(Request::is('about')) ? 'active' : ''}}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item {{(Request::is('contact')) ? 'active' : ''}}">
          <a class="nav-link" href="/contact" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
        <li class="nav-item {{(Request::is('team')) ? 'active' : ''}}">
          <a class="nav-link" href="/team" tabindex="-1" aria-disabled="true">Team 2019</a>
        </li>
      </ul>
    </div>
	</div>
</nav>