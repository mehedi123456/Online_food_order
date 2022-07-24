@extends('layouts.app');
@section('content')

<section>
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
          
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error )
              <li>{{ $error }}</li>
                
              @endforeach

            </ul>

          </div><br />
            
          @endif

            <form action="{{ route('foodInput') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" type="text" class="form-control" id="title" value="{{ old('title') }}" placeholder="The name of the product">
                  </div>
                <div class="mb-3">
                  <label for="discription" class="form-label">Discription</label>
                  <input name="discription" type="text" class="form-control" id="discription" value="{{ old('discription') }}" placeholder="Enter Food Discription">
                </div>
               
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input name="price" type="text" class="form-control" id="price" value="{{ old('price') }}" placeholder="Price of the Product">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
  </div>
</section>


@endsection