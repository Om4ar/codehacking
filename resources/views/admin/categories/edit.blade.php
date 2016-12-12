@extends('layouts.admin')





@section('content')

    <h1>Categories</h1>

    <div class="col-sm-6">


        {!! Form::model($category , ['method'=>'PATCH', 'action'=> ['AdminCategoriesController@store' , $category_id],'files'=>true]) !!}


        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}







    </div>

    <div class="col-sm-6">





    </div>




















    @stop