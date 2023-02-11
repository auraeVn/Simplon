
// créer un id pour chaque élement du tableau contenus
contenus.forEach((item, i) => {
    item.id = i + 1;
  });


// selectionne la balise index.html <ul> avec id #myTab et ajoute les élements du tableau "contenus" en bouclant sur ce tableau
const ulNav = document.querySelector('#myTab');
let first = true;
for (let contenu of contenus) {
    const htmlContent = `
    <li class="nav-item col col-md-3 col-lg-3" role="presentation">
        <a class="nav-link ${first ? "active" : ""}" id="home-tab" data-toggle="tab" href="#${contenu.id}" type="button" role="tab"
            aria-controls="home-tab-pane" aria-selected="true">${contenu.titres} </a>
    </li>
    `;
    first = false;
    ulNav.innerHTML += htmlContent;
}

// selectionne la balise index.html <div> avec l'id 'myTabContent' et ajoute les éléments du tableau "contenus" en bouclant sur ce tableau
const divContenu = document.querySelector('#myTabContent');
let first2 = true;
for (let contenu of contenus) {

    const htmlContent = `
    <div class="tab-pane fade ${first2 ? "active show" : ""} contenuIntro" id="${contenu.id}" role="tabpanel" aria-labelledby="home-tab" tabindex="0">${contenu.intros}<br><br>
    ${contenu.corpus}</div>`;

    divContenu.innerHTML += htmlContent;
    first2 = false;

}



// justifie le texte de chaque element avec la class 'contenuIntro'
const articles = document.querySelectorAll(".contenuIntro");
for(element of articles){
    element.style.textAlign = "justify";
}






{/* <nav>
<ul class="nav nav-tabs" id="myTab" role="tablist">

    <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#menu" type="button" role="tab"
            aria-controls="home-tab-pane" aria-selected="true">Home</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#menu1" type="button" role="tab"
            aria-controls="profile-tab-pane" aria-selected="false">Profile</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#menu2" type="button" role="tab"
            aria-controls="contact-tab-pane" aria-selected="false">Contact</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#menu3" type="button" role="tab"
            aria-controls="contact-tab-pane" aria-selected="false">Menu 3</a>
    </li>
    <li class="nav-item" role="presentation">
        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#menu4" type="button" role="tab"
            aria-controls="contact-tab-pane" aria-selected="false">Contact</a>
    </li>

</ul>
</nav>

<div class="tab-content" id="myTabContent">

<div class="tab-pane fade show active" id="menu" role="tabpanel" aria-labelledby="home-tab" tabindex="0">tab1
</div>
    <div class="tab-pane fade show " id="menu1" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
        Menu 1</div>
    <div class="tab-pane fade show " id="menu2" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
        Menu 2</div>
    <div class="tab-pane fade show " id="menu3" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        Menu 3</div>
    <div class="tab-pane fade show " id="menu4" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
        Menu 4</div>

</div> */}