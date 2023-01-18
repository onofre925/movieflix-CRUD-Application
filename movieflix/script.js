let createButton = document.getElementById("create-button");
let createForm = document.getElementById("create-form");
let isCreateFormDisplaying = false;

let updateButton = document.getElementById('update-button');
let updateForm = document.getElementById('update-form');
let isUpdateFormDisplaying = false;

//Toggle form
createButton.onclick = () => {
  //check if function is working
  // console.log('Function is working);

  if (isCreateFormDisplaying == false) {
    //displaying the form
    createForm.style.display = "block";
    isCreateFormDisplaying = true;
  } else {
    //Hide the form
    createForm.style.display = "none";
    isCreateFormDisplaying = false;
  }
}

//Toggle Update Form
updateButton.onclick = function(){
     if(isUpdateFormDisplaying == false){
      //Display the update form
      updateForm.style.display = 'block';
      isUpdateFormDisplaying = true;
     }else{
      //Hide the form
      updateForm.style.display = 'none';
      isUpdateFormDisplaying = false;
     }
}


