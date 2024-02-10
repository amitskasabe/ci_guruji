const mathRedirect = document.querySelector("#math-course");

mathRedirect.addEventListener("click", (e) => {
    window.location.href ="courses/math";
    e.preventDefault();
});