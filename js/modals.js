let openPostModal = document.getElementById("createpost");
let closeCreatePost = document.getElementById("closemodal");
let cancelPost = document.getElementById("cancelpost");
let postModal = document.getElementById("id01");

//closing the create post modal
closeCreatePost.onclick = function () {
  postModal.style.display = "none";
};
cancelPost.onclick = function () {
  postModal.style.display = "none";
};

openPostModal.onclick = function () {
  postModal.style.display = "block";
};
 