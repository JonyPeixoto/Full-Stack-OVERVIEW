<!DOCTYPE html>
<html>
<head>
	<title>Vue JS</title>
</head>
<body>
	
	<!-- COMMAND: V-HTML USING HTML ON VUE JS -->

	<div id="app" v-if="visible">
		<h1>I can start running my application!</h1>

	</div><!--app-->

	<!------------------------------------------>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
		var app = new Vue({
		  el: '#app',
		  data: {
		  	visible:true
		  	//visible:false
		  }
		})
</script>
</body>
</html>