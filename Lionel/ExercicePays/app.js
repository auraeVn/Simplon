//* /////// Affiche les infos d'un pays à partir de son nom

function displayPays (nomPays){
    for (let i = 0 ; i < countries.length ; i++)
    if (countries[i].countryName === nomPays){
      console.log(countries[i])
    }
  }
  console.log(displayPays("France"))
  
  //ou avec une boucle for of
  
  function displayPays (nomPays){
    for (let country of countries){
      if(country.countryName === nomPays){
        console.log(country)
      }
    }
  }
  console.log(displayPays("France"))
  
  //*  //////// Exercice phase 2  affiche les données d'un pays sous forme de message
  
  
  function displayPays (nomPays){
    for (let i = 0 ; i < countries.length ; i++)
    if (countries[i].countryName == nomPays){
      console.log("La capitale de " +  countries[i].countryName + " est " + countries[i].capital + ", sa devise est " + countries[i].currencyCode + " et sa population est " + countries[i].population)
    }
  }
  console.log(displayPays("France"))
  
  // ou avec une boucle for of
  
  function displayPays (nomPays){
    for (let country of countries)
    if (country.countryName == nomPays){
      console.log("La capitale de " +  country.countryName + " est " + country.capital + ", sa devise est " + country.currencyCode + " et sa population est " + country.population)
    }
  }
  console.log(displayPays("France"))
  
  //* ///////// Exercice phase 3 Affiche la liste de tous les pays appartenant à un continent donné 
  
  function displayContinent(nomContinent) { 
    const filteredCountries = countries.filter(function(country){
     return country.continentName === nomContinent;
  } )
  return filteredCountries                                             
  } 
  console.log(displayContinent("Asia"));
  
  // ou avec fonction fléchée
  
  function displayContinent(nomContinent) { 
  const filteredCountries = countries.filter(country => country.continentName === nomContinent)
  return filteredCountries                                             
  } 
  console.log(displayContinent("Asia"));
  
  
  
  //* phase 4 afficher population d'un pays :
  
  function population(nomPays){
    for (let i = 0 ; i < countries.length ; i++){
      if (countries[i].countryName === nomPays){
        console.log("La population de " + nomPays + " est de " + countries[i].population)
      }
    }
  }
  console.log(population("France"))
  
  // ou avec boucle for of 
  
  function population(nomPays){
    for (let country of countries){
      if (country.countryName === nomPays){
        console.log("La population de " + nomPays + " est de " + country.population)
      }
    }
  }
  console.log(population("France"))
  
  //* phase 5 afficher somme des populations des pays d'un continent 
  // J'ai utilisé volontairement les fonctions fléchées parcequ'après avoir regardé des tutos je trouve ça plus simple
  
  function totalPop(nomContinent) { 
     const filteredCountries = countries.filter(country => country.continentName === nomContinent)
     const totalPopulation = filteredCountries.reduce((acc, pays)=> acc + parseInt(pays.population), 0)
      console.log("Population totale de " + nomContinent + " : " + totalPopulation)                                     
  }
  console.log (totalPop("Europe"))
  
  
  //* Affiche le nom du continent le plus peuplé ainsi que sa population totale (celui la à revoir)
  
  function maxPopContinent(countries) {
    let maxPopulation = 0;
    let maxPopCont = {};
    countries.map(continent => {
      if (continent.population > maxPopulation) {
        maxPopulation = continent.population;
        maxPopCont = { name: continent.countryName, population: continent.population };
      }
    });
    return maxPopCont;
  }
  console.log(maxPopContinent(countries));