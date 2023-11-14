//Fade Animation Start
if ($(window).width() > 576) {
    let anim = [...document.querySelectorAll(".animate")];
    let options = {
        rootMargin: "0px",
        threshold: 0.2,
    };
    let animate = (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.style.animation = `anim ${entry.target.dataset.speed ? entry.target.dataset.speed : '.5s'} ${entry.target.dataset.delay} forwards ease-out`;
            }
        });
    };
    let observer = new IntersectionObserver(animate, options);
    anim.forEach((item, idx) => {
        observer.observe(item);
    });
}
//Fade Animation END


//Image Observer START
$(document).ready(function() {
    const imgElements = document.querySelectorAll("img[data-src]");

    const lazyLoadingImage = (entries, observer2) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.src = entry.target.dataset.src;
            entry.target.addEventListener("load", () => {
                entry.target.classList.remove("lazy-img");
                observer2.unobserve(entry.target);
            });
        });
    };
    const lazyLoadingObserver = new IntersectionObserver(lazyLoadingImage, {
        threshold: 0,
        rootMargin: '0px 0px 0px 0px',
    });
    imgElements.forEach((img) => lazyLoadingObserver.observe(img));
});
//Image Observer END