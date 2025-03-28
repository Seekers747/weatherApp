let checkMenu = false;
const burgerMenu = document.querySelector('.burger-menu');
const cityValue = document.querySelector('.search-input');
const searchBtn = document.querySelector('.search-button');

setTimeout(function() {
    var notification = document.querySelector('.notification-error');
    if (notification) {
      notification.remove();
    }
}, 5000);

const darkmodeToggle = document.getElementById('darkmode-toggle');
const body = document.body;

if (localStorage.getItem('darkmode') === 'enabled') {
    body.classList.add('dark-mode');
    darkmodeToggle.checked = true;
}

darkmodeToggle.addEventListener('change', () => {
    if (darkmodeToggle.checked) {
        body.classList.add('dark-mode');
        localStorage.setItem('darkmode', 'enabled');
    } else {
        body.classList.remove('dark-mode');
        localStorage.setItem('darkmode', 'disabled');
    }
});

function toggleBurgerMenu() {
    checkMenu = !checkMenu;
    burgerMenu.style.left = checkMenu ? "0vw" : "100vw";
}

searchBtn.addEventListener('click', (event) => {
    event.preventDefault();
    if (cityValue.value.trim() != '') {
        updateWeatherInfo(cityValue.value);
        console.log(cityValue.value);
        cityValue.value = '';
    }
});

cityValue.addEventListener('keydown', (event) => {
    if (event.key == 'Enter' && cityValue.value.trim() != '') {
        event.preventDefault();
        updateWeatherInfo(cityValue.value);
        console.log(cityValue.value);
        cityValue.value = '';
    }
});

async function getFetchData(city) {
    const apiKey = '050fa92090b4a55a4ed4686308f7db9e';
    const apiEndpoint = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;
    const response = await fetch(apiEndpoint);
    return response.json();
}

async function updateWeatherInfo(city) {
    const weatherData = await getFetchData(city);
    
    // Update the weather data in the HTML elements
    document.getElementById('city-name').textContent = weatherData.name;
    document.getElementById('current-date').textContent = new Date().toLocaleDateString();
    document.getElementById('temperature').textContent = `${weatherData.main.temp} °C`;
    document.getElementById('weather-condition').textContent = weatherData.weather[0].description;
    document.getElementById('humidity').textContent = `${weatherData.main.humidity}%`;
    document.getElementById('wind-speed').textContent = `${weatherData.wind.speed} m/s`;
    
    // Update the weather icon (optional, you can add different icons for weather conditions)
    const iconCode = weatherData.weather[0].icon;
    const iconUrl = `http://openweathermap.org/img/wn/${iconCode}.png`;
    document.getElementById('weather-icon').src = iconUrl;

    console.log(weatherData);
}
