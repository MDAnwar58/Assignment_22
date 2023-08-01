@extends('layouts.app')
@section('title', 'Customers')

@section('content')
    <div class="container" style="padding: 5rem 0 0 0;">
        <div class="row justify-content-center">
            <div class="col-md-11">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <span class="h4">Customers List</span>
                        <a href="{{ route('customer.create') }}" class="btn btn-dark">Customer Create</a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('customer.index') }}" method="GET" class="form-inline mb-3">
                            <div class="form-group mr-2 d-flex">
                                <input type="text" name="search" class="form-control" placeholder="Search"
                                    value="{{ $searchQuery }}">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>

                        @if ($customers->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Contact Number</th>
                                            <th>Action</th>
                                            <!-- Add other relevant fields here -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td>{{ $customer->name }}</td>
                                                <td>{{ $customer->email }}</td>
                                                <td>{{ $customer->address }}</td>
                                                <td>{{ $customer->contact_number }}</td>
                                                <td>
                                                    <a href="{{ route('customer.edit', $customer) }}"
                                                        class="btn btn-primary btn-sm">Edit</a>
                                                    <form action="{{ route('customer.destroy', $customer) }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger"
                                                            onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                                                    </form>
                                                </td>
                                                <!-- Add other relevant fields here -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $customers->links() }}
                        @else
                            <p>No customers found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
