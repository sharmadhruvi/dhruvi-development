@include('include/header')

@include('include/nav')
    <body class="antialiased">
        

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>post Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">add user</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <a href="show">back</a>
              <form action="" id="main_id" enctype="multipart/form-data" method="POST">
              	@csrf
                <div class="card-body">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

                  <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" class="form-control" id="title" name="first_name"placeholder="Enter name">
                     <span style="color:red;" id="title_error"><?php echo $errors->users_error->first('title'); ?></span>
                  </div>

                  <div class="form-group">
                    <label for="descripation">descripation</label>
                    <input type="descripation" class="form-control" id="descripation" name="descripation" placeholder="Enter email">
                   <span style="color:red;" id="descripation_error"><?php echo $errors->users_error->first('descripation'); ?></span>
                  </div>

                  <div class="form-group">
                     <label for="exampleInputEmail1">image<span style="color:red;margin-left: 2px;" class="required-error"> *</span></label>
                     <input id="image" type="file" class="form-control " name="image" value="{{ old('image') }}"  onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"  required autocomplete="image" autofocus>
                   	 <img id="output" src="" alt="" width="100" height="100"><br>
                     <span style="color:red;" id="image_error"><?php echo $errors->users_error->first('image'); ?></span>
                  </div>


                  <div class="form-group">
                    <label for="phoneno">phoneno</label>
                    <input type="phoneno" class="form-control" name="phoneno" id="phoneno" placeholder="phoneno">
                    <span style="color:red;" id="password_error"><?php echo $errors->users_error->first('password'); ?></span>
                  </div>

                  <div class="form-group">
                    <label for="name">USER</label>
                    <select  class="form-control" id="" name="id" placeholder="Enter USER">
										<option>-----Select user-----</option>
				    				@foreach($user_lists as $list)
										<option value='{{ $list->id }}'>{{ $list->name }}</option>
										@endforeach  
										</select>
                    <span style="color:red;" id="user_error"><?php echo $errors->amount_error->first('user'); ?></span>
                  </div>


                  
                  
                  <div class="form-group">
					 <button type="submit" id="submit" onclick="checkvalidation();" class="btn btn-primary">Submit</button>
				 </div>
              </form>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script>

$('#settings_tab').addClass('active mm-active');
$('#admin-user').addClass('active');
$('#settings_expanded').addClass('active');
$('#settings-mm-show').addClass('mm-show');  
function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }






	
	
function checkvalidation() {
     
	$('#submitform').prop('disabled', true);  
	var name = $('#name').val();
	var email = $('#email').val();
	var password = $('#password').val();
	var confirmpassword=$('#confirmpassword').val();

	
	var cnt = 0;
	var f = 0;
	
	
	$('#name_error').html("");
	$('#email_error').html("");
	$('#password_error').html("");
	$('#confirmpassword_error').html("");


	
	
	var number = /([0-9])/;
	var alphabets = /([a-zA-Z])/;
	var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;	 


	if (name.trim() == '') {
		$('#name_error').html("Please enter Name");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#name').focus();

		}
	}
	if (email.trim() == '') {
		$('#email_error').html("Please enter email");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#email').focus();
		

		}
	}

   if (password.trim() == '') {
		$('#password_error').html("Please enter password");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#password').focus();
			

		}
	}
	if (confirmpassword.trim() == '') {
		$('#confirmpassword_error').html("Please enter confirmpassword");
		cnt = 1;
		f++;
		if(f == 1)
		{
			$('#confirmpassword').focus();
		

		}
	}


	if (cnt == 1) {
		$('#submitform').prop('disabled', false); 
		return false;
	} else {
		$('#main_id').submit();
	}
}
</script>


   @include('include/footer')