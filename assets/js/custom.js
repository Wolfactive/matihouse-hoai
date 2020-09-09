
function click_up(){
    document.getElementById('sidebar-category__item__menu__arrow-up').style.display="none";
    document.getElementById('sidebar-category__item__menu__arrow-down').style.display="block";
    document.getElementsByClassName('sub-menu')[0].style.display = "none";
  }
function click_down(){
    document.getElementById('sidebar-category__item__menu__arrow-down').style.display="none";
    document.getElementById('sidebar-category__item__menu__arrow-up').style.display="block";
    document.getElementsByClassName('sub-menu')[0].style.display = "block";
    
  }


function click_up_color(){
    document.getElementById('sidebar-category__item__color__arrow-up').style.display="none";
    document.getElementById('sidebar-category__item__color__arrow-down').style.display="block";
    document.getElementsByClassName('sidebar-category__item__color__grid')[0].style.display = "none";
  }
function click_down_color(){
    document.getElementById('sidebar-category__item__color__arrow-down').style.display="none";
    document.getElementById('sidebar-category__item__color__arrow-up').style.display="block";
    document.getElementsByClassName('sidebar-category__item__color__grid')[0].style.display = "grid";
    
  }
function click_up_size(){
    document.getElementById('sidebar-category__item__size__arrow-up').style.display="none";
    document.getElementById('sidebar-category__item__size__arrow-down').style.display="block";
    document.getElementsByClassName('sidebar-category__item__size__items')[0].style.display = "none";
  }
function click_down_size(){
    document.getElementById('sidebar-category__item__size__arrow-down').style.display="none";
    document.getElementById('sidebar-category__item__size__arrow-up').style.display="block";
    document.getElementsByClassName('sidebar-category__item__size__items')[0].style.display = "grid";
    
  }
  function click_up_material(){
    document.getElementById('sidebar-category__item__material__arrow-up').style.display="none";
    document.getElementById('sidebar-category__item__material__arrow-down').style.display="block";
    
  }
function click_down_material(){
    document.getElementById('sidebar-category__item__material__arrow-down').style.display="none";
    document.getElementById('sidebar-category__item__material__arrow-up').style.display="block";
  
  }
  function click_up_season(){
    document.getElementById('sidebar-category__item__season__arrow-up').style.display="none";
    document.getElementById('sidebar-category__item__season__arrow-down').style.display="block";
    
  }
function click_down_season(){
    document.getElementById('sidebar-category__item__season__arrow-down').style.display="none";
    document.getElementById('sidebar-category__item__season__arrow-up').style.display="block";
  
  }