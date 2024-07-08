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
                            <li><a href="{{ route('dashboard.service_categories.index') }}">Service Categories</a></li>
                            <li class="active">Create New Category</li>
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
                Create New Category
            </div>
            <div class="card-body">
                {!!  Form::open(['route' => ['dashboard.service_categories.store'],  'method'=> 'post', 'files' => true, 'class' => '']) !!}
                <div class="row">
                    <div class="col-md-12 col-lg-12 ">
                        <div class="form-group {{ $errors->has('category_name') ? 'has-feedback has-error has-danger' : '' }}">
                          <label for="category_name" class="form-label">Name</label>
                            {!! Form::text('category_name',  isset($item) ? $item->category_name : '',
                                        ['id' => 'category_name',
                                        'placeholder' => 'category name',
                                        'class' => 'form-control' . ($errors->has('category_name') ? ' is-invalid' : ''),
                                        'required' => true]
                                        );
                            !!}
                            @if($errors->has('category_name'))
                            <div class="invalid-feedback"> {{ $errors->first('category_name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="btn btn-success">Add New</button>
                    </div>

                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection

                            