let createButton = document.getElementById('create-button');
let createForm = document.getElementById('create-form');
let isCreateFormDisplaying = false;

//Toggle form
createButton.onclick = () => {

    //check if function is working 
   // console.log('Function is working);
   

   if(isCreateFormDisplaying==false){
        //displaying the form
        createForm.style.display = 'block';
        isCreateFormDisplaying = true;
   }else{

    //Hide the form
    createForm.style.display = 'none';
    isCreateFormDisplaying = false;
   }
}