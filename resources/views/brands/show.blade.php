@extends('app')
@section('title', '顯示一筆廠牌資料與這廠牌的重機')

@section('motorcycles_contents')
<h1>顯示單一廠牌資料</h1>
<table border="1">

    <tr>
        <td>編號</td>
        <td>{{$brand->id}}</td>
    </tr>
    <tr>
        <td>廠牌</td>
        <td>{{$brand->name}}</td>
    </tr>
    <tr>
        <th>國家</th>
        <td>{{$brand->country}}</td>
    </tr>
</table>
<h1>{{$brand->name}}廠牌的所有車系(共{{ count($brand->motorcycle)}}位)</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>廠牌</th>
        <th>車名</th>
        <th>製造年份</th>
        <th>CC數</th>
        <th>引擎形式</th>
        <th>馬力</th>
        <th>扭力</th>
        <th>油箱容量</th>
        <th>座高</th>
        <th>售價</th>
    </tr>
    @foreach($brand->motorcycle as $motorcycle)
        <tr>
            <td>{{$motorcycle->id}}</td>
            <td>{{$motorcycle->bid}}</td>
            <td>{{$motorcycle->name}}</td>
            <td>{{$motorcycle->year}}</td>
            <td>{{$motorcycle->CC}}C.C</td>
            <td>{{$motorcycle->eid}}</td>
            <td>{{$motorcycle->horsepower}}Hp</td>
            <td>{{$motorcycle->torque}}Kgm</td>
            <td>{{$motorcycle->tank_capacity}}L</td>
            <td>{{$motorcycle->sitting_height}}mm</td>
            <td>{{$motorcycle->price}}萬</td>
        </tr>
    @endforeach
</table>
@endsection
