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



//Collapse Button

document.addEventListener("DOMContentLoaded", function() {
    let ikona = document.querySelector(".fa-sharp");
    let sideColumn = document.querySelector(".sideColumn");
    let closeBtn = document.querySelector(".close-btn");
    let manshit=document.querySelector(".mansh");

    ikona.addEventListener("click", function() {
        // Hide the icon
        ikona.style.display = "none";
        
        manshit.style.display = "none";
        

        // Show the side column
        sideColumn.style.display = "block";
    });

    closeBtn.addEventListener("click", function() {
        // Show the icon
        ikona.style.display = "block";
        manshit.style.display = "block";

        // Hide the side column
        sideColumn.style.display = "none";
    });
});


function goToIndexPage() {
    // index.php sayfasına yönlendirme yap
    window.location.href = "index.php";
}

document.querySelector(".fa-solid").addEventListener("click", function() {
    document.getElementById("sidebar").style.width = "250px";
});

document.getElementById("close-btnn").addEventListener("click", function() {
    document.getElementById("sidebar").style.width = "0";
});




