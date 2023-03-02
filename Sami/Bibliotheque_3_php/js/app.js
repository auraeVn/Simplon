// Menu Dropdown

const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown => {
    const select = dropdown.querySelector('.select');
    const fleche = dropdown.querySelector('.fleche');
    const menu = dropdown.querySelector('.menu');
    const options = dropdown.querySelectorAll('.menu li');
    const selected = dropdown.querySelector('.selected');

    select.addEventListener('click', () => {
        select.classList.toggle('select-clicked');
        fleche.classList.toggle('fleche-rotate');
        menu.classList.toggle('menu-open');
    });

    options.forEach(option => {
        option.addEventListener('click', () => {
            select.classList.remove('select-clicked');
            fleche.classList.remove('fleche-rotate');
            menu.classList.remove('menu-open');
        });

    });
});


// Sécuriser le formulaire 

const forms = document.querySelectorAll('.formConnex');

forms.forEach(form => {
    const inputNom = document.querySelector('#nom');
    const inputPrenom = document.querySelector('#prenom');
    const inputTitre = document.querySelector('#titre');
    const errors = [];
    form.addEventListener("submit", function (event) {

        if (inputNom.value.length < 1 || inputNom.value.length > 30) {
            errors.push("Problème nom, le formulaire s'autodétruira dans 3.. 2.. 1.. !");

        } else if (inputPrenom.value.length < 2 || inputPrenom.value.length > 30) {
            errors.push("Problème prénom, le formulaire s'autodétruira dans 3.. 2.. 1.. !");

        } else if (inputTitre.value.length < 2 || inputTitre.value.length > 30) {
            errors.push("Problème titre, le formulaire s'autodétruira dans 3.. 2.. 1.. !");

        } if (errors.length > 0) {
            event.preventDefault();
        }
        console.log(errors);
    })
});


// API Openlibrary

//^ écoutez le on click et récupérer la valeur value avec etarget.value on click
//^ ensuite  ajouter fetch https://openlibrary.org/isbn/${value}.json
// et data etc et créer une div en dessous de la table et mettre dedans les données data

const table = document.querySelector('.divTableScreen');
const links = table.querySelectorAll('.isbn');

links.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault();
        const value = event.target.textContent;
        console.log(value);
        fetch(`https://openlibrary.org/isbn/${value}.json`)
            .then(response => response.json())
            .then(function (data) {
                
                const sectionSup = document.querySelector('section');
                if (sectionSup) {
                    sectionSup.remove(); // Supprimer l'élément précédemment affiché
                }
                const container = document.querySelector('.container');

                const section = document.createElement('section');
                section.className = "section";
                container.append(section);

                const h1 = document.createElement('h1');
                h1.className = "titre";
                section.append(h1);
                h1.append(data.title);

                const image = document.createElement('img');
                image.className = "image";
                image.src = `https://covers.openlibrary.org/b/isbn/${value}-M.jpg`
                section.append(image);

                const footer = document.querySelector('footer');
                container.append(footer);
            })
    });
})
    .catch(err => console.error(err));





