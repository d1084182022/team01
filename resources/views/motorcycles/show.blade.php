@extends('app')
@section('title', '顯示一筆球員資料')

@section('motorcycles_contents')
    <h1>顯示單一重機車系資料</h1>
    <table border="1">

        <tr>
            <td>編號</td>
            <td>{{$motorcycle->id}}</td>
        </tr>
        <tr>
            <td>廠牌</td>
            <td>{{$motorcycle->bid}}</td>
        </tr>
        <tr>
            <td>車名</td>
            <td>{{$motorcycle->name}}</td>
        </tr>
        <tr>
            <td>製造年份</td>
            <td>{{$motorcycle->year}}</td>
        </tr>
        <tr>
            <td>CC數</td>
            <td>{{$motorcycle->CC}}C.C</td>
        </tr>
        <tr>
            <td>引擎形式</td>
            <td>{{$motorcycle->eid}}</td>
        </tr>
        <tr>
            <td>馬力</td>
            <td>{{$motorcycle->horsepower}}Hp</td>
        </tr>
        <tr>
            <td>扭力</td>
            <td>{{$motorcycle->torque}}Kgm</td>
        </tr>
        <tr>
            <td>油箱容量</td>
            <td>{{$motorcycle->tank_capacity}}L</td>
        </tr>
        <tr>
            <td>座高</td>
            <td>{{$motorcycle->sitting_height}}mm</td>
        </tr>
        <tr>
            <td>售價</td>
            <td>{{$motorcycle->price}}萬</td>
        </tr>

    </table>
@endsection
