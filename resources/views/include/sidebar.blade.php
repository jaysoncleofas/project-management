<div id="side-menu" class="is-hidden-mobile" :class="{'is-active': !isActive}">
  <div class="logo">
    <p>
      <span class="icon"><i class="fa fa-user"></i></span>
      {{Auth::user()->name}}
    </p>
  </div>
  @include('include.menu')
</div>

<div id="side-menu1" class="is-hidden-tablet" :class="{'is-active': !isActive}">
  <div class="logo">
    <p>
      <span class="icon"><i class="fa fa-user"></i></span>
      {{Auth::user()->name}}

      <span class="icon" style="float:right">
        <a class="navbar-item has-text-white" @click="isActive = !isActive">
          <span class="icon"><i class="fa fa-times"></i></span>
        </a>
      </span>
    </p>
  </div>
  @include('include.menu')
</div>
