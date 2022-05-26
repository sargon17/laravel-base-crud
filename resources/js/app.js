require("./bootstrap");

let deleteBtn = document.querySelector("#delete-btn");
let overlayMenu = document.querySelector("#overlay-delete-message");
let cancelBtn = document.querySelector("#delete-btn-cancel");

deleteBtn.addEventListener("click", function (e) {
    e.preventDefault();
    overlayMenu.classList.add("show");
});
cancelBtn.addEventListener("click", function (e) {
    overlayMenu.classList.remove("show");
});

overlayMenu.addEventListener("wheel", function (e) {
    e.preventDefault();
});
