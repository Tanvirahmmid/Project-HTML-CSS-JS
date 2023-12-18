const inputFild=document.getElementById('inputL')
const mtz=document.getElementById('xd')
const list=document.getElementById('lst'); //jaita te add hbe
function AddTask(){
  if (inputFild.value==''){
    alert("You must fill it")
  }
  else{
    let redio=document.createElement("redio")
    let nInput=inputFild.value;
  
    redio.innerHTML=`   <div class="input-group">
    <div class="input-group-text mb-1">
         <input class="form-check-input" type="radio">
       </div>
       <li class="list-group-item col-sm-8 mb-1 ">
           <h3 class="flex-grow-1">${nInput}</h3>
           </li>
       <button type="button" onclick="rmv(this)" class="btn btn-warning mb-1">Remove</button>
       
     </div>`
    list.appendChild(redio);

  }
  inputFild.value="";
  saveData();
}



function rmv(currentElement){
  currentElement.parentElement.remove()
  saveData()
}

function saveData(){
  localStorage.setItem("data", list.innerHTML);


}
function showTask(){
  list.innerHTML=localStorage.getItem("data");

}
showTask();