@extends('layouts.app')

@section('title','Create Slider')

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
                  <h4 class="card-title ">Create New Slider</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      <form method="POST" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label class="bmd-label-floating">Title</label>
                                    <input type="text" class="form-control" name="title">
                                  </div>
                                </div>
                        </div>

                        <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                     <label class="bmd-label-floating">Sub Title</label>
                                     <input type="text" class="form-control" name="sub_title">
                                    </div>
                                </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                    <input type="file" name="image">
                                    <br><br>
                            <a href="{{route('slider.index')}}" class="btn btn-danger">Back</a>
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
