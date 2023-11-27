const dressForm = document.getElementById("dressForm");

const fields = [
    { id: "name", errorId: "nameError", minLength: 3, maxLength: 256 },
    { id: "type", errorId: "typeError", minLength: 1, maxLength: Infinity },
    { id: "brand", errorId: "brandError", minLength: 1, maxLength: Infinity },
    { id: "size", errorId: "sizeError", minLength: 1, maxLength: Infinity },
    { id: "color", errorId: "colorError", minLength: 3, maxLength: 265 },
    { id: "price", errorId: "priceError", minValue: 0, maxValue: Infinity },
    {
        id: "purchase_date",
        errorId: "purchase_date_error",
        validate: (value) => new Date(value) > Date.now(),
    },
    { id: "season", errorId: "seasonError", minLength: 1, maxLength: Infinity },
    { id: "description", errorId: "descriptionError", maxLength: 256 },
];

dressForm.onsubmit = function (event) {
    fields.forEach((field) => {
        const inputElement = document.getElementById(field.id);
        const errorElement = document.getElementById(field.errorId);

        errorElement.classList.add("d-none");
        if (field.validate && field.validate(inputElement.value)) {
            event.preventDefault();
            errorElement.classList.remove("d-none");
        } else if (
            (field.minLength && inputElement.value.length < field.minLength) ||
            (field.maxLength && inputElement.value.length > field.maxLength) ||
            (field.minValue && inputElement.value < field.minValue) ||
            (field.maxValue && inputElement.value > field.maxValue)
        ) {
            event.preventDefault();
            errorElement.classList.remove("d-none");
        }
    });
};
