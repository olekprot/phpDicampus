
let selectedButtonValue;

function addPais() {
    let buttons = document.querySelectorAll('.button_mobile_list');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            selectedButtonValue = button.value;
            processButtonValue(selectedButtonValue);
            
        });
    });
}

function processButtonValue(value) {
    fetch('assets/datos/paises.json')
    .then(response => response.json())
    .then(jsonData => {
        const matchedCountry = jsonData.countries.find(country => country.name === value);
        if (matchedCountry) {
            const content = `
                <li class="paises"> 
                    <h2>${matchedCountry.name}</h2>
                    <img src="${matchedCountry.flag}" alt="Flag of ${matchedCountry.name}">
                    <p>Populacion:: ${matchedCountry.population}</p>
                    <p>Area: ${matchedCountry.area}</p>
                    <p>Capital: ${matchedCountry.capital}</p>
                </li>
                <button onclick=borrar() class="button_borrar"> Volver </button>
            `;
            let pais = document.querySelector('#imprimirPais');
            pais.innerHTML = content;
        } 
    })
    .catch(error => {
        console.error('Error fetching the JSON data:', error);
    });

}
function borrar() {
    let pais = document.querySelector('#imprimirPais');
    pais.innerHTML = '';
}




        

    
