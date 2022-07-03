var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;
// console.log(slider.value);
var age=0;
ageDiscount=0;
slider.oninput = function () {
  output.innerHTML = this.value;
  console.log(slider.value);
  age=this.value;
  parseInt(age);
 
}
var age2=document.getElementById("demo");
console.log(age2);
// }


// DisplayChange = function (newvalue) {
//     document.getElementById(
//       " demo").innerHTML = newvalue;
//       age=slider.value;
     
//       if(age>=16 && age<=20){
//         ageDiscount=(10/100.0);
    
    
//    // console.log(ageDiscount);
 
// }
// return ageDiscount;
// }
//console.log(DisplayChange());
// console.log(DisplayChange());
//  console.log(age);
// let update =() => output.innerHTML=slider.value;
// slider.addEventListener('input',update);

//  age=document.getElementById("demo").update;

// Fee=0;
// // finage= DisplayChange(getElementById);
// // console.log(val());

//  studentStatus=document.getElementById("Y").checked;
//  console.log(studentStatus)
//  employmentStatus=document.getElementById("Yes").checked;
//  totalDisount=0;
 

//  studentDiscount=0;
//  employemtnDiscount=0;
//  fee=document.getElementById("fee");
 
 
function registrationFee () {
 
//     console.log(checkForm()); 
// if(checkForm()==false){
//     document.getElementById("fee").innerHTML="feel the form";
// }
// if(age<16){
//     document.getElementById("AgeError").innerHTML= "Sorry age has to be 16 or above to be eligibe"
//     document.getElementById("AgeError").style.display = "inline";
//     return false;
// }

// else{
    document.getElementById("AgeError").style.display = "none";
    Fee=0;
    // finage= DisplayChange(getElementById);
    // console.log(val());
    
     studentStatus=document.getElementById("Y").checked;
    // console.log(studentStatus);
     employmentStatus=document.getElementById("Yes").checked;
     totalDisount=0;
     
    
     studentDiscount=0;
     employemtnDiscount=0;
     fee=document.getElementById("fee");





    age = parseInt(age);

    // if(age>=16 && age<=20){
    //     ageDiscount=(10/100.0);
      
    // }
    ageDiscount=0;
if(age>15 && age<21){
    ageDiscount= 10*(10/100.0);
    //console.log(ageDiscount);
}

else{
    ageDiscount=0;
}
console.log(ageDiscount);



if(studentStatus){
    studentDiscount=10*(5/100.0);

}
if(!employmentStatus){
    employemtnDiscount=10*(40/100.0);
}




totalDiscount= ageDiscount+studentDiscount+employemtnDiscount;
Fee= (10-totalDiscount);
document.getElementById("fee").innerHTML=" The registration fee for you is: " + " " + "$" + Fee;
document.getElementById("fee").style.fontSize="34px";
document.getElementById("fee").style.fontStyle = "italic";
document.getElementById("fee").style.fontWeight = "900";

}

