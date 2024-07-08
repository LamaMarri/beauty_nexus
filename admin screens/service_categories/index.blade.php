@extends('dashboard.layouts.master')

@section('bread')


<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Service Categories</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                            <li class="active">Service Categories</li>
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
                            <strong class="card-title float-end" style="float: right; height: 20px">
                                <a href="{{route('dashboard.service_categories.create')}}" class="btn btn-success">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </strong>
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
                                        <th style="width: 30%;">ID</th>
                                        <th style="width: 30%;">Name</th>
                                        <th style="width: 40%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($serviceCategories as $cat)
                                        <tr>
                                            <td>{{ $cat->service_category_id }}</td>
                                            <td>{{ $cat->category_name }}</td>

                                            <td>
                                                <a href="{{ route('dashboard.service_categories.edit', $cat->service_category_id) }}" class="btn btn-warning">
                                                    <i class="fa fa-pencil"></i> Edit
                                                </a>
                                                <form action="{{ route('dashboard.service_categories.destroy', $cat->service_category_id) }}" class="sub{{$cat->service_category_id}}"  method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger" onClick="confirmDelete({{$cat->service_category_id}});">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>
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
