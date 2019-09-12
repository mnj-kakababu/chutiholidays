@extends('layouts.app')

@section('title','Create Offer')

@push('css')

@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12" >
                @if($errors->any())
            <div class='alart alart-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Create New Offer</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      <form method="POST" action="{{ route('offer.store') }}" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Location</label>
                                    <input type="text" class="form-control" name="location">
                                  </div>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label class="bmd-label-floating">percent</label>
                                     <input type="text" class="form-control" name="percent">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Offer name</label>
                                      <input type="text" class="form-control" name="offer_name">
                                  </div>
                              </div>
                        </div>
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Details</label>
                                      <input type="text" class="form-control" name="details">
                                  </div>
                              </div>
                          </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">

                                    <br><br>
                            <a href="{{route('offer.index')}}" class="btn btn-danger">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                      </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@push('scripts')
<script>

</script>
@endpush
