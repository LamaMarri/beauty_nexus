@extends('dashboard.layouts.master')

@section('bread')

    
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Service Providers</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li><a href="{{ route('dashboard.service_providers.index') }}">Service Providers</a></li>
                            <li class="active">Service Provider Details</li>
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
                <h2>{{ $serviceProvider->first_name }} {{ $serviceProvider->last_name }}</h2>
            </div>
            <div class="card-body">
            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <th scope="col">Email</th>
                                        <th scope="col">{{ $serviceProvider->email }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Phone Number</th>
                                        <th scope="col">{{ $serviceProvider->phone_number }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Address</th>
                                        <th scope="col">{{ $serviceProvider->address }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Region</th>
                                        <th scope="col">{{ $serviceProvider->region }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">City</th>
                                        <th scope="col">{{ $serviceProvider->city }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Bio</th>
                                        <th scope="col">{{ $serviceProvider->bio }}</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">Status</th>
                                        <th scope="col">
                                            @if($serviceProvider->is_active)
                                                <span class="badge badge-pill badge-success">Active</span>
                                            @else
                                                <span class="badge badge-pill badge-danger">Not Active</span>
                                            @endif
                                        </th>
                                    </tr>
                                </tbody>
                            </table>
        <a href="{{ route('dashboard.service_providers.index') }}" class="btn btn-primary mt-3">Back to List</a>

            </div>
        </div>
    </div>
@endsection

                            