<div class="breadcrumb-content">
  <nav class="level">
    <div class="level-left">
      <span class="icon"><i class="fa fa-users"></i></span>Clients
    </div>
    <!-- Right side -->
    <div class="level-right">
      <nav class="breadcrumb" aria-label="breadcrumbs">
        @if (Request::is('admin.clients.create'))
          <ul>
            <li><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li><a href="{{route('admin.clients.index')}}">Clients</a></li>
            <li class="is-active"><a href="#" aria-current="page">Create</a></li>
          </ul>
        @else
          <ul>
            <li><a href="{{route('admin.dashboard')}}">Home</a></li>
            <li class="is-active"><a href="#" aria-current="page">Clients</a></li>
          </ul>
        @endif
      </nav>
    </div>
  </nav>
</div>
