const canvas = document.querySelector(".home__points--half-circle");
const ctx = canvas.getContext("2d");
ctx.beginPath();
ctx.arc(150, 103, 100, 0.85 * Math.PI , 1.56 * Math.PI);
ctx.lineWidth = 4;
ctx.strokeStyle = "#A8D5E2";
ctx.stroke();


const ct = canvas.getContext("2d");
ct.beginPath();
ct.arc(150, 103, 100, 1.56 * Math.PI , 2.15 * Math.PI);
ct.lineWidth = 4;
ct.strokeStyle = "#4B5058";
ct.stroke();