<!DOCTYPE html>
<html>
<head>
	<title>Vue JS</title>
</head>
<body>
	
<!-- COMMAND: V-HTML USING HTML ON VUE JS -->

<div id="app">
	<p>{{ message }}</p>
  	<button v-on:click="showAlert">Show alert!</button>
  	<button v-on:click="otherMethod">Change BG</button>
</div><!--app-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!------------------------------------------>

<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
		var app4 = new Vue({
				  el: '#app',
				  data: {
				    message:"Hello world!"
				  },
				  methods:{
				  	showAlert: function(){
				  		alert("Hello world again :)");
				  	},
				  	otherMethod: function(){
				  		$('body').css('background','blue');
				  	}
				  }
				})
</script>
</body>
</html>