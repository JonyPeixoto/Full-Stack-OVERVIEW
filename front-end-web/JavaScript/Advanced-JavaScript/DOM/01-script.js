var p = document.getElementsByTagName('p');

// p 

//alert(p[1].innerHTML);

/* Manipulating content */

/*

p[0].innerHTML = 'Manipulated by JS!';


for(var i = 0; i < p.length; i++){
    p[i].innerHTML = 'Manipulated by JS - ' + i;
}

*/



/* Manipulating content more dynamic */

for(var i = 0; i < 10; i++){
    //p[0].innerHTML = p[0].innerHTML + i;
    p[0].innerHTML = p[0].innerHTML + " - something - ";
}