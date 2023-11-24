const createDressForm = document.getElementById("createDressForm");
const nameInput = document.getElementById("name");
const nameError = document.getElementById("nameError");
const typeInput = document.getElementById("type");
const typeError = document.getElementById("typeError");
const brandInput = document.getElementById("brand");
const brandError = document.getElementById("brandError");
const sizeInput = document.getElementById("size");
const sizeError = document.getElementById("sizeError");
const colorInput = document.getElementById("color");
const colorError = document.getElementById("colorError");
const priceInput = document.getElementById("price");
const priceError = document.getElementById("priceError");
const purchaseDateInput = document.getElementById("purchase_date");
const purchaseDateError = document.getElementById("purchase_date_error");
const seasonInput = document.getElementById("season");
const seasonError = document.getElementById("seasonError");
const descriptionInput = document.getElementById("description");
const descriptionError = document.getElementById("descriptionError");

createDressForm.onsubmit = function (event) {
    nameError.classList.add("d-none");
    typeError.classList.add("d-none");
    brandError.classList.add("d-none");
    sizeError.classList.add("d-none");
    colorError.classList.add("d-none");
    priceError.classList.add("d-none");
    purchaseDateError.classList.add("d-none");
    seasonError.classList.add("d-none");
    descriptionError.classList.add("d-none");

    if (nameInput.value.length < 3 || nameInput.value.length > 256) {
        event.preventDefault();
        nameError.classList.remove("d-none");
    }
    if (typeInput.value == "") {
        event.preventDefault();
        typeError.classList.remove("d-none");
    }
    if (brandInput.value == "") {
        event.preventDefault();
        brandError.classList.remove("d-none");
    }

    if (sizeInput.value == "") {
        event.preventDefault();
        sizeError.classList.remove("d-none");
    }

    if (colorInput.value.length < 3 || colorInput.value.length > 265) {
        event.preventDefault();
        colorError.classList.remove("d-none");
    }

    if (priceInput.value < 0) {
        event.preventDefault();
        priceError.classList.remove("d-none");
    }

    if (new Date(purchaseDateInput.value) > Date.now()) {
        event.preventDefault();
        purchaseDateError.classList.remove("d-none");
    }

    if (seasonInput.value == "") {
        event.preventDefault();
        seasonError.classList.remove("d-none");
    }

    if (descriptionInput.value.length > 256) {
        event.preventDefault();
        descriptionError.classList.remove("d-none");
    }
};
