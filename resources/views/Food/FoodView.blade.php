@extends('layouts.app')
@section('content')

 <div class="container">
    <div class="row">
        <div class="col-md-11">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Title</th>
                <th scope="col">Discription</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- $lists =['dsa','ssda']; --}}
              
              @foreach($lists as $list)
              
                  <tr>
                    <th scope="row">{{ $list->id }}</th>
                    <td>{{ $list->title }}</td>
                    <td>{{ $list->discription}}</td>
                    <td>{{ $list->price }}</td>
                    <td>
                      <a href="{{ url('/foodview/Foodread' ) }}/{{ $list->id }}" class="btn-sm btn-primary">Edit</a>
                      <a href="{{ url('/food/data/delete') }}/{{ $list->id }}" class="btn-sm btn-danger">Delete</a>
                  </td>
                  </tr>
                
              @endforeach
            </tbody>
          </table>
        
        </div>
    </div>
 </div>



@endsection