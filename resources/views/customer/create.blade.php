@extends('layouts.app')
@section('title', 'Customer Create')

@section('content')
    <div class="container" style="padding: 5rem 0 0 0;">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header text-center">
                        <span class="h4">Customer Added</span>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('customer.store') }}" method="POST" class="form-inline mb-3">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="name" value="">
                                @error('name')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="email"
                                    value="">
                                @error('email')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="address">Your Address</label>
                                <input type="text" name="address" class="form-control" placeholder="address"
                                    value="">
                                @error('address')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="contact_number">Contact Number</label>
                                <input type="number" name="contact_number" class="form-control"
                                    placeholder="Contact number" value="">
                                @error('contact_number')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 w-100">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
