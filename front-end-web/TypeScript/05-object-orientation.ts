class Person{

    name:string

    constructor(name:string){
        this.name = name;
    }

    printName(){
        return this.name;
    }

}

class User extends Person{

    constructor(name:string){
        super(name);
    }

    add(n1:number,n2:number){
        return n1+n2;
    }

    applyStyle(){
        document.getElementById("el").style.color = "red";
    }

}

new User("Jony").applyStyle();

