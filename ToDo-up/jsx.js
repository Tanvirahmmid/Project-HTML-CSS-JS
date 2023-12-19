const inputFild=document.getElementById('inputL');
const inputBtn=document.getElementById('iBtn');
const newLi=document.getElementById('lst');
const dateInput = document.getElementById('dateInput');


inputBtn.addEventListener('click', addTask);
function addTask(){
const newText=inputFild.value;
const taskDate = dateInput.value;
if(taskDate.trim()!==''){
if(newText.trim()!==''){
    const date= new Date().toLocaleString();
    const nItem=document.createElement('li');
    nItem.classList.add('list-group-item');
    nItem.innerHTML=` 
    <span class="txt-n ms-2 mt-2 ">${newText}</span>
    <span class="task-date d-flex justify-content-end">Due Date ${taskDate}</span>
    <span class="date d-flex justify-content-end ">Add Date ${date}</span>
    <div class="mt-1 mb-1 px-3 d-flex justify-content-end px-3"></div>
    <button type="button" class="btn btn-sm btn-primary edit-btn">Edit</button>
    <button type="button" class="btn btn-sm btn-danger remove-btn">Remove</button>
    <button type="button" onclick="disableButton()" class="btn btn-sm btn-success complete-btn">Complete</button>
    </div>
    
    `;
    newLi.appendChild(nItem);

    inputFild.value = '';
    dateInput.value='';


    const editBtn=nItem.querySelector('.edit-btn');
    const removeBtn=nItem.querySelector('.remove-btn');
    const comBtn=nItem.querySelector('.complete-btn');

    editBtn.addEventListener('click', editTask);
    removeBtn.addEventListener('click',rmvtask);
    comBtn.addEventListener('click',comTask);




}

}
}

f

function editTask(event) {
    const nItem = event.target.closest('.list-group-item');
    const taskTextElement = nItem.querySelector('.txt-n');
    const newTaskText = prompt('Enter new task text:');
    if (newTaskText !== null && newTaskText.trim() !== '') {
      taskTextElement.textContent = newTaskText;
    }
  }
function rmvtask(event){
    const nItem=event.target.closest('.list-group-item');
    nItem.remove();
}

function comTask(event) {
    const nItem = event.target.closest('.list-group-item');
    const taskTextElement = nItem.querySelector('.txt-n');
    taskTextElement.classList.toggle('text-decoration-line-through');

    


    if(taskTextElement.classList.toggle){


      const cngElement = nItem.querySelector('.complete-btn');
      cngElement.textContent="Completed"
  }
  function disableButton() {
    const cngElement = nItem.querySelector('.complete-btn');
    cngElement.disabled = true;
  }
  }