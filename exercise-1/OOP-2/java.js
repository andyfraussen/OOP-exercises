const img = new Image();
img.src = "https://media.wmagazine.com/photos/5a5f5f33c4341d3bec531e85/4:3/w_1536/kendall-jenner-blake-griffin-never-serious-web-lead.jpg";
img.onload = () => { requestAnimationFrame(mainLoop) } // start when loaded
const ctx = canvas.getContext("2d");

function drawImageRotated(img, x, y, scale, rot) {
    ctx.setTransform(scale, 0, 0, scale, x, y);
    ctx.rotate(rot);
    ctx.drawImage(img, -img.width / 2, -img.height / 2);
    ctx.setTransform(1, 0, 0, 1, 0, 0);
}

function mainLoop(time) {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    drawImageRotated(img,canvas.width / 2, canvas.height / 2, 0.5, time / 500);
    requestAnimationFrame(mainLoop);
}