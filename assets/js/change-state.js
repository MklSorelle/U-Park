const gologin = document.querySelector(".go-login");
const gosign = document.querySelector(".go-sign-in");
const login = document.querySelector(".login");
const sign = document.querySelector(".sign-in");

gologin.addEventListener("click", () => {
    login.classList.toggle("active")
    sign.classList.toggle("active")
})

gosign.addEventListener("click", () => {
    login.classList.toggle("active")
    sign.classList.toggle("active")
})

console.log("coucou");