@extends('layouts.app');
@section('content')

<section>
  <div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('item_update') }}" method="POST">
                @csrf
                <input name="item_id" type="hidden" value="{{ $foodIteam->id }}">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input name="title" type="text" value="{{ $foodIteam->title }}" class="form-control" id="title" placeholder="The name of the product">
                  </div>
                <div class="mb-3">
                  <label for="discription" class="form-label">Discription</label>
                  <input name="discription" type="text" value="{{ $foodIteam->discription }}" class="form-control" id="discription" placeholder="Enter Food Discription">
                </div>
               
                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input name="price" type="number" value="{{ $foodIteam->price }}" class="form-control" id="price" placeholder="Price of the Product">
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
              </form>
        </div>
    </div>
  </div>
</section>


@endsection