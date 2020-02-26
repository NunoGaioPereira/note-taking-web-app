<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Notes Blog</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<!-- {% include 'includes/_nav.html' %} -->
	<div class="container">
		<!-- {% include 'includes/_messages.html' %}	
		{% block body %} {% endblock %} -->
		<div class="form-group">
			<!-- {{render_field(form.body, class_="form-control", id="editor")}} -->
			<form id="editor">
				
			</form>
		</div>
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
	<script type="text/javascript">
		CKEDITOR.replace('editor')
	</script>

</body>
</html>