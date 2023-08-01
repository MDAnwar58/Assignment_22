@extends('layouts.app')
@section('title', 'Email Campaign')

@section('content')
    <div class="container" style="padding: 5rem 0 0 0;">
        <div class="row justify-content-center">
            <div class="col-md-5">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-center">
                        <span class="h4">Email Campagin</span>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('customer.email.campaign') }}" method="POST" class="form-inline mb-3">
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
                                <label for="subject">Subject</label>
                                <input type="text" name="subject" class="form-control" placeholder="address"
                                    value="">
                                @error('subject')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" rows="3" class="form-control"></textarea>
                                @error('content')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary mt-2 w-100">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
