@extends('dashboard.layouts.master')

@section('bread')

    
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Customers</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="active">Customers</li>
                         </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        
@endsection
@section('content')
    <div class="col-lg-12">
      
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">List</strong>
                        </div>
                        <div class="card-body">
                            <form action="" method="get">
                                <div class="row mb-2">
                                    <div class="col-md-8">
                                        <select name="p" id="" class="form-control" style="width: 10%;">
                                            <option value="20" {{request()->p == 20 || !request()->w ? 'selected' : ''}}>20</option>
                                            <option value="30" {{ request()->p == 30 ? 'selected' : '' }}>30</option>
                                            <option value="40" {{ request()->p == 40 ? 'selected' : '' }}>40</option>
                                            <option value="50" {{ request()->p == 50 ? 'selected' : '' }}>50</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" placeholder="Search..." name="w" value="{{request()->w}}" class="form-control float-end">
                                    </div>
                                    <div class="col-md-1">
                                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($customers as $customer)
                                        <tr>
                                            <td>{{ $customer->customer_id }}</td>
                                            <td>{{ $customer->first_name }} {{ $customer->last_name }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->phone_number }}</td>
                                           
                                            <td>
                                                <a href="{{ route('dashboard.customers.show', $customer->customer_id) }}" class="btn btn-info">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                @empty
                                <tr>
                                    <th colspan="6" class="text-center">No Data in the table</th>
                                </tr>    
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
    </div>
@endsection
