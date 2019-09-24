<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #cdffa8;
}

img {
  border-radius: 10%;
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
  </style>
<div class="container">  
   <div class="alert" id="message" style="display: none"></div>
  <form id="contact" action="{{route('update',$user->id)}}" enctype="multipart/form-data" method="post">
     @csrf
    <h3>Update Profile</h3>
    <div class="image">
    <img src="{{$user->image}}" width="100px" height="100px"><font color="red">*ONLY JPG/PNG-[Max-1MB]</font></div>
    <!-- ------------------------------------------ -->
    <fieldset>
  <input type="file" name="image" accept=".jpg,.png" filesize = ((files[x].size/1024)/1024).toFixed(4);  required="">
    </fieldset>
    <!-- --------- -->
    <fieldset>
  <input placeholder="Your Name" name="name" type="text" value="{{$user->name}}" autofocus>
    </fieldset>
    <!-- -------------------- -->
    <fieldset>
  <input name="email" type="email" value="{{$user->email}}" readonly="readonly">
    </fieldset>
  <!-- ------------------------------------------ -->
    <fieldset>
  <input placeholder="Your Contact" name="mobile" type="tel" value="{{$user->mobile}}">
    </fieldset>
    <!-- ------------------------------------------------------ -->
    <!-- <fieldset>
  <input type="passowrd" placeholder="Passowrd" name="passowrd" value="" abindex="5">
    </fieldset> -->
    <!-- ----------------------------------------------------------------- -->
     <fieldset>
      <button name="submit" type="submit" id="submit">Update</button>
      
    </fieldset>
    </form>
    <form action="{{route('home')}}" method="get">
    <fieldset>
     <button name="submit" type="submit" href="{{route('home')}}" class="btn btn-warning">Back</button> 
    </fieldset>
    </form>
</div>
</body>
</html>
<script>
function disable() {
  document.getElementById("myText").disabled = true;
}
</script>
<!-- {{ URL::to($user->image) }} -->