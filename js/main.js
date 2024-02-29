
function fetchContent () {

    idNb = Math.floor(Math.random() * 5) + 1;

    $.ajax({
        type: "POST",
        url: "updateContent.php",
        data: { id: idNb },
        success: function(response) {
            console.log("Nouveau contenu reçu : ", response);
            document.getElementById("content").innerHTML = response;
        },
        error: function(error) {
            console.error("Erreur AJAX:", error);
        }
    });

};

document.getElementById("btn").addEventListener("click", fetchContent);




/*

let newP = document.createElement("p");

async function getAsync() {
    const url = "https://api.chucknorris.io/jokes/random";
    const response = await fetch(url);
    const data = await response.json();
    console.log(data);
    content.innerText = data.value;
}

getAsync();

function eraseText () {
    content.innerText ="";
}

const btn = document.getElementById("btn");

btn.addEventListener ("click", () => {
    eraseText ();
    getAsync();
})*/
    