// HAMBURGER //

const hamburger = document.querySelector(".hamburger");
const navbar = document.querySelector("#menu");
const dropdown = document.querySelector("#nav_li");
hamburger.onclick = () => {
    hamburger.classList.toggle("open");
    navbar.classList.toggle("slide");
    // dropdown.classList.add("dropright");
}



// API // 

const table = document.querySelector('.bg_table');
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
                const container = document.querySelector('.containerApi');

                const section = document.createElement('section');
                section.className = "sectionApi";
                container.append(section);

                const h1 = document.createElement('h1');
                h1.className = "titreApi";
                section.append(h1);
                h1.append(data.title);

                const image = document.createElement('img');
                image.className = "image";
                image.src = `https://covers.openlibrary.org/b/isbn/${value}-M.jpg`
                section.append(image);

            })
    });
})
    .catch(err => console.error(err));
