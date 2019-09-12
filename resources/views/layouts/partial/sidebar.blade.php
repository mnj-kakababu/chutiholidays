<div class="sidebar" data-color="green" data-background-color="white" data-image="{{asset('backend/img/sidebar-1.jpg')}}">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{request::is('admin/dashboard*')? "active":""}}">
                <a class="nav-link" href="{{route('admin.dashboard')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{request::is('admin/slider*')? "active":""}}">
                <a class="nav-link" href="{{route('slider.index')}}">
                    <i class="material-icons">slideshow</i>
                    <p>Slider</p>
                </a>
            </li>
            <li class="{{request::is('admin/top_package*')? "active":""}}">
                <a class="nav-link" href="{{route('top_package.index')}}">
                    <i class="material-icons">content_paste</i>
                    <p>Top Package</p>
                </a>
            </li>
            <li class="{{request::is('admin/offer*')? "active":""}} ">
                <a class="nav-link" href="{{route('offer.index')}}">
                    <i class="material-icons">local_offer</i>
                    <p>Offer</p>
                </a>
            </li>
            <li class="{{request::is('admin/top_destination*')? "active":""}}">
                <a class="nav-link" href="{{route('top_destination.index')}}">
                    <i class="material-icons">flight</i>
                    <p>Top Destination</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./rtl.html">
                    <i class="material-icons">language</i>
                    <p>RTL Support</p>
                </a>
            </li>
            <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
    </div>
</div>
