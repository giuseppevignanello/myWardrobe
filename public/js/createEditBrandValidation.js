const brandForm = document.getElementById("brandForm");

const fields = [
    { id: "name", errorId: "nameError", minLength: 3, maxLength: 256 },
];

brandForm.onsubmit = function (event) {
    fields.forEach((field) => {
        const inputElement = document.getElementById(field.id);
        const errorElement = document.getElementById(field.errorId);

        //hide the error message on a new submit
        errorElement.classList.add("d-none");

        if (
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
