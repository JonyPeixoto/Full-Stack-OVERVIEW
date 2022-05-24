<!DOCTYPE html>
<html>
<head>
	<title>Vue JS</title>
</head>
<body>
	
	<!-- COMMAND: V-HTML USING HTML ON VUE JS -->

	<div id="app" v-html="message">

	<!---->

{{message}}
</div><!--app-->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
		var app = new Vue({
		  el: '#app',
		  data: {
		   	message:'<h2>Olá mundo</h2>'
		  }
		})
</script>
</body>
</html>