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
            @if (Auth::user()->hasRole('superadministrator|administrator'))
              <a href="{{route('admin.clients.create')}}" class="button is-primary is-outlined mb-4">Add New Client <i class="fa fa-plus ml-2"></i></a>
            @endif
            <div style="overflow-x: scroll">
              <table id="clients-table" class="cell-border" style="width:100%">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Email</th>
                    <th>Created at</th>
                    {{-- <th>Action</th> --}}
                  </tr>
                </thead>
                <tbody>
                  {{-- @foreach ($clients as $client)
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
                  @endforeach --}}
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
  $.fn.dataTable.ext.classes.sPageButton = 'button pagination-link';
  $.fn.dataTable.ext.classes.sPageButtonActive = 'button is-current';
  $('#clients-table').DataTable({
       processing: true,
       serverSide: true,
       ajax: '{{ route('api.clients.index') }}',
       columns: [
           {data: 'id', name: 'clients.id'},
           {data: 'name', name: 'clients.name'},
           {data: 'company.company_name', name: 'company.company_name'},
           {data: 'email', name: 'clients.email'},
           {data: 'created_at', name: 'clients.created_at'},
           // {data: 'updated_at', name: 'posts.updated_at'}
       ]
   });
  </script>
@endsection
