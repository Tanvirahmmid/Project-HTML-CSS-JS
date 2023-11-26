const apikey = "9e15f4b463a1783b49d3cf61cb6d0fdd";
    const apiurl = "https://api.openweathermap.org/data/2.5/weather?units=metric&q=";
    const searchBox= document.querySelector(".search input");
    const searchBtn= document.querySelector(".search button");
    const weatherIcon= document.querySelector(".w-icon");

    async function checkweather(city){
        const response = await fetch(apiurl + city+ `&appid=${apikey}`);
        if(response.status==404){
            document.querySelector(".error").style.display= "block";
            document.querySelector(".weather").style.display= "none";
        } else{

        var data = await response.json();
      


document.querySelector(".city").innerHTML = data.name;
document.querySelector(".temp").innerHTML =Math.round(data.main.temp) +"°C";
document.querySelector(".humidity").innerHTML = data.main.humidity +"%";
document.querySelector(".wind").innerHTML = data.wind.speed  +  " Km/h";


if(data.weather[0].main=="Cloud"){
    weatherIcon.src ="img/cloudy.png";
}
else if (data.weather[0].main== "Clear"){
    weatherIcon.src ="img/sun.png"

}

else if (data.weather[0].main== "Rain"){
    weatherIcon.src ="img/2.png"

}

else if (data.weather[0].main== "Drizzle"){
    weatherIcon.src ="img/d.png"

}

else if (data.weather[0].main== "Mist"){
    weatherIcon.src ="img/m.png"

}


document.querySelector(".weather").style.display="block";
document.querySelector(".error").style.display= "none";
        }

    }


    searchBtn.addEventListener("click", ()=>{
        checkweather(searchBox.value);
    }
    )

    checkweather();
