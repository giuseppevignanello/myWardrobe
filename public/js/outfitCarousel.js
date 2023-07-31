let active = 0;
const prev = document.getElementById("prev");
const next = document.getElementById("next");
const dresses = document.querySelectorAll(".outfit_dress");

function showActiveDress() {
    dresses.forEach((dress, index) => {
        if (index === active) {
            dress.classList.remove("d-none");
        } else {
            dress.classList.add("d-none");
        }
    });
}

showActiveDress();

prev.addEventListener("click", function () {
    if (active == 0) {
        active = dresses.length - 1;
    } else {
        active--;
    }

    showActiveDress();
});

next.addEventListener("click", function () {
    if (active == dresses.length - 1) {
        active = 0;
    } else {
        active++;
    }

    showActiveDress();
});
