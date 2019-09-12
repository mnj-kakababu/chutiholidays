@extends('layouts.app')

@section('title','Edit Offer')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @include('layouts.partial.msg')
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title">Edit Top Package</h4>
                        </div>
                        <div class="card-content">
                            <form method="POST" action="{{ route('offer.update',$offer->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Location</label>
                                            <input type="text" class="form-control" name="location" value="{{ $offer->location }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Percent</label>
                                            <input type="text" class="form-control" name="percent" value="{{ $offer->percent }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Offer Name</label>
                                            <input type="text" class="form-control" name="offer_name" value="{{ $offer->offer_name }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Details</label>
                                            <input type="text" class="form-control" name="details" value="{{ $offer->details }}">
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('offer.index') }}" class="btn btn-danger">Back</a>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush
