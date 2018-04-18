@extends('layouts.app')

@section('content')
  @include('clients.include.breadcrumb')
  <div class="section mt-3">

    <div class="columns">
      <div class="column">
        <div class="card">
          <header class="card-header">
            <p class="card-header-title is-uppercase">Add Client Info</p>
          </header>
          <form action="{{route('clients.store')}}" method="post">
            @csrf
            <div class="card-content">
              <label>Company Details</label>
              <hr>
              <div class="columns is-multiline">
                <div class="column is-6">
                  <div class="field">
                    <label>Company Name</label>
                    <div class="control">
                      <input class="input" type="text" name="company_name" value="">
                    </div>
                  </div>
                </div>
                <div class="column is-6">
                  <div class="field">
                    <label>Website</label>
                    <div class="control">
                      <input class="input" type="text" name="website" value="">
                    </div>
                  </div>
                </div>
                <div class="column is-12">
                  <div class="field">
                    <label>Address</label>
                    <div class="control">
                      <input class="input" type="text" name="address" value="">
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <label>Client Details</label>
              <hr>
              <div class="columns is-multiline">
                <div class="column is-6">
                  <div class="field">
                    <label>Client Name</label>
                    <div class="control">
                      <input class="input" type="text" name="name" value="">
                    </div>
                  </div>
                </div>
                <div class="column is-6">
                  <div class="field">
                    <label>Client Email</label>
                    <div class="control">
                      <input class="input" type="text" name="email" value="">
                    </div>
                  </div>
                </div>
                <div class="column is-6">
                  <div class="field">
                    <label>Mobile</label>
                    <div class="control">
                      <input class="input" type="text" name="mobile" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="columns is-multiline">
                <div class="column is-3">
                  <div class="field">
                    <label>Skype</label>
                    <div class="control">
                      <input class="input" type="text" name="skype" value="">
                    </div>
                  </div>
                </div>
                <div class="column is-3">
                  <div class="field">
                    <label>Linkedin</label>
                    <div class="control">
                      <input class="input" type="text" name="linkedin" value="">
                    </div>
                  </div>
                </div>
                <div class="column is-3">
                  <div class="field">
                    <label>Twitter</label>
                    <div class="control">
                      <input class="input" type="text" name="twitter" value="">
                    </div>
                  </div>
                </div>
                <div class="column is-3">
                  <div class="field">
                    <label>Facebook</label>
                    <div class="control">
                      <input class="input" type="text" name="facebook" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="columns">
                <div class="column">
                  <div class="field">
                    <label>Note</label>
                    <div class="control">
                      <textarea class="textarea" name="note" placeholder="e.g. Hello world"></textarea>
                    </div>
                  </div>
                  <div class="field is-grouped">
                    <div class="control">
                      <button type="submit" class="button is-primary">Save</button>
                    </div>
                    <div class="control">
                      <button class="button is-text">Cancel</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
