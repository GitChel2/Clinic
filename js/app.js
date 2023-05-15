let check = false;

let nav = document.querySelector("#nav__burger");
let navToggle = document.querySelector("#navToggle");

navToggle.addEventListener("click", open);

function open(e) {

    if (!check) {
        e.preventDefault();
        nav.classList.add("nav__show");
        check = true; 
    }
    else {
       nav.classList.remove("nav__show");
       check = false; 
    }

}

let menu = document.querySelector("#burger__nav");
let links = Array.from(menu.children);

links.forEach((link) => {
  link.addEventListener("click", close);
});



function close(e) {
    nav.classList.remove("nav__show");
    check = false;
}


