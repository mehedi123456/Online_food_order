@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Welome to Wow World</h1>
            </div>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option selected>select Category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div>
    </div>
</div>
@endsection
