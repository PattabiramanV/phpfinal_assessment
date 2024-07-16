"use strict";

let studentId=document.querySelector("#student_id");
let studentName=document.querySelector('#student_name');
let studentEmail=document.querySelector('#email');
let admissionDate=document.querySelector('#addmission_date');
let form=document.forms.student_application;
let studentTable=document.querySelector('.student_table_body');

//.......................Student Data store fun..................................//

function studentDataStoreFun(event){

    event.preventDefault();
    
    let obj={

        id:studentId.value,
        name:studentName.value,
        email:studentEmail.value,
        admission:admissionDate.value
    }

  

 let  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
        alert(this.responseText)
  form.reset();

        pageChangeFun(localStorage.getItem("currentPage"));
    }
  };
  xhttp.open("POST", "../../controller/studentdatastore.php?q="+JSON.stringify(obj), true);
  xhttp.send();



}


////////////////////.................pageChangeFun.........................//

pageChangeFun(localStorage.getItem('currentPage'));

function pageChangeFun(element){


let range = element.innerHTML;

if(range){
    
localStorage.setItem("currentPage",range);
}
range = range==undefined? localStorage.getItem('currentPage'):element.innerHTML;
console.log(range);
    
 let  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      
        let allData=this.responseText;

        dataShowingFun(allData);

    }
  };
  xhttp.open("GET", "../../controller/studentdatastore.php?id="+range*10, true);
  xhttp.send();



    
}



function searchBarFun(value){

   
 if(value==''){

  return  pageChangeFun(localStorage.getItem("currentPage"))
 }
    let  xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
     
      dataShowingFun(this.responseText);
   
      }
    };
    xhttp.open("GET", "../../controller/search.php?search="+value, true);
    xhttp.send();
  
}












//////////////..................DataShowing Fun...........................//



function dataShowingFun(allData){


    let parseData=JSON.parse(allData);


   studentTable.innerHTML='';

//    parseData=parseData==[] ? studentTable.innerHTML='no data':null;




   parseData.forEach(item => {
    console.log(item);

    studentTable.innerHTML +=  `
             <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
              <td class="px-6 py-4">
                      ${item.id}
                  </td>
                  <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                     ${item.name}
                  </th>
                  <td class="px-6 py-4">
                       ${item.student_id}
                  </td>
                  <td class="px-6 py-4">
                      ${item.email}
                  </td>
                  <td class="px-6 py-4">
                       ${item.admission}
                  </td>
                  <td class="px-6 py-4">
                      <a href="?edit_id=${item.id}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                  </td>
              </tr>`
   });


 



}






function dropDownFun(){
    document.getElementById('dropdown').classList.toggle('hidden');
}


