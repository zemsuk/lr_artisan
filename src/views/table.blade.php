<?php 
    // use Session;
    use Illuminate\Support\Facades\Session;
?>
@extends('lrartisan::template')

@section('content')
@if(isset($_GET['msg']))
<div class="msg">
    {{ $_GET['msg']}}
</div>
@endif
<div class="zems_container2">
    <table cellspacing="0">
        <thead>
            <tr>
                @foreach($clum as $tbl) 
                <th>{{$tbl}}</th>
                @endforeach
                @if(request()->ext == 'migrations')
                <th>Action</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($data as $dt)            
            <tr>
                @foreach($clum as $tbl) 
                <td>{{$dt->$tbl}}</td>
                @endforeach
                @if(request()->ext == 'migrations')
                <td>
                    <!-- <a class="button" href="{{url('zems_cmd/tbl')}}">Show</a> -->
                    <a class="button delete" href="{{url('zems_cmd/del_column', $dt->id)}}">Delete</a>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection