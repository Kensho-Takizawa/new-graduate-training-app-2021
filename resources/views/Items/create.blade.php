<!-- resources/views/tasks.blade.php -->

@extends('layouts.app')
@section('title', '商品登録')
@section('content')

    <div class="container">
        <form action="{{ url('items') }}" method="post" class="form-horizontal">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="Items.store" class="col-sm-3 control-label">商品名</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="item-name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="Items.store" class="col-sm-3 control-label">カテゴリー</label>

                <div class="aaa">
                    <select name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus">登録</i>
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection
