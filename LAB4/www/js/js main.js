    console.log("Hello world");
   // alert("Parichat");

   var name = "Parichat";
   let Age = 23;

   console.log("My name is " + name);

    name = [5,6,7];
    name[0] = 10;
    name[2] = "Benz";
    
    document.getElementById("content").innerHTML = name;

    var users = '{"name":"Benz","name":"girl"}';
    var jSON = JSON.parse(users);
    console.log(jSON);

    emp = { name: "AA", name: "BB", name: "CC" };
    console.log(emp);
    console.log(emp.name[2]);

    if(name != 5){
        console.log("True");
    }else{
        console.log("False, name is 5");
    }

    for(i =1; i<5 ; i++){
        console.log(i);
    }

    console.log(Add(5,3));
    function Add(A,B) {
        c = A + B;
        return c;
    }
