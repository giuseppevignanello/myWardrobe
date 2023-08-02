let active = 0;
const prev = document.getElementById("prev");
const next = document.getElementById("next");
const dresses = document.querySelectorAll(".outfit_dress");
const outfitElement = document.getElementById("outfit");
let selectedDresses = [];
const outfit = [];
const outfitData = document.getElementById("outfitData");
// const add = document.getElementById("add");
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

function toggleOutfit(dress) {
    const dressName = dress.querySelector(".card-title").textContent;
    const index = outfit.indexOf(dressName);

    if (index === -1) {
        outfit.push(dressName);
    } else {
        outfit.splice(index, 1);
    }

    updateOutfitList();
}

dresses.forEach((dress) => {
    dress.addEventListener("click", function () {
        const dressId = dress.getAttribute("id");

        // Check if dress is already in the array
        if (!selectedDresses.includes(dressId)) {
            // Aggiungi l'outfit all'array dei selezionati
            selectedDresses.push(dressId);

            // Adding input field
            outfitData.innerHTML += ` <input type="hidden" name="dresses[]" value="${dressId}">`;

            console.log(outfitData);
            toggleOutfit(dress);
        }
    });
});

function updateOutfitList() {
    outfitElement.innerHTML = "";

    outfit.forEach((dressName) => {
        const li = document.createElement("li");
        const dress = Array.from(dresses).find(
            (d) => d.querySelector(".card-title").textContent === dressName
        );
        const dressImage = dress.querySelector("img").src;
        li.innerHTML = `<img src="${dressImage}" alt="${dressName}">`;
        outfitElement.appendChild(li);
    });
}
