document.addEventListener("DOMContentLoaded", function () {
    const apiUrl = "http://api.openweathermap.org/data/2.5/weather";
    const apiKey = "d6a8cf50495064d9edbbdff520bb8c53";
  
    const weatherInfo = document.getElementById("weather-info");
    const cityInput = document.getElementById("cityInput");
    const searchBtn = document.getElementById("searchBtn");
  
    searchBtn.addEventListener("click", function () {
      const city = cityInput.value.trim();
      if (city === "") {
        alert("Lütfen bir şehir adı girin.");
        return;
      }
  
      const apiUrlWithParams = `${apiUrl}?q=${city}&appid=${apiKey}&units=metric`;
  
      fetch(apiUrlWithParams)
        .then(response => {
          if (!response.ok) {
            throw new Error("Hava durumu verileri alınamadı.");
          }
          return response.json();
        })
        .then(data => {
          weatherInfo.innerHTML = `
            <p><strong>Şehir:</strong> ${city}</p>
            <p><strong>Sıcaklık:</strong> ${data.main.temp}°C</p>
            <p><strong>Hissedilen Sıcaklık:</strong> ${data.main.feels_like}°C</p>
            <p><strong>Durum:</strong> ${data.weather[0].description}</p>
          `;
        })
        .catch(error => {
          console.error("Hata:", error);
        });
    });
  });
  
