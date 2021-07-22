let listElements = document.querySelectorAll('.list_button--click');

listElements.forEach(listElement => {
    listElement.addEventListener('click',()=>{
      listElement.classList.toggle('arrow');

      let height=0;
      let men= listElement.nextElementSibling;
      console.log(men.scrollHeight)
      if(men.clientHeight=="0"){
          height=men.scrollHeight;
      }
      men.style.height =  `${height}px`;


    })
    
});