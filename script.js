window.addEventListener('load', function () {
    let music = document.getElementById('background-music');
    music.play().catch(function(error) {
        console.log("Playback error:", error);
    });
});

