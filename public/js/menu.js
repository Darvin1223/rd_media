document.addEventListener("DOMContentLoaded", event =>{

    const navegation = document.querySelector('#nav-header');
    let contator = 1;
    const menu_icon = document.getElementById('menu_icon');
    menu_icon.addEventListener("click",()=>{
      if(contator == 1){
        contator = 0;
        navegation.classList.add("nav-header--show");
      }else{
        navegation.classList.remove("nav-header--show");
        contator = 1;
      }
    })

    
});