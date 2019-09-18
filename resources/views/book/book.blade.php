<?php echo date("Y/m/d") ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body background="Images/book.jpg">
	<style type="text/css">
		.content_box{
    float:left;
    width:100%;
}
.left_bar{
    float:left;
    width:15%;
    background:#eaf4ff;
    height:100vh;
}

.right_bar{
    float:left;
    width:85%;
    padding:15px;
        /*border-left:1px solid #ccc;*/
        height:100%;
}

.nav-tabs--vertical li{
    float:left;
    width:100%;
    padding:0;
    position:relative;
}


.nav-tabs--vertical li a{
    float:left;
    width:100%;
    padding: 15px;
    border-bottom:1px solid #adcff7;
    color:#1276F0;
}
.button {
  background-color: #0af9eb; /* Green */
  border: none;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}

img {
  border-radius: 8px;
}

.nav-tabs--vertical li a.active::after {
    content: "";
    border-color: #1276F0;
    border-style: solid;
    position: absolute;
    right: -8px;
    /* border-top: transparent; */
    border-right: transparent;
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    /*border-bottom: 16px solid #1276F0;*/
      border-bottom: 16px solid #fff;
    border-top: 0;
    transform: rotate(270deg);
    z-index:999;
}
*{
  transition: all 0.2s ease-in-out 0s
}

.card {
  position: relative;
  width: 300px;
  height: 300px;
  margin: 40px auto;
}
.image, .shadow {
  position: absolute;
  width: 100%;
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 105%;
  border-radius: 8px;
  background-color: #eee;
}

.shadow {
  transform: scale(0.9)  translateY(30px);
  -webkit-filter: blur(25px);
  filter: blur(25px);
  background-color: rgba(0,0,0,0.3);
}

.shadowImage {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0.8;
}

.card:hover{ 
  transform: scale(1.04) translateY(-5px);
}
.card:hover .image,
.card:hover .shadow {
    background-size: 103%;
}
.card:hover .shadow {
  transform: scale(0.85) translateY(40px);
  -webkit-filter: blur(30px);
  filter: blur(30px);
}

button{
  position: relative;
  margin: 0 auto;
  left: 50%;
  transform: translate3d(-50%, 0,0)
}
	</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<center>

<h2><font color="#44KKLL"><i class="fa fa-search">Search Books</font></i></h2>
</center>

<center>
<div class="col-md-4">
      <input type="text" name="search" id="search" class="form-control" placeholder="Search Book" />
     </div>
</center>

<center>
    <div class="right_bar ">
        	<div class="tab-content ">
		<div class="tab-pane fade show active" id="lorem" role="tabpanel">
           <form action="{{route('booksubmit')}}" method="POST">
            @csrf
			<table class="table table-bordered">
				<thead>
					<tr id="myUL">
						<th><font color="#f90a39">Book</font></th>
						<th><font color="#7700GG">Author</font></th>
						<th><font color="#XX0000">Quantity</th>
						<th><font color="#0af9dc">Look</font></th>
						<th>Select</th>
					</tr>
				</thead>
				<tbody>
					@foreach($books as $bookData)
					<tr class="info">
            <td>{{$bookData->id}}</td>
					<td><font color="#EE22QQ">{{$bookData->name}}</font></td>
					<td>{{$bookData->author}}</td>
					<td><font color="#390cf0">{{$bookData->available}}</font></td>
					<td><img src="{{$bookData->image}}" height="90" width="90"></td>
					<td><button class="button" type="submit" value="submit"><i class="fa fa-bell" color="#EE0011"></i></button></td>
					</tr>
					@endforeach
				</tbody>
			</table>
            </form>
            <center>
        <form action="{{route('home')}}" method="get">
    <button class="btn btn-warning" type="submit" value="submit">Back</button>
        </form>
        </center>
			</div></div></div>

		</center>
		
</body>
</html>

	<!-- <script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script> -->
<script>
$(document).ready(function(){

 fetch_book_data();

 function fetch_book_data(query = '')
 {
  $.ajax({
   url:"{{ route('action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }

 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_book_data(query);
 });
});
</script>
<script>
  const imageName = (image) => {
  return {
    backgroundImage: `url(https://unsplash.it/200/300/?${image})`
  }
}

class ChangeImageButton extends React.Component{
  render(){
    return <button onClick={this.props.handleClick}>{this.props.text}</button>
  }
  
}



class Card extends React.Component{
  constructor(){
    super()
    this.state = {
      imageNumber: 'image=881'
    }
    this.changeImage = this.changeImage.bind(this)
    this.chooseRandom = this.chooseRandom.bind(this)
  } 
  
  chooseRandom(){
    return (Math.floor(Math.random() * 1000)+300)
  }
  
  changeImage(){
    this.setState({
      imageNumber: `image=${this.chooseRandom()}`
    })
  }
  
  
  render(){
    console.log(this.state.imageNumber)
    return (
      <div>
         <div className="card">
          <div className="shadow">
            <div 
              className="shadowImage" 
              style={imageName(this.state.imageNumber)}
            ></div>
          </div>
          <div 
            className="image" 
            style={imageName(this.state.imageNumber)}
          ></div>
        </div>
        
        <ChangeImageButton
          handleClick={this.changeImage}
          text="Randomise image"
        />
      </div>
     
    )
  }
}



ReactDOM.render(
  <Card />,
  document.getElementById('app')
)
</script>
