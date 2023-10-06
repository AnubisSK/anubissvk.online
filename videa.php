<?php
$nazovstranky = 'Videá';
require_once 'inc/hlavicka.php';
require_once 'inc/projekty.php';
?>

<div class="py-2 bg-gray-900">
    <h1 class="text-center text-2xl font-bold text-white">Moje videá</h1>
    <p class="text-center text-gray-100">Tu nájdeš videá z môjho YouTube kanálu!</p>
</div>
<hr><hr>

<section class="album py-5 px-10 py-2">
        <div class="container">
            <div class="row">
                <div class="youtube-container" />
            </div>
        </div>
</section>


<script src="https://apis.google.com/js/api.js"></script>
<script>
let nextPageToken = ""
fetch("https://youtube.googleapis.com/youtube/v3/search?part=snippet&channelId=UCCn8KANoz3SPAYKqx3pyoYQ&maxResults=7&order=date&key=AIzaSyATlDpOivf82n5ue19hyMShlJMA9FNrpv8&pageToken"+nextPageToken)
.then((result)=> {
   return result.json()
}).then((data) => {
    console.log(data)
    let videos = data.items
    nextPageToken = data.nextPageToken
    let videoContainer = document.querySelector(".youtube-container")
    for(video of videos){
        videoContainer.innerHTML += `
<div class="col-md-4">
<div class="card mb-4 shadow-sm">
    <a href="http://youtube.com/watch?v=${video.id.videoId}">
    <div class="card-img-top">
        <img src="${video.snippet.thumbnails.high.url}" />
    </div>
    
    <div class="card-body>
        <h2 class="card-text text-slate-700 font-bold  mt-1">${video.snippet.title}</h2>
        <p class="card-text">${video.snippet.description}</p>
    </div>
    </a>
</div>
</div>
`
    }

})
</script>
