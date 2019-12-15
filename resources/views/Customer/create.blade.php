<!DOCTYPE html>
<html lang="en">
<head>
  <title>Queue Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    .st-row{
      padding: 20px;
    }
    .st-que{
      height: 170px;
      width: 100%;
      background-color: aliceblue;
      padding: 10px;
    }
    .st-block-a{
      background-color: aliceblue;
      border-right: 2px solid;
      border-right-color: #fff;
      border-bottom: 2px solid;
      border-bottom-color: #fff;
    }
    .st-block-b{
      background-color: aliceblue;
      border-left: 2px solid;
      border-left-color: #fff;
      border-top: 2px solid;
      border-top-color: #fff;
    }
  </style>
</head>
<body>

<div class="container" align="center">
  <h3>Study of Queue in PHP 7.3.0 - Laravel 5.8.35</h3>
  <hr>
</div>

<div class="container-fluid">
  <div class="row st-row">
    <div class="col-md-6 st-row st-block-a">
      <p>Form - 1</p>
    <form action="create-customer" method="post" name="form1" id="form1" enctype="multipart/form-data">
    <div class="col-md-6">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" required="" id="name" placeholder="Enter Name" name="name">
    </div>
    </div>
    {{ csrf_field() }}
    <div class="col-md-6">
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" required="" id="email" placeholder="Enter Email" name="email">
    </div>
    </div>
    <div class="col-md-6">
     <div class="form-group">
      <label for="pwd">Mobile:</label>
      <input type="number" class="form-control" required="" id="mobile" placeholder="Enter Mobile" name="mobile">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="pwd">Address</label>
      <input type="text" class="form-control" required="" id="address" placeholder="Enter Address" name="address">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="pwd">Select Profile Image</label>
      <input type="file" class="form-control" required="" id="photo" placeholder="Select Photo" name="photo">
    </div>
    </div>
    <div class="col-md-6">
     <p>&nbsp;</p>
    </div>
    <div class="col-md-6">
        <button type="submit" class="btn btn-default">Save</button>
    </div>
  </form>
     <div class="col-md-12" align="center">
        <span id="response1"></span>
    </div>
    </div>

    <div class="col-md-6 st-row st-block-b">
       <p>Form - 1</p>
    <form action="create-customer" method="post" name="form2" id="form2" enctype="multipart/form-data">
    <div class="col-md-6">
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" required="" id="name" placeholder="Enter Name" name="name">
    </div>
    </div>
    {{ csrf_field() }}
    <div class="col-md-6">
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" required="" id="email" placeholder="Enter Email" name="email">
    </div>
    </div>
    <div class="col-md-6">
     <div class="form-group">
      <label for="pwd">Mobile:</label>
      <input type="number" class="form-control" required="" id="mobile" placeholder="Enter Mobile" name="mobile">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="pwd">Address</label>
      <input type="text" class="form-control" required="" id="address" placeholder="Enter Address" name="address">
    </div>
    </div>
    <div class="col-md-6">
    <div class="form-group">
      <label for="pwd">Select Profile Image</label>
      <input type="file" class="form-control" required="" id="photo" placeholder="Select Photo" name="photo">
    </div>
    </div>
    <div class="col-md-6">
     <p>&nbsp;</p>
    </div>
    <div class="col-md-6">
        <button type="submit" class="btn btn-default">Save</button>
    </div>
  </form>
     <div class="col-md-12" align="center">
        <span id="response2"></span>
    </div>
    </div>
  </div>
 
</div>

<hr>


<script type="text/javascript">
  
  $('#form1').submit(function(evt) {
          evt.preventDefault();
          var formData = new FormData(this);
          $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data:formData,
          cache:false,
          contentType: false,
          processData: false,
          success: function(data) {
              $('#response1').html(data);
          },
          error: function(data) {
              //$('#imagedisplay').html("<h2>this file type is not supported</h2>");
          }
          });
  });

  $('#form2').submit(function(evt) {
          evt.preventDefault();
          var formData = new FormData(this);
          $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data:formData,
          cache:false,
          contentType: false,
          processData: false,
          success: function(data) {
              $('#response2').html(data);
          },
          error: function(data) {
              //$('#imagedisplay').html("<h2>this file type is not supported</h2>");
          }
          });
  });

</script>

</body>
</html>
