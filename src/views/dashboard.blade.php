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
<div class="zems_container">
    <table cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $tbl)  
            <?php 
            $clm = '';
            foreach($tbl as $k=>$t){
                $clm = $tbl->$k;
            }
            ?>      
            <tr>
                <td>{{$clm}}</td>
                <td>
                    <a class="button" href="{{url('zems_cmd/tbl', $clm)}}">Show</a>
                    <a class="button delete" href="{{url('zems_cmd/del_tbl', $clm)}}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection