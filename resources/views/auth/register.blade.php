<body background="Images/reg.jpg">
@extends('layouts.app')

@section('content')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                             <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" class="form-control input-lg">
                              <strong> <span class="invalid-feedback1" role="alert" id="error_email1">
                          
                              </span> </strong>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control1" name="mobile" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="button">
                        <form action="{{route('back')}}" method="get">
         <button class="btn btn-warning" type="submit" value="submit">Back</button>
                        </form>
                    </div>
                </div>&copy; SAGNIK DEY (UIPL)
            </div>
        </div>
    </div>
</div>
<style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
   .has-error
   {
    border-color:#cc0000;
    background-color:#ffff99;
   }
  </style>
<script>
$(document).ready(function(){

  $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
 $('#email').blur(function(){
   
  var error_email = '';
  var email = $('#email').val(); 
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if(!filter.test(email))
  {    
   $('#error_email').html('<label class="text-danger">Invalid Email</label>');
   $('#email').addClass('has-error');
   $('#register').attr('disabled', 'disabled');
  }
  else
  {  
    let data = {'email':email};
   $.ajax({
    url:"{{ route('check') }}",
    type:"POST",
    data:data,              
    success:function(result)
    {     //  alert('fvfvhfdv')
            console.log(result);
     if(result == 'unique')
     {
      $('#error_email1').html('<label class="text-success">Welcome...!</label>');
      $('#email').removeClass('has-error');
      $('#register').attr('disabled', false);
     }
     else
     {
      $('#error_email1').html('<label class="text-danger">You are Already In my system..!</label>');
      $('#email').addClass('has-error');
      //$('#register').attr('disabled', 'disabled');
     }
    },
     error: function (textStatus, errorThrown) {
        console.log(email, _token)
    }
   })

  }
 });
 
});
</script>
<!-- -------------------------- -->
<script type="text/javascript">
  $(document).ready(function(){

$("#mobile").change(function() { 

var usrN = $("#mobile").val();

if(usrN.length >= 4)
{
$("#statuspass").html('<img src="Images/loading.gif"> Checking ...');

    $.ajax({  
    type: "POST",  
     url :  "{{route('contctcheck')}}" , 
    data: "mobile="+ usrN, 
    success: function(msg){  
   
   $("#statuspass").ajaxComplete(function(event, request, settings){ 

    if(msg == 'OK')
    { 
        $("#mobile").removeClass('object_error'); 
        $("#mobile").addClass("object_ok");
        $(this).html('<img src="Images/success.png" align="absmiddle"> OK<');
    }  
    else  
    {  
        $("#mobile").removeClass('object_ok'); 
        $("#mobile").addClass("object_error");
        $(this).html(msg);
    }  
   
   });

 } 
   
  }); 

}
else
    {
    $("#statuspass").html('<font color="red" style="margin-left:125px;">Already Used<strong></strong> .</font>');
    $("#name").removeClass('object_ok'); 
    $("#name").addClass("object_error");
    }

});

});
</script>
 
@endsection

</body>