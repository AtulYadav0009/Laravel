function Change() {
    let nav = document.getElementById('nav');
    nav.style.background = "white";
    if (nav.style.background == "white") {
        nav.style.background = "green";
    }
    else{
         nav.style.background = "blue";
    }
}