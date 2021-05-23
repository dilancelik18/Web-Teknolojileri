var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '390',
    width: '640',
    videoId: 'M7lc1UVf-VE',
    playerVars: {
      'playsinline': 1
    },
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
}




/*function fetchData(){
    fetch("https://api.spotify.com/v1/audio-analysis/6EJiVf7U0p1BBfs0qqeb1f").then(response => {
    console.log(response);
  })
  fetchData();

}






/*const url="https:///api/characters/"

const setQuery=(e)=>{
    if(e.keycode =='13')
    getResult(searchBar.value)
}

const getResult =(charactersname)=>{
    let query='${url}characters?name=${charactersname}&units=metric&lang=tr'
   console.log(query);
     fetch(query)
    .then(character=>{
       return  character.json()
    })


   .then(displayResult)
}

const displayResult=(result)=>{
    let character =document.querySelector('.name')
    character.innerText=''

const searchBar=document.getElementById('searchBar')
searchBar.addEventListener('keypress',setQuery)*/
