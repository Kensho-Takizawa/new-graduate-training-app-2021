@extends('layouts.app')
@section('title', '商品編集')
@section('content')
    <div class="container">
        <form action="{{ route('items.update', $item->id) }}" method="post" class="form-horizontal">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="items" class="col-sm-3 control-label">商品名</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="item-name" class="form-control" value="{{ $item->name ?? '' }}">
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('category_id', 'カテゴリー：') }}
                {{ Form::select('category_id', $categories, $item->category->id, ['class' =>'form-control']) }}
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus">更新</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
