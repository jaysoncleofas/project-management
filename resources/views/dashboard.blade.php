@extends('layouts.app')

@section('content')
<div class="breadcrumb-content">
  <nav class="level">
    <div class="level-left">
      <span class="icon"><i class="fa fa-tachometer"></i></span>Dashboard
    </div>
    <!-- Right side -->
    <div class="level-right">
      <nav class="breadcrumb" aria-label="breadcrumbs">
        <ul>
          <li><a href="{{route('dashboard')}}">Home</a></li>
          <li class="is-active"><a href="#" aria-current="page">Dashboard</a></li>
        </ul>
      </nav>
    </div>
  </nav>
</div>
<div class="columns">
  <div class="column">
    <nav class="level is-mobile mt-5">
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Tweets</p>
          <p class="title">3,456</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Following</p>
          <p class="title">123</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Followers</p>
          <p class="title">456K</p>
        </div>
      </div>
      <div class="level-item has-text-centered">
        <div>
          <p class="heading">Likes</p>
          <p class="title">789</p>
        </div>
      </div>
    </nav>
  </div>
</div>
@endsection
