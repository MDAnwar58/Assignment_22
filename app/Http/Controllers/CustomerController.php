<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(Request $request)
    {
        $searchQuery = $request->query('search');

        $query = Customer::query();

        if ($searchQuery) {
            $query->where('name', 'like', '%' . $searchQuery . '%')
                ->orWhere('email', 'like', '%' . $searchQuery . '%')
                ->orWhere('address', 'like', '%' . $searchQuery . '%')
                ->orWhere('contact_number', 'like', '%' . $searchQuery . '%');
        }

        $customers = $query->latest()->paginate(5);
        return view('customer.index', compact('customers', 'searchQuery'));
    }

    function create()
    {
        return view('customer.create');
    }
    function store(CustomerStoreRequest $request)
    {
        // return $request->all();
        Customer::create($request->validated());

        return redirect()->route('customer.index')->with('success', 'Customer created successfully!');
    }
    function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }
    function update(CustomerUpdateRequest $request, Customer $customer)
    {
        $customer->update($request->validated());

        return redirect()->route('customer.index')->with('success', 'Customer has been updated successfully!');
    }
    function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Customer has been deleted successfully!');
    }
}
