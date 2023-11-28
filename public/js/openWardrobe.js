const zoomContainer = document.getElementById("zoomContainer");
const catalogContainer = document.getElementById("catalogContainer");
const appContainer = document.getElementById("app-container");
const closeCatalogButton = document.getElementById("closeCatalogButton");

zoomContainer.addEventListener("click", function () {
    zoomContainer.classList.add("clicked");
    appContainer.style.overflow = "hidden";
    setTimeout(function () {
        catalogContainer.classList.remove("d-none");
    }, 300);
});

closeCatalogButton.addEventListener("click", function () {
    catalogContainer.classList.add("d-none");
    zoomContainer.classList.remove("clicked");
});
