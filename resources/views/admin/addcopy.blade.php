<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?php echo url('/');?>node_modules/@coreui/icons/css/coreui-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<h2><font color="#RR3300">Update Your Copies And Avibility</font></h2>
	<center>
<form action="{{route('updatecopy',$id)}}" method="post">
	@csrf
	<div class="form-group">
		<label>Update Total Quantity</label>
	<input type="text" name="quantity"  id="tbNumbers" onkeypress="javascript:return isNumber(event)"  placeholder="*Only Numbers"  required="" >
	</div>
	<div class="form-group">
	<label>Update Avilible copies</label> 
	<input type="text" name="available" id="avl"  placeholder="*same as Copy Number" required="">
    </div>
<div class="button mt-2">
	<button class="btn btn-info" type="submit" value="submit">Update</button>
</div>
</form>
<div class="button mt-2">
<form action="{{route('booklist')}}" method="get">
	<button class="btn btn-warning" type="submit" value="submit">Back</button>
</form>
</div>
</center>
</body>
                     <!-- ---------------------------------- -->
                <script>
                   
                    function isNumber(evt) {
                        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
                        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
                            return false;
                        else
                        return true;
                    }    
                </script>
                      <!------------------------------------------->
                               <!--  <script type="text/javascript">
                                	$(document).ready(function () {
                                       $("#tbNumbers").keypress (function(){
                                          
                                      
                                       });

                                       /* function onchange() {
                                           
                                            var tbNumbers = $('#tbNumbers').val();
                                            var avl = $('#avl');
                                            avl.val(tbNumbers.val());
                                        }
                                        $('#tbNumbers').on('change', onchange);*/
                                    });
                                </script> -->
</html>