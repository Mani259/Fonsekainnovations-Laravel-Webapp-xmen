@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name}}'s Civilian Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <img src="/images/avatars/{{ Auth::user()->avatar}}" style="width:200px; height:200px; float:left; boarder-radius:50%; margin-right:25px;">
                        <form enctype="multipart/form-data" action="/home" method="POST">
                            <label> Upload Your Civilian Picture Here </label>
                            <input type="file" name="avatar">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name}}'s Mutant Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <img src="/images/avatars2/{{ Auth::user()->avatar2}}" style="width:200px; height:200px; float:left; boarder-radius:50%; margin-right:25px;">
                        <form enctype="multipart/form-data" action="/home" method="POST">
                            <label> Upload Your Mutant Picture Here </label>
                            <input type="file" name="avatar2">
                            <input type="hidden" name="_token" value="{{ csrf_token()}}">
                            <input type="submit" class="pull-right btn btn-sm btn-primary">
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ Auth::user()->name}}'s Powers</div>

                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
                            <div class="form-group">
                              <label for="input">Enter The Description Of Your Powers Below</label>
                              <textarea class="form-control" name="content" id="input" rows="10"></textarea>
                              </div>
                              @csrf
                              <input type="submit" class="pull-right btn btn-sm btn-primary">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
