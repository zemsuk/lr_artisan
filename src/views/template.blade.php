<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zems World</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500;700&display=swap" rel="stylesheet">
    <style>
        html, body{
            font-size:1rem;
            font-weight:200;
            font-family: 'Poppins', sans-serif;
        }
        h3{
            font-weight:300;
            margin: 0 0.5rem;
            text-align:center;
        }
        .zems_container{
            margin:1rem auto;
            max-width: 700px;
            width:95%;
            border: 1px solid #ccc;
            
        }
        label{
            display: block;
        }
        .item{
            padding: 0.5rem;
            border: 1px dashed #efefef;
        }
        .item:nth-child(even){
            /* background:#eee; */
        }
        .zems_container input{
            width: calc(100% - 1.6rem);
            padding: 0.6rem;
        }
        .zems_container select{
            width: 100%;
            padding: 0.6rem;
        }
        .zems_container button{
            margin: 0.5rem;
            cursor: pointer;
            padding: 0.6rem 2rem;
        }
        ul{
            margin:0;
            padding: 0;
            list-style:none;
        }
        a{
            text-decoration:none;
        }
        .nav{
            display: flex;
            justify-content:center;
            font-size:1rem;
        }
        .nav li a{
            padding: 0.2rem 1rem;
            border:1px dotted #ccc;
        }
        .nav li button{
            padding:0.4rem 1rem;
            background: rgba(0,163,76,1);
            border:none;
            color:#fff;
            cursor: pointer;
        }
        .msg{
            margin-top:1rem;
            padding: 0.5rem 1rem;
            border:1px solid rgba(0,163,76,1);
        }
        table{
            width: 100%;
        }
        table th, table td{
            border:1px solid #ededed;
            padding: 5px 10px;
        }
        .button{
            display:inline-block;
            border:1px solid #cdcdcd;
            padding:5px 20px;
            background:rgb(27, 151, 164);
            color:#fff;
            font-size:0.8rem;
            font-weight:500;
            min-width:50px;
            text-align:center;
        }
        .delete{
            background: rgb(174, 64, 64);
        }
    </style>
</head>
<body>
    <nav>
        <ul class="nav">
            <li><a href="{{url('zems_cmd')}}">Dashboard</a></li>
            <li><a href="{{url('zems_cmd/create')}}">Create Model</a></li>
            <li>
                <form action="{{url('zems_cmd/migrate')}}" method="post">
                    @csrf
                    <button>Migrate</button>                    
                </form>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>