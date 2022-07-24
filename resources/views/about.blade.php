@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nmae</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contract Number</th>
                        <th scope="col">Address</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @forelse ($lists as $list )
                        <tr>
                            <th scope="row">{{ $list->id }}</th>
                            <td>{{ $list->name }}</td>
                            <td>{{ $list->email }}</td>
                            <td>{{ $list->number }}</td>
                            <td>{{ $list->address }}</td>
                            <td>{{ $list->created_at }}</td>
                            <td>
                                <a href="{{ url('/user/about' ) }}/{{ $list->id }}" class="btn-sm btn-primary">Edit</a>
                                <a href="{{ url('/user/about/delete') }}/{{ $list->id }}" class="btn-sm btn-danger">Delete</a>
                            </td>
                          </tr>
                      
                          @empty
                          
                      @endforelse
                     
                    </tbody>
                  </table>
                  {{ $lists->links() }}

            </div>

        </div>

    </div>

@endsection