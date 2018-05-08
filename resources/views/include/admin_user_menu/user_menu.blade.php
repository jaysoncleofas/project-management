<aside class="menu">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a class="{{Nav::isRoute('user.dashboard')}}" href="{{route('user.dashboard')}}"><i class="fa fa-tachometer"></i> Dashboard</a></li>
    <li><a class="{{Nav::isResource('clients')}}" href="{{route('user.clients.index')}}"><i class="fa fa-users"></i> Clients</a></li>
  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li><a>Employeees</a></li>
    <li><a>Projects</a></li>
    <li><a>Tasks</a></li>
  </ul>
  <p class="menu-label">
    Settings
  </p>
  <ul class="menu-list">
    <li><a>Profile</a></li>
    <li><a>Change Password</a></li>
  </ul>
</aside>
