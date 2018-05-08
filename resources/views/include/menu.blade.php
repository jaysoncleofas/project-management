@if (auth()->user()->hasRole('superadministrator') || auth()->user()->hasRole('administrator'))
  @include('include.admin_user_menu.admin_menu')
@elseif (auth()->user()->hasRole('user'))
  @include('include.admin_user_menu.user_menu')
@endif
