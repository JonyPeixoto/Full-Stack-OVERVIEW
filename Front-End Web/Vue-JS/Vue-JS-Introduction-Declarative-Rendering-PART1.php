<!DOCTYPE html>
<html>
<head>
	<title>Vue JS</title>
</head>
<body>
<div id="app">
{{other_variable}}
</div><!--app-->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
		var app = new Vue({
		  el: '#app',
		  data: {
		    message: 'Hello Vue!',
		    other_variable:'<h2>Olá mundo</h2>'
		  }
		})
</script>
</body>
</html>