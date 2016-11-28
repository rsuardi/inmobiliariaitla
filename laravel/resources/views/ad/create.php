<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="../css/prettify-1.0.css" rel="stylesheet">
        <link href="../css/base.css" rel="stylesheet">
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
			<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
</head>
<body>
	<div class="container">
	<h1>Create your advertisement here!</h1>
		<form class="form-horizontal" method="post" action="createad" id="notEmptyForm">
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">Title</div>
			      <input type="text" class="form-control" name="txttitle" placeholder="Title" required autocomplete="off">
			    </div>
			</div>
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">Address</div>
			      <input type="text" class="form-control" name="txtaddress" placeholder="Address" required autocomplete="off">
			    </div>
			</div>
    			<div class="form-group">
				<div class="input-group col-sm-4">
					<div class="input-group-addon">Property Type</div>
				<select class="selectpicker form-control" name="txttype" required>
					<option>--SELECT ONE TYPE</option>
						
					</select>
				</div>
			</div>
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">Price</div>
			      <input type="text" class="form-control" name="txtprice" placeholder="Price" required autocomplete="off">
			    </div>
			</div>
			<div class="form-group">
			<label for="name" class="col-sm-1 control-label">What do you want to do?</label>
					<div class="radio">
					  <label class="col-sm-1">
					    <input type="radio" name="optionsRadios" id="radiorent" value="R" checked>
					    	Rent
					  </label>
					  <label>
					    <input type="radio" name="optionsRadios" id="radiosale" value="S">
					    	Sale
					  </label>
					</div>
			</div>
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">Description</div>
			      <textarea class="form-control" rows="5" name="txtdescription" placeholder="Hi, if you wish to say something you can write on me!" required autocomplete="off">
			          
			      </textarea>
			    </div>
			</div>
			<div class="form-group">
				<div class="input-group col-sm-6">
					<div class="col-sm-6">
						<button class="form-control btn btn-primary" type="submit">Submit</button>
					</div>
				</div>
			</div>
		</form>
</div>
</body>
</html>