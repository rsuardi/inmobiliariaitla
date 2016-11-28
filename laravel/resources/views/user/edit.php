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
	<h1>User form</h1>
		<form class="form-horizontal" method="post" action="createad" id="notEmptyForm">
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">ID</div>
			      <input type="text" class="form-control" name="txtid" placeholder="Identification" required autocomplete="off" readonly>
			    </div>
			</div>
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">Email</div>
			      <input type="text" class="form-control" name="txtemail" placeholder="Model" required autocomplete="off">
			    </div>
			</div>
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">Name</div>
			      <input type="text" class="form-control" name="txtname" placeholder="Name" required autocomplete="off">
			    </div>
			</div>
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">Lastname</div>
			      <input type="text" class="form-control" name="txtlastname" placeholder="Lastname" required autocomplete="off">
			    </div>
			</div>
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">Telphone</div>
			      <input type="text" class="form-control" name="txttelphone" placeholder="Ej. 809-234-2335" required autocomplete="off">
			    </div>
			</div>
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">Celphone</div>
			      <input type="text" class="form-control" name="txtcelphone" placeholder="Ej. 829-234-2335" required autocomplete="off">
			    </div>
			</div>
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">Fax</div>
			      <input type="text" class="form-control" name="txtfax" placeholder="Ej. 0998 455879" required autocomplete="off">
			    </div>
			</div>
			<div class="form-group">
			    <div class="input-group col-sm-4">
			      <div class="input-group-addon">More info?</div>
			      <textarea class="form-control" rows="5" name="txtfax" placeholder="Hi, if you wish to say something you can write on me!" required autocomplete="off">
			          
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