<nav class="navbar is-info is-fixed-top" :class="{'is-active': !isActive}" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">

    <a id="slide-button" :class="{'is-active': !isActive}" class="navbar-item is-hidden-mobile" @click="isActive = !isActive">
      <span class="icon"><i class="fa fa-chevron-circle-left"></i></span>
    </a>

    <a class="navbar-item is-hidden-tablet" @click="isActive = !isActive">
      <span class="icon"><i class="fa fa-chevron-circle-right"></i></span>
    </a>

    <a class="navbar-item">
      Project Management System
    </a>

    <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>

  </div>
  <div class="navbar-menu" id="navMenu">
    <!-- navbar start, navbar end -->
    <div class="navbar-end">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link">
          <p><i class="fa fa-user mr-2"></i>{{Auth::user()->email}}</p>
        </a>
        <div class="navbar-dropdown is-right">
          <a class="navbar-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-power-off mr-2"></i> Logout
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        </div>
      </div>
    </div>
  </div>
</nav>
