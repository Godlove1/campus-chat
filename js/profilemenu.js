let openeditprofile = document.getElementById("editprofile");
let openevent = document.getElementById("openevent");
let createvent= document.getElementById("createvent");
let closeprof = document.getElementById("close");
let profmenu = document.getElementById("showprofile");
let closeevent = document.getElementById("close-event");
let smenu = document.getElementById("dot");
let dmenu = document.getElementById("ul");

closeprof.onclick = () => {
	profmenu.style.display = "none";
}

openeditprofile.onclick = () => {
  profmenu.style.display = "block";
};


openevent.onclick = () => {
  createvent.style.display = "block";
};


closeevent.onclick = () => {
 createvent.style.display = "none";
};

function opmenu() {
  dmenu.style.display = "block";
}