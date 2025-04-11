if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
} else {
    console.log("이 브라우저는 위치추적 불가");
}

function showPosition(position) {
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;

    // 현재 위치의 날씨를 가져오는 함수
    fetchWeather(lat, lon, 'city', 'weathericonUrl', 'temperature');

    // 도쿄의 날씨를 가져오는 함수
    fetchWeatherByCity(1850147, 'tokyo', 'tokyoweaiconUrl', 'tokyotemper', 'Tokyo');

    // 서울의 날씨를 가져오는 함수
    fetchWeatherByCity(1835848, 'seoul', 'seoulweaiconUrl', 'seoultemper', 'Seoul');
}

function fetchWeather(lat, lon, cityElementId, weatherIconElementId, temperatureElementId) {
    var url = `https://api.openweathermap.org/data/2.5/weather?lat=` + lat + `&lon=` + lon + `&appid=4473ac988705fa29a803df2561002539&units=metric`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log("데이터는?", data);

            // var cityName = data.name;
            var temperature = Math.round(data.main.temp);

            // var cityElement = document.getElementById(cityElementId);
            var temperatureElement = document.getElementById(temperatureElementId);
            var weatherIconElement = document.getElementById(weatherIconElementId);

            // var cityText = document.createTextNode(cityName);
            var temperatureText = document.createTextNode(temperature + '°C');

            var weatherIconUrl = 'http://openweathermap.org/img/wn/' + data.weather[0].icon + '.png';
            var weatherIconImg = document.createElement('img');
            weatherIconImg.setAttribute('src', weatherIconUrl);
            weatherIconImg.setAttribute('alt', data.weather[0].description);

            // cityElement.appendChild(cityText);
            temperatureElement.appendChild(temperatureText);
            weatherIconElement.appendChild(weatherIconImg);
        })
        .catch(error => {
            console.log('Error:', error);
        });
}

function fetchWeatherByCity(cityId, cityElementId, weatherIconElementId, temperatureElementId, cityName) {
    var url = `https://api.openweathermap.org/data/2.5/weather?id=` + cityId + `&appid=4473ac988705fa29a803df2561002539&units=metric`;

    fetch(url)
        .then(response => response.json())
        .then(data => {
            console.log(cityId + `데이터는?`, data);

            var temperature = Math.round(data.main.temp);

            // var cityElement = document.getElementById(cityElementId);
            var temperatureElement = document.getElementById(temperatureElementId);
            var weatherIconElement = document.getElementById(weatherIconElementId);

            // cityName을 매개변수로 사용하여 텍스트 노드 생성
            // var cityText = document.createTextNode(cityName);
            var temperatureText = document.createTextNode(temperature + '°C');

            var weatherIconUrl = 'http://openweathermap.org/img/wn/' + data.weather[0].icon + '.png';
            var weatherIconImg = document.createElement('img');
            weatherIconImg.setAttribute('src', weatherIconUrl);
            weatherIconImg.setAttribute('alt', data.weather[0].description);

            // cityElement.appendChild(cityText);
            temperatureElement.appendChild(temperatureText);
            weatherIconElement.appendChild(weatherIconImg);
        })
        .catch(error => {
            console.log('Error:', error);
        });
}