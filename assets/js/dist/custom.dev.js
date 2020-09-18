"use strict";

function click_up() {
  document.getElementById('sidebar-category__item__menu__arrow-up').style.display = "none";
  document.getElementById('sidebar-category__item__menu__arrow-down').style.display = "block";
  document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].classList.add("scale-out-ver-top");
  document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].classList.remove("scale-up-ver-top");
  document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].style.height = "0px";
  document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].style.display = "none";
}

function click_down() {
  document.getElementById('sidebar-category__item__menu__arrow-down').style.display = "none";
  document.getElementById('sidebar-category__item__menu__arrow-up').style.display = "block";
  document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].style.height = "auto";
  document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].style.display = "block";
  document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].classList.add("scale-up-ver-top");
  document.getElementsByClassName('menu-item-136')[0].getElementsByClassName('sub-menu')[0].classList.remove("scale-out-ver-top");
}

function click_up_color() {
  document.getElementById('sidebar-category__item__color__arrow-up').style.display = "none";
  document.getElementById('sidebar-category__item__color__arrow-down').style.display = "block";
  document.getElementsByClassName('sidebar-category__item__color__grid')[0].style.display = "none";
}

function click_down_color() {
  document.getElementById('sidebar-category__item__color__arrow-down').style.display = "none";
  document.getElementById('sidebar-category__item__color__arrow-up').style.display = "block";
  document.getElementsByClassName('sidebar-category__item__color__grid')[0].style.display = "grid";
}

function click_up_size() {
  document.getElementById('sidebar-category__item__size__arrow-up').style.display = "none";
  document.getElementById('sidebar-category__item__size__arrow-down').style.display = "block";
  document.getElementsByClassName('sidebar-category__item__size__items')[0].style.display = "none";
}

function click_down_size() {
  document.getElementById('sidebar-category__item__size__arrow-down').style.display = "none";
  document.getElementById('sidebar-category__item__size__arrow-up').style.display = "block";
  document.getElementsByClassName('sidebar-category__item__size__items')[0].style.display = "grid";
}

function click_up_material() {
  document.getElementById('sidebar-category__item__material__arrow-up').style.display = "none";
  document.getElementById('sidebar-category__item__material__arrow-down').style.display = "block";
}

function click_down_material() {
  document.getElementById('sidebar-category__item__material__arrow-down').style.display = "none";
  document.getElementById('sidebar-category__item__material__arrow-up').style.display = "block";
}

function click_up_season() {
  document.getElementById('sidebar-category__item__season__arrow-up').style.display = "none";
  document.getElementById('sidebar-category__item__season__arrow-down').style.display = "block";
}

function click_down_season() {
  document.getElementById('sidebar-category__item__season__arrow-down').style.display = "none";
  document.getElementById('sidebar-category__item__season__arrow-up').style.display = "block";
}

function click_view_size_up() {
  document.getElementById('sidebar-category__item__size__arrow-up').style.display = "none";
  document.getElementById('sidebar-category__item__size__arrow-down').style.display = "block";
  document.getElementsByClassName('sidebar-category__item__size__items')[0].style.display = "none";
}

function click_view_size_down() {
  document.getElementById('details-body__grid__right__item-1__grid__content__size__dropdown__arrow-down').style.display = "none";
  document.getElementById('details-body__grid__right__item-1__grid__content__size__dropdown__arrow-up').style.display = "block";
  document.getElementsByClassName('sidebar-category__item__size__items')[0].style.display = "grid";
}

window.onscroll = function () {
  myFixMenu();
  myFixMenu_detail();
};

function myFixMenu() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    document.getElementsByClassName("site-header")[0].style.position = "fixed";
    document.getElementsByClassName("site-header")[0].style.background = "#BE1E2D";
    document.getElementsByClassName("site-header")[0].style.padding = "45px 0px 10px 0px";

    if (window.screen.width > 438) {
      document.getElementsByClassName("site-header")[0].style.paddingTop = "30px";
    } else {
      document.getElementsByClassName("site-header")[0].style.paddingTop = "15px";
    }
  } else {
    document.getElementsByClassName("site-header")[0].style.background = "center";
    document.getElementsByClassName("site-header")[0].style.paddingTop = "45px";
  }
}

function myFixMenu_detail() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    document.getElementsByClassName("details-post-type")[0].style.position = "fixed";
    document.getElementsByClassName("details-post-type")[0].style.background = "#FFFFFF";
    document.getElementsByClassName("details-post-type")[0].style.padding = "10px 0px 10px 0px";
    document.getElementsByClassName("details-post-type")[0].style.marginTop = "0px";
    document.getElementsByClassName("details-post-type")[0].style.left = "0";
    document.getElementsByClassName("details-post-type")[0].style.right = "0";
    document.getElementsByClassName("details-post-type")[0].style.zIndex = "10";

    if (window.screen.width > 438) {
      document.getElementsByClassName("details-post-type")[0].style.top = "30px";
    } else {
      document.getElementsByClassName("details-post-type")[0].style.top = "0px";
    }
  } else {
    document.getElementsByClassName("details-post-type")[0].style.marginTop = "20px";
    document.getElementsByClassName("details-post-type")[0].style.position = "unset";
    document.getElementsByClassName("details-post-type")[0].style.padding = "0px";
  }
}

function plus() {
  document.getElementById("quanlity").stepUp();
}

function down() {
  document.getElementById("quanlity").stepDown();

  if (document.getElementById("quanlity").value <= 0) {
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