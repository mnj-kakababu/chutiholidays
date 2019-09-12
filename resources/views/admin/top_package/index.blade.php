@extends('layouts.app')

@section('title','Top Package')

@push('css')

@endpush

@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12" >
           <a href="{{ route('top_package.create') }}" class="btn btn-primary">Add New</a>
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
                      City Name
                    </th>
                    <th>
                      Country Name
                    </th>
                    <th>
                      Price
                    </th>
                    <th>
                      Details
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
                      @foreach ($top_packages as $key => $top_package)
                    <tr>
                        <td>
                       {{ $key + 1 }}
                        </td>
                        <td>
                        {{$top_package->city}}
                        </td>
                         <td>
                        {{$top_package->country}}
                         </td>
                        <td>
                        {{$top_package->price}}
                        </td>
                        <td>
                            {{str_limit($top_package->details, 10 ,'&raquo;')}}
                        </td>
                         <td>
                        {{$top_package->image}}
                         </td>
                         <td>
                        {{$top_package->created_at}}
                        </td>
                        <td>
                        {{$top_package->updated_at}}
                        </td>
                        <td>

                        <a href="{{ route('top_package.edit',$top_package->id) }}" class="btn btn-info btn-sm"><i class="material-icons">mode_edit</i></a>
                       {{-- <form id="delete-form-{{ $top_package->id }}" action="{{ route('top_package.destroy',$top_package->id) }}" style="display: none;" method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                            <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                event.preventDefault();
                                document.getElementById('delete-form-{{ $top_package->id }}').submit();
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
