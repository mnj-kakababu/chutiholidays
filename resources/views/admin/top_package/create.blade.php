@extends('layouts.app')

@section('title','Create Top Package')

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
                  <h4 class="card-title ">Create New Top Package</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      <form method="POST" action="{{ route('top_package.store') }}" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">City Name</label>
                                    <input type="text" class="form-control" name="city">
                                  </div>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label class="bmd-label-floating">Country</label>
                                     <input type="text" class="form-control" name="country">
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label class="bmd-label-floating">Price</label>
                                      <input type="text" class="form-control" name="price">
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
                                    <input type="file" name="image">
                                    <br><br>
                            <a href="{{route('top_package.index')}}" class="btn btn-danger">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <br><br>

                            </div>
                            <br><br><br><br>
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
