@extends('layouts.app')
@section('title', '商品一覧')
@section('content')
    {{ link_to_route('items.create', '新規登録', [], ['class' => 'btn btn-primary']) }}
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>商品名</th>
            <th>カテゴリー</th>
        </tr>
        </thead>
        <tbody>
        @foreach($items as $item)
            <tr>
                <td>{{ link_to_route('items.show', $item->id, $item) }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->getCategory($item['category_id'])->name }}</td>
                <td>
                    <form action="{{ route('items.edit', $item->id) }}" method="get" class="form-horizontal">
                        @csrf
                        @method('get')
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus">編集</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </td>
                <td>
                    <form action="{{ route('items.destroy', $item->id) }}" method="post" class="form-horizontal">
                        @csrf
                        @method('delete')
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus">削除</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
