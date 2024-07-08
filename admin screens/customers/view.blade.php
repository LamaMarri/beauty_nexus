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
                            <li><a href="{{ route('dashboard.customers.index') }}">Customers</a></li>
                            <li class="active">Customers Details</li>
                         </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        
@endsection
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $customer->first_name }} {{ $customer->last_name }}</h2>
            </div>
            <div class="card-body">
            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col">{{ $customer->email }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">{{ $customer->phone_number }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Address</th>
                                        <th scope="col">{{ $customer->address }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Last Login</th>
                                        <th scope="col">
                                            {{ $customer->last_login }}
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
        <a href="{{ route('dashboard.customers.index') }}" class="btn btn-primary mt-3">Back to List</a>

            </div>
        </div>
    </div>
@endsection

                            