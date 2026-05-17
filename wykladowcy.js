const searchInput = document.getElementById("searchInput");
const resultsBox = document.getElementById("results");

let wykladowcy = [];

fetch("wykladowcy.json")
    .then(response => response.json())
    .then(data => {
        wykladowcy = data;
    })
    .catch(error => {

        resultsBox.innerHTML = `
            <div class="result-card">
                Nie udało się wczytać danych.
            </div>
        `;

        console.error(error);
    });

searchInput.addEventListener("input", () => {

    const query = searchInput.value.toLowerCase().trim();

    resultsBox.innerHTML = "";

    if (query.length === 0) {
        return;
    }

    const wyniki = wykladowcy.filter(w => {

        return (
            w.imie.toLowerCase().includes(query) ||
            w.nazwisko.toLowerCase().includes(query) ||
            w.przedmiot.toLowerCase().includes(query) ||
            w.sala.toLowerCase().includes(query)
        );
    });

    if (wyniki.length === 0) {

        resultsBox.innerHTML = `
            <div class="result-card">
                Brak wyników
            </div>
        `;

        return;
    }

    wyniki.forEach(w => {

        const card = document.createElement("div");

        card.classList.add("result-card");

        card.innerHTML = `
            <h3>${w.imie} ${w.nazwisko}</h3>

            <p>
                <strong>Przedmiot:</strong>
                ${w.przedmiot}
            </p>

            <p>
                <strong>Sala:</strong>
                ${w.sala}
            </p>

            <p>
                <strong>Godziny:</strong>
                ${w.godziny}
            </p>
        `;

        resultsBox.appendChild(card);
    });
});