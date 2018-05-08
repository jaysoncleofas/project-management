<aside class="menu">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <li><a class="{{Nav::isRoute('admin.dashboard')}}" href="{{route('admin.dashboard')}}"><i class="fa fa-tachometer"></i> Dashboard</a></li>
    <li><a class="{{Nav::isResource('clients')}}" href="{{route('admin.clients.index')}}"><i class="fa fa-users"></i> Clients</a></li>
  </ul>
  <p class="menu-label">
    Administration
  </p>
  <ul class="menu-list">
    <li><a>Employeees</a></li>
    <li><a>Projects</a></li>
    <li><a>Manage Users</a></li>
    <li><a>Roles</a></li>
    <li><a>Permisions</a></li>
  </ul>
  <p class="menu-label">
    Settings
  </p>
  <ul class="menu-list">
    <li><a>Profile</a></li>
    <li><a>Change Password</a></li>
  </ul>
</aside>
