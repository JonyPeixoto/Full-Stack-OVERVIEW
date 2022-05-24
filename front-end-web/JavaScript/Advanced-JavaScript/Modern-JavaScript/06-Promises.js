// USING FALSE ON PROMISES

/*

EXAMPLE 1

function tests(){
    return new Promise(function(resolve,reject){

        const error = false;
        if(error){
            reject('Error...');
        }else{
            resolve("The promise was successfully resolved!");
        }

    })
}

tests().then(function(res){
    alert(res);
})

*/


/* EXAMPLE 2 - USING TRUE ON PROMISES*/

/*

function tests(){
    return new Promise(function(resolve,reject){

        const error = true;
        if(error){
            reject('Error...');
        }else{
            resolve("The promise was successfully resolved!");
        }

    })
}

tests().then(function(res){
    alert(res);
}).catch(function(err){
    alert(err);
})

*/



/* AWAIT AND, ASYNC FUNCTIONS = FORMAT OF RETURN THE PROMISE */

/* EXAMPLE 1 */

/* 

function tests(){
    return new Promise(function(resolve,reject){
        setTimeout(function(){
            const error = false;
            if(error){
                reject('Error...');
            }else{
                resolve("The promise was successfully resolved!");
            }
        },2000)
        

    })
}

async function tests2(){
    await tests().then(function(res){
        alert(res);
    });
    alert('hello');
}

tests2();

*/


/* EXAMPLE 2 */

function tests(){
    return new Promise(function(resolve,reject){
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

async function tests2(){
    tests().then(function(res){
        alert(res);
    });
    alert('hello');
}

tests2();


