let active = 0;
const prev = document.getElementById("prev");
const next = document.getElementById("next");
const dresses = document.querySelectorAll(".outfit_dress");
const outfitElement = document.getElementById("outfit");
const outfit = [];
// const add = document.getElementById("add");
const dressesArray = Array.prototype.slice.call(dresses);
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
        // Il vestito non è presente nell'outfit, aggiungilo
        outfit.push(dressName);
        dress.classList.add("selected");
    } else {
        // Il vestito è già presente nell'outfit, rimuovilo
        outfit.splice(index, 1);
        dress.classList.remove("selected");
    }

    updateOutfitList();
}

dresses.forEach((dress) => {
    dress.addEventListener("click", function () {
        toggleOutfit(dress);
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
