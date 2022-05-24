function tests(){
	return new Promisse(function(resolve,reject){
		setTimeout(function(){

			const error = false;
			if(error){
				reject('Error...');
			}else{
				resolve("The promise was successfully resolved!");
			}

		},5000)
		

	})
}

/*
tests().then(function(res){
	alert(res);	
})catch(function(err){
	alert(err);
})
*/


async function tests2(){
	await tests().then(function(res){
		alert(res);
	});
	alert('Hello');
}

tests2();

