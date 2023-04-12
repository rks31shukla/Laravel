<div class="border-end border-warning h-100">
    <div class="text-center">
        <img src={{ asset('images/dp.jpg') }} alt="" class="img-fluid rounded-circle mt-5">
        <h3 class="text-white mt-3 st-font">Sonam</h3>
    </div>
    <nav class="nav flex-column text-centre mt4">
        <a href="{{ route('home')}}" class="nav-link {{ Request::routeIs('home') ? 'active' : ''}}">Home</a>
        <a href="{{ route('services')}}" class="nav-link {{ Request::routeIs('services') ? 'active' : ''}}">Services</a>
        <a href="{{ route('skill')}}" class="nav-link {{ Request::routeIs('skill') ? 'active' : ''}}">Skills</a>
        <a href="{{ route('contact')}}" class="nav-link  {{ Request::routeIs('contact') ? 'active' : ''}}">Contact</a>
    </nav>
</div>