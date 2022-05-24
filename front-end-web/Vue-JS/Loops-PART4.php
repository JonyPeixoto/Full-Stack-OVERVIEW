<!DOCTYPE html>
<html>
<head>
	<title>Vue JS</title>
</head>
<body>
	
	<!-- COMMAND: V-HTML USING HTML ON VUE JS -->

	<div id="app">
		<ul>
		  <ol>
		    <li v-for="todo in todos">
		      {{ todo.text }}
		    </li>
		  </ol>
		 </ul>
	</div><!--app-->

	<!------------------------------------------>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
		var app4 = new Vue({
				  el: '#app',
				  data: {
				    todos: [
				      { text: 'Learn JavaScript' },
				      { text: 'Learn Vue' },
				      { text: 'Build something awesome' }
				    ]
				  }
				})
</script>
</body>
</html>