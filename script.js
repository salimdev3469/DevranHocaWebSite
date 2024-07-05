//Site müziği
window.addEventListener('load', function () {
    let music = document.getElementById('background-music');
    music.play().catch(function(error) {
        console.log("Playback error:", error);
    });
});

// Devamını oku butonları düzenlemesi, her butonun da çalışması için foreach kullandık
const readMoreBtns = document.querySelectorAll(".read-more-btn");
const texts = document.querySelectorAll(".contentparag");

readMoreBtns.forEach((btn, index) => {
    btn.addEventListener("click", (e) => {
        texts[index].classList.toggle("show-more");
        if (btn.innerText === "Devamını oku") {
            btn.innerText = "Kapat";
        } else {
            btn.innerText = "Devamını oku";
        }
    });
});

