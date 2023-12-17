function mOver(obj) {
    obj.innerHTML = "Thank You"
  }
  
  function mOut(obj) {
    obj.innerHTML = "Mouse Over Me"
  }



let addBtn=document.getElementById('add_btn')
addBtn.addEventListener('click',addChapter)
let parentList=document.getElementById('par')

function addChapter(e){

if(parentList.children[0].className == "emptyMsg"){
    parentList.children[0].remove()
}

let currentBtn=e.currentTarget;
let currentInput= currentBtn.previousElementSibling
let currentChapter= currentInput.value


let newLi= document.createElement('li')
newLi.className="list-group-item d-flex justify-content-between"
newLi.innerHTML= ` <h3 class="flex-grow-1">${currentChapter}</h3>
<button class="btn btn-warning mx-3">Edit</button>
 <button class="btn btn-danger" onclick="rmv(this)">Remove</button> `
parentList.appendChild(newLi)
}



function rmv(currentElement){
        currentElement.parentElement.remove()
        let parentList=document.getElementById('par');
        if (parentList.children.length<=0){
            let newEmptyMsg= document.createElement("h3")
            newEmptyMsg.classList.add("emptyMsg")
            newEmptyMsg.textContent="Nothing to Show"
            parentList.appendChild(newEmptyMsg)
        }

}
function add(currElement){
    if(currElement.textContent== "done"){
        currElement.textContent="Edit"
        let currentChapter=currElement.previousElementSibling.value
        let currHeading=document.createElement('h3');
        currHeading.className="flex-grow-1"
        currHeading.textContent=currentChapter
    
        currElement.parentElement.replaceChild(currHeading, currElement.previousElementSibling )

    }
    else{
    currElement.textContent="Done"
    let currentChapter=currElement.previousElementSibling.textContent
    let currentInput=document.createElement('input');
    currentInput.type="text"
    currentInput.placeholder="Chapter"
    currentInput.className="form-control"
   

    currElement.parentElement.replaceChild(currentInput,currElement.previousElementSibling )
    }
    
}


