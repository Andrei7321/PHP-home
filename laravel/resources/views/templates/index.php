<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<link rel="stylesheet" href="./vendor/twbs/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../style.css"/>
</head>
<body>
	<div class="container">
		
		<form name="serch-line" action="index.php" method="POST">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="text" class="form-control" id="exampleInputEmail1" name="tag" aria-describedby="emailHelp" placeholder="tag">
				<small id="emailHelp" class="form-text text-muted">Тег для запроса</small>
				<!-- <input type="submit" name="name" value="Поиск"> -->
			</div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		
	</div>

	<div class="cards-container container">
		{% for photo in photos %}
			<div class="card w-25">
				<img src="{{photo.url}}" alt='нихрена' class='card-img-top' />
				<div class="card-body">
					<h5 class="card-title"></h5>
					<a href="{{photo.Link}}" class='btn btn-primary'>Go somewhere</a>
				</div>
			</div>
		{% endfor %}
	</div>

</div>
</body>
</html>