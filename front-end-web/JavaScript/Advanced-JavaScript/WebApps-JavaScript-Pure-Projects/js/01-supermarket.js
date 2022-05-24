var items = [];

document.querySelector('input[type=submit]')
.addEventListener('click',()=>{
    var nameProduct = document.querySelector('input[name=name_product]');
    var priceProduct = document.querySelector('input[name=price]');

    items.push({
        name: nameProduct.value,
        value: priceProduct.value
    });

    /*
    <div class="list-product-single">
            <h3>Redbull</h3>
            <h3 class="price-product"><span>$ 5.99</span></h3>
    </div><!--list-product-single-->
    */
    let listProducts = document.querySelector('.list-products');
    listProducts.innerHTML = "";
    let sum = 0;
    items.map(function(val){
        sum+=parseFloat(val.value);

        listProducts.innerHTML+=`
        <div class="list-product-single">
            <h3>`+val.name+`</h3>
            <h3 class="price-product"><span>$`+val.value+`</span></h3>
        </div><!--list-product-single-->
        `;
    })
    //sum = sum.toFixed(2);    // IT IS A JAVASCRIPT FUNCTION THAT LIMITED 2 DECIMAL HOUSES
    sum = sum.toFixed(2);
    nameProduct.value = "";
    priceProduct.value = "";

    let elementSum = document.querySelector('.sum-product h1');
    elementSum.innerHTML = 'US$'+sum;

});

document.querySelector('button[name=clear]')
.addEventListener('click',()=>{
    items = [];

    document.querySelector('.list-products').innerHTML = "";
    document.querySelector('.sum-product h1').innerHTML = "US$ 0";
})