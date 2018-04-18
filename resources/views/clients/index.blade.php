@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection

@section('content')
  @include('clients.include.breadcrumb')
  <div class="section mt-3">
    <div class="columns">
      <div class="column is-2">
        <div class="box is-uppercase total">
          <nav class="level">
            <div class="level-item has-text-centered">
              <div>
                <p class="heading is-size-7">Total Clients</p>
                <p class="title has-text-white">{{$clients->count()}}</p>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>

    <div class="columns">
      <div class="column">
        <div class="card">
          <div class="card-content">
            <a href="{{route('clients.create')}}" class="button is-primary is-outlined mb-4">Add New Client <i class="fa fa-plus ml-2"></i></a>
            <div style="overflow-x: scroll">
              <table id="myTable" class="cell-border" style="width:100%">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($clients as $client)
                    <tr>
                      <td>{{$client->id}}</td>
                      <td>{{$client->name}}</td>
                      <td>{{$client->company->company_name}}</td>
                      <td>{{$client->email}}</td>
                      <td>{{$client->created_at->toFormattedDateString()}}</td>
                      <td>
                        <a class="button is-link is-rounded tooltip is-small" data-tooltip="Edit"><i class="fa fa-pencil"></i></a>
                        <a class="button is-primary is-rounded tooltip is-small" data-tooltip="View Client details"><i class="fa fa-search"></i></a>
                        <a class="button is-danger is-rounded tooltip is-small" data-tooltip="Delete"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable();
  } );
  </script>
@endsection
