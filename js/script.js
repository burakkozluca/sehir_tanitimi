const url="https://api.openweathermap.org/data/2.5/"
const key='afc13dff6fab9ef8a506119a18fdf8fc'

const setQuery=(e)=>{
    if(e.keyCode=='13')
        getResult(searchbar.Value)
}
const getResult=(cityName)=>{
    let query="${url}weather?q=${cityName}&appid=${key}&units=metric&lang=tr"
    console.log(query);
}

const searchbar= document.getElementById('searchbar')
searchbar.addEventListener('keypress',setQuery)