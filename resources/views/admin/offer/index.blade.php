@extends('layouts.app')

@section('title','Offer')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12" >
           <a href="{{ route('offer.create') }}" class="btn btn-primary">Add New</a>
            @include('layouts.partial.msg')
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Top Package</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Location
                    </th>
                    <th>
                      Percentage
                    </th>
                    <th>
                      Offer name
                    </th>
                    <th>
                      Details
                    </th>
                    <th>
                        Created At
                    </th>
                    <th>
                        Updated At
                    </th>
                    <th>
                        Action
                    </th>
                  </thead>
                  <tbody>
                      @foreach ($offers as $key => $offer)
                    <tr>
                        <td>
                       {{ $key + 1 }}
                        </td>
                        <td>
                        {{$offer->location}}
                        </td>
                         <td>
                        {{$offer->percent}}
                         </td>
                        <td>
                        {{$offer->offer_name}}
                        </td>
                        <td>
                            {{str_limit($offer->details, 10 ,'&raquo;')}}
                        </td>
                         <td>
                        {{$offer->created_at}}
                        </td>
                        <td>
                        {{$offer->updated_at}}
                        </td>
                        <td>

                        <a href="{{ route('offer.edit',$offer->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                       {{-- <form id="delete-form-{{ $offer->id }}" action="{{ route('offer.destroy',$offer->id) }}" style="display: none;" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $offer->id }}').submit();
                            }else {
                                event.preventDefault();
                                    }"><i class="material-icons">delete</i></button>--}}
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
  </div>
@endsection

@push('scripts')
<script>

</script>
@endpush
