@extends('app')
@section('title', '顯示所有廠牌資料')

@section('motorcycles_contents')
<h1>顯示所有廠牌資料</h1>
<a href="brands/create">
    新增廠牌<br>
</a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>廠牌</th>
        <th>國家</th>
        <th>詳細</th>
        <th>修改</th>
        <th>刪除</th>

    </tr>

    @foreach($brands as $brand)
        <tr>
            <td>{{$brand->id}}</td>
            <td>{{$brand->name}}</td>
            <td>{{$brand->country}}</td>
            <td><a href="{{ route('brands.show', ['brand'=>$brand->id]) }}">詳細資料</a></td>
            <td><a href="{{ route('brands.edit', ['brand'=>$brand->id]) }}">修改資料</a></td>
            <td>
                <form method="post" action="brands/{{$brand->id}}">
                    @csrf
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
