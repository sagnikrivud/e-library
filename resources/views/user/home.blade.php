<!-- @extends('layouts.app') -->

@section('content')
 
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/');?>node_modules/@coreui/icons/css/coreui-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <style type="text/css">
                                .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

img {
  border-radius: 100%;
}

button {
  border: none;
  display: inline-block;
  border: 1px solid #2d6898;
  outline: 0;
  background-color: #538fbe;
  padding: 20px 7px;
  /*display: inline-block;*/
  /*padding: 8px;*/
  color: white;
  background-color: #4F7011;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.button4 {border-radius: 12px;}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
                            </style>
<body background="Images/prof.jpg"></body>

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-header"> <h2>{{(Auth::user()->name)}}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- You are logged in! -->
                    <div class="image">
                    <img src="{{Auth::user()->image}}" alt="" height="100" width="100"> 
                    </div>
                    <div class="details">
                       
                  <font color="#110000">Contact :</font><font color="#66FFQQ"><p class="contact">{{(Auth::user()->mobile)}}</p></font> 
                    </div>
                    
                      <table>
                    <td><form action="{{route('mymail')}}" method="post">
                      @csrf
    <button class="btn btn-info" type="submit" value="submit"><i class="fa fa-rss"></i></button>
                    </form></td>

                  <td><form action="{{route('book')}}" method="get">
  <button class="btn btn-success" type="submit" value="submit">Books For You!</button>
                </form></td>
                <td><form action="{{route('mybook')}}" method="get">
    <button class="btn btn-warning" type="submit" value="submit">My-Books</button>
                </form></td>
                 </table>
                
                </div>
            </div>
<div class="container">
<div class="card">
  <form action="{{route('manual')}}" method="get">
  <button class="button button4" type="submit" value="submit">Manual</button>
  </form>
</div>
</div>
        </div>
    </div>
</div>

@endsection
