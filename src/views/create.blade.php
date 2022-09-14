@extends('lrartisan::template')

@section('content')
    <h3>Create A model</h3>
<form action="{{url('zems_cmd/cmd')}}" method="post">
    @csrf 
    <div class="zems_container">
        <div class="item">
            <label for="">Model Name</label>
            <input type="text" name="model">
        </div>
        <div class="item">
            <label for="">Migrate Option</label>
            <select name="migrate" id="">
                <option value="m">With Migrate</option>
                <option value="">Without Migrate</option>
            </select>
        </div>
        <div class="item">
            <label for="">Controller Option</label>
            <select name="controller" id="">
                <option value="">Without Controller</option>
                <option value="c">With Controller</option>
                <option value="cr">With Resource Controller</option>
            </select>
        </div>
        <!-- <div class="item">
            <label for="">Resource Option</label>
            <select name="migrate" id="">
                <option value="">Without Resource</option>
                <option value="cr">With Resource</option>
            </select>
        </div> -->
        <div>
            <button>Go</button>
        </div>
    </div>
</form>
@endsection