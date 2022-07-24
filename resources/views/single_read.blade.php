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
                            <form action="{{ route('TestController_update') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <input name="user_id" type="hidden" value="{{ $single_user->id }}">
                                    <label for="name" class="form-label">Name</label>
                                    <input name="name" type="text" value="{{ $single_user->name }}" class="form-control" id="name" placeholder="Enter your name">
                                  </div>
                                <div class="mb-3">
                                  <label for="email" class="form-label">Email address</label>
                                  <input name="email" type="email" value="{{ $single_user->email }}" class="form-control" id="email" aria-describedby="email" placeholder="Enter your Email Address">
                                  <div id="email" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                               
                                <div class="mb-3">
                                    <label for="address" class="form-label">Your Address</label>
                                    <input name="address" type="text" value="{{ $single_user->address }}" class="form-control" id="address" placeholder="Give your Address">
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                              </form>
                        </div>
                    </section>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
