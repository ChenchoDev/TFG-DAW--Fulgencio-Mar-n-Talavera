const scrollContainer = document.querySelector("#main");

scrollContainer.addEventListener("wheel", (e) => {
    e.preventDefault();
    scrollContainer.scrollLeft += e.deltaY;
});