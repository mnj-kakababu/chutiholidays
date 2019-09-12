@extends('layouts.app')

@section('title','Top Destination')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12" >
           <a href="{{ route('top_destination.create') }}" class="btn btn-primary">Add New</a>
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
                        Destination Name
                    </th>
                    <th>
                        Destinations Description
                    </th>
                    <th>
                      Price
                    </th>
                    <th>
                      Image
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
                      @foreach ($top_destinations as $key => $top_destination)
                    <tr>
                        <td>
                       {{ $key + 1 }}
                        </td>
                        <td>
                        {{$top_destination->destination_name}}
                        </td>
                        <td>
                            {{str_limit($top_destination->destinations_description, 10 ,'&raquo;')}}
                        </td>
                        <td>
                        {{$top_destination->price}}
                        </td>

                         <td>
                        {{$top_destination->image}}
                         </td>
                         <td>
                        {{$top_destination->created_at}}
                        </td>
                        <td>
                        {{$top_destination->updated_at}}
                        </td>
                        <td>

                        <a href="{{ route('top_destination.edit',$top_destination->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                       {{-- <form id="delete-form-{{ $top_destination->id }}" action="{{ route('top_destination.destroy',$top_destination->id) }}" style="display: none;" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $top_destination->id }}').submit();
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
