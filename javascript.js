let JsonArray = []
let wpJSON;
let myJson;
let dest = document.querySelector(".data-container");
let eventFilter = "Menu";
/*document.addEventListener("DOMContentLoaded", hentJson);
produktFilter = "alle";
document.querySelectorAll(".menu-item").forEach(knap => {
    knap.addEventListener("click", filtrering)
});

function filtrering() {
    dest.textContent = "";
    madFilter = this.getAttribute("data-kategori");
    visProdukter();
}*/

async function hentJson() {

    let myJsonRings = await fetch("http://juliehbjerning.dk/kea/2.%20semestereksamen/Eksamen/wordpress/wp-json/acf/v2/rings");
    wpJSON = await myJsonRings.json();
    JsonArray = wpJSON;


    let myJsonPictures = await fetch("http://juliehbjerning.dk/kea/2.%20semestereksamen/Eksamen/wordpress/wp-json/acf/v2/pictures");
    wpJSON = await myJsonPictures.json();
    wpJSON.forEach(event => {
        JsonArray.push(event)
    })
    console.log(JsonArray)
    visJson();
}

function visJson() {
    let myTemplate = document.querySelector(".data-template");

    JsonArray.forEach(post => {
                let klon = myTemplate.cloneNode(true).content;
                klon.querySelector(".data-navn").textContent = post.acf.navn;
                klon.querySelector(".data-billede").src = post.acf.billede;
                klon.querySelector(".data-pris").textContent = post.acf.pris + ",-";
                klon.querySelector(".data-beskrivelse").textContent = post.acf.beskrivelse;
                /*     function visProdukter() {
                         let temp = document.querySelector(".data-template");
                         document.querySelector("h1").textContent = produktFilter;

                         JsonArray.forEach(post => {
                             if (produker.kategori == produktFilter || produktFilter == "alle") {
                                 let klon = temp.cloneNode(true).content;
                                 klon.querySelector("data-billede").src = post.acf.billede;
                                 klon.querySelector("data-billede").addEventListener("click", () => {
                                     visModal(produkter);
                                 });
                                 klon.querySelector("navn").textContent = post.acf.navn;
                                 klon.querySelector(".data-beskrivelse").textContent = post.acf.beskrivelse;
                                 klon.querySelector(".data-pris").textContent = post.acf.pris;
                                 dest.appendChild(klon);
                             }
                         })
                     }

                     function visModal(produkter) {
                         modal.classList.add("vis");
                         modal.querySelector(".modal-navn").textContent = post.acf.navn;
                         modal.querySelector(".modal-billede").src = post.acf.billede;
                         modal.querySelector(".data-beskrivelse").textContent = = post.acf.beskrivelse;
                         modal.querySelector("button").addEventListener("click", skjulModal);
                     }

                     function skjulModal() {
                         modal.classList.remove("vis");
                         window.scrollTo(0);
                     }*/
