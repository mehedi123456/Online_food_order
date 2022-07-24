@extends('layouts.app')



@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <section>
                        <div class="container">

                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error )
                                <li>{{ $error }}</li>
                                    
                                @endforeach

                                </ul>

                            </div><br />
                                
                        @endif

                            <form action="{{ route('TestController_input') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input name="name" type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter Employee name">
                                  </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email address</label>
                                  <input name="email" type="email" class="form-control" id="email" aria-describedby="email" value="{{ old('email') }}" placeholder="Enter Employee Email Address">
                                </div>

                                <div class="mb-3">
                                    <label for="number" class="form-label">Employee Contract Number</label>
                                    <input name="number" type="text" class="form-control" id="address" value="{{ old('number') }}" placeholder="Contract Number">
                                </div>
                               
                                <div class="mb-3">
                                    <label for="address" class="form-label">Your Address</label>
                                    <input name="address" type="text" class="form-control" id="address" value="{{ old('address') }}" placeholder="Give your Address">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                        </div>
                    </section>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
