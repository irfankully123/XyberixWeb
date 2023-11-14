const menuToggleClose = document.querySelector("#menu-toggle-close");
const menu = document.querySelector(".projectForm--box");

const tl = gsap.timeline({
    paused: true
});



tl.to(".projectForm--box", {
    x: 0,
    duration: 1,
    ease: "Circ.easeInOut",
});


tl.from(".projectForm .form-item", {
    y: 25,
    opacity: 0,
    duration: 0.4,
    ease: "Circ.easeOut",
    stagger: 0.1
});


const boxes = document.querySelectorAll('.menu-open');

boxes.forEach(box => {
    box.addEventListener('click', function handleClick(event) {
        console.log('box clicked', event);

        tl.play()
    });
});



// menuToggleOpen.addEventListener("click", () => );
menuToggleClose.addEventListener("click", () => {
    tl.reverse();

});