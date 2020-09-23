


function click_up(){
    document.getElementById('sidebar-category__item__menu__arrow-up').style.display="none";
    document.getElementById('sidebar-category__item__menu__arrow-down').style.display="block";
    document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].classList.add("scale-out-ver-top");
    document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].classList.remove("scale-up-ver-top");
    document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].style.height = "0px";
    document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].style.display = "none";
  }
function click_down(){
    document.getElementById('sidebar-category__item__menu__arrow-down').style.display="none";
    document.getElementById('sidebar-category__item__menu__arrow-up').style.display="block";
    document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].style.height = "auto";
    document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].style.display = "block";
    document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].classList.add("scale-up-ver-top");
    document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].classList.remove("scale-out-ver-top");
    
    
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

  function click_view_size_up(){
    document.getElementById('sidebar-category__item__size__arrow-up').style.display="none";
    document.getElementById('sidebar-category__item__size__arrow-down').style.display="block";
    document.getElementsByClassName('sidebar-category__item__size__items')[0].style.display = "none";
  }
function click_view_size_down(){
    document.getElementById('details-body__grid__right__item-1__grid__content__size__dropdown__arrow-down').style.display="none";
    document.getElementById('details-body__grid__right__item-1__grid__content__size__dropdown__arrow-up').style.display="block";
    document.getElementsByClassName('sidebar-category__item__size__items')[0].style.display = "grid";
    
  }

  window.onscroll = function() {myFixMenu()}
  function myFixMenu() {
    if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
      document.getElementsByClassName("site-header")[0].style.position = "fixed";
      document.getElementsByClassName("site-header")[0].style.background = "#BE1E2D";
      document.getElementsByClassName("site-header")[0].style.padding = "45px 0px 10px 0px";
      if ($(".single-blog")[0]){
        document.getElementsByClassName("site-header")[0].style.background = "#ffffff";
      } 
      if(window.screen.width > 438 ){
        document.getElementsByClassName("site-header")[0].style.paddingTop = "45px";
        document.getElementsByClassName("site-header")[0].style.boxShadow = "0px 5px 10px 0px rgba(0,0,0,0.3)";
      }
      else{
        document.getElementsByClassName("site-header")[0].style.paddingTop = "15px";
        document.getElementsByClassName("site-header")[0].style.boxShadow = "0px 5px 10px 0px rgba(0,0,0,0.3)";
      }
    } else {
      document.getElementsByClassName("site-header")[0].style.background = "center";
      document.getElementsByClassName("site-header")[0].style.paddingTop = "45px";
      document.getElementsByClassName("site-header")[0].style.boxShadow = "none";
    }
    
  }

  function plus(){
    document.getElementById("quanlity").stepUp();
  }
  function down(){
    document.getElementById("quanlity").stepDown();
    if(document.getElementById("quanlity").value <=0){
      document.getElementById("quanlity").value = 0;
    }
  }

  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }

  function openNav_detail() {
    document.getElementById("Sidenav").style.width = "250px";
  }
  
  function closeNav_detail() {
    document.getElementById("Sidenav").style.width = "0";
  }