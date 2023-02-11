const contenus = [
    {
        titres: "Vue JS",
        intros: `Les Framework ont été créés pour structurer et developper un site, créer une organisation claire entre les différents langages au sein d'une page web.
        Vue.js est un framework JavaScript open-source pour le développement d'applications web. Il est conçu pour être simple, léger et flexible, et pour offrir une alternative aux frameworks plus lourds comme Angular et React.`,
        corpus: `1 - Vue.js est particulièrement accessible. Il est simple et facile à apprendre pour les développeurs débutants car il permet de simplifier le développement. Sa prise en main et sa logique sont rapides à comprendre.
        <br><br>
        2 - Malgré sa facilité d'utilisation, il est très performant et flexible. Il peut être utilisé pour des projets de petite à moyenne envergure. Less applications conçues avec Vue sont ultras légères. C'est un "progressive framework", c'est à dire qu'on peut l'utiliser sur l'entièreté du site ou sur juste une partie. Le framework s’exécute directement depuis le navigateur ce qui facilite le processus de test.
        <br><br>
        3 - Vue.js a été créé en 2014 par Evan You et est 100% indépendant contrairement à React créé par facebook ou angular créé par google. Il faut cependant noter qu'Evan You a créé Vue.js alors qu’il travaillait chez Google. Il est donc sur certains points similaire à Angular, le framework JavaScript de Google.
        <br><br>
        4 -  C'est un projet open-source indépendant développé par la communauté, ce qui signifie que les développeurs peuvent y participer et contribuer à son développement. Il n'est donc pas influencé par les priorités et les intérêts d'une entreprise spécifique. C'est un avantage pour les développeurs qui cherchent à utiliser un framework stable et fiable qui ne dépend pas de la stratégie commerciale d'une entreprise. 
        <br><br>
        5 - Vue.js a une documentation détaillée et une grande communauté de développeurs. Il est polyvalent et peut intégrer beaucoup de librairies et frameworks. 
        <br><br>
        6 - Vue.js est en constante évolution, avec des mises à jour fréquentes et des améliorations pour les performances et les fonctionnalités. `,

        
    },
    {
        titres: "React",
        intros: `React est une framework JavaScript qui a été crée en 2013 et actuellement l'une des plus utilisées parmi les librairies front-end. Elle peut être utilisée pour créer des applications web, des applications mobiles et des applications hybrides. On peut retrouver plusieurs morceaux de code permettant la réalisation de plateforme web de façon plus rapide. 
        Bien que React soit une librairie JS et non un langage à part entière, elle reste tout de même très utilisée dans le développement web.`,
        corpus: `Avantages
        <br>
        - La création facile d'applications dynamiques: React facilite la création d'applications web dynamiques parce qu'il nécessite moins de codage et offre plus de fonctionnalités, contrairement à JavaScript, où le codage devient souvent complexe très rapidement.
        <br><br>
        - React utilise le DOM virtuel, créant ainsi des applications web plus rapidement encore une fois.
        <br><br>
        - Les composants sont les éléments constitutifs de toute application React, et une seule application se compose généralement de plusieurs composants. Ces composants ont leur logique et leurs contrôles, et ils peuvent être réutilisés dans toute l'application, ce qui réduit considérablement le temps de développement de l'application.
        <br><br>
        - React suit un flux de données unidirectionnel. Cela signifie que lors de la conception d'une application React, les développeurs imbriquent souvent les composants enfants dans les composants parents. Comme les données circulent dans une seule direction, il devient plus facile de déboguer les erreurs et de savoir où se situe un problème dans une application. 
        <br><br>
        - Il peut être utilisé pour le développement d'applications web et mobiles : Nous savons déjà que React est utilisé pour le développement d'applications web, mais ce n'est pas tout ce qu'il peut faire. Il existe une framework appelée React Native, dérivée de React lui-même, qui est extrêmement populaire et qui est utilisée pour créer des applications mobiles. Donc, en réalité, React peut être utilisé pour créer des applications web et mobiles.
        <br><br>
        Inconvénients
        <br>
        - La courbe d'apprentissage est assez raide pour les développeurs débutants.
        <br><br>
        - Les performances peuvent être lentes si la mise en œuvre de React est mal faite.
        <br><br>
        - React ne fournit pas de solution de niveau supérieur pour construire des composants complexes.
        <br><br>
        - Les mises à jour fréquentes peuvent entraîner des incohérences et des problèmes de compatibilité avec d'autres bibliothèques.
        <br><br>
        - React ne fournit pas de fonctionnalité de routage intégrée et nécessite une bibliothèque tierce pour le faire.
        <br><br>
        - React peut être difficile à tester car il ne fournit pas de fonctionnalités de test intégrées.
        <br><br>

        Analyse
        <br>
        Pour conclure, la framework React est une librairie avec une philosophie "composant". C'est à dire qu'une page n'est plus vu comme une page mais comme un ensemble de composant. Par conséquent, du côté utilisateur, si une portion de la page web (donc un composant) est amenée à être chargée, c'est uniquement cette partie là qui le sera et non la page entière. 
        Ensuite du côté développeur, l'aspect le plus pratique pour moi c'est la réusabilité du composant. On n'a donc pas besoin de recoder quelque chose qui existe déjà. On en déduit alors qu'on peut avoir un gain de temps très conséquent. De plus, la possibilité d'utiliser React Native  pour créer des applications mobiles interactives est réel avantage comparé à d'autres framework. `,
    },
    {
        titres: "Svelte",
        intros:`Svelte est un framework JavaScript pour développer des applications web interactives. 
        C'est est un outil de développement d'applications web qui se concentre sur la performance et la simplicité. 
        Il diffère des autres frameworks en générant du code HTML, CSS et JavaScript lors de la compilation 
        au lieu de gérer le rendu via une virtual DOM. 
        Cela signifie que les applications Svelte sont plus rapides 
        et consomment moins de ressources que les applications développées avec d'autres frameworks. 
        De plus, Svelte est facile à apprendre et à utiliser pour les développeurs débutants et expérimentés.`,
        corpus:`Les avantages de Svelte:
        <br>
        - Performance améliorée, Svelte génère du code HTML, CSS et JavaScript 
          c'est un compilateur qui générent moins de ressources que les applications développées avec d'autres frameworks.
          <br><br>
        - Simplicité: Svelte a une syntaxe simple et intuitive, ce qui facilite la compréhension et la maintenance du code.
        <br><br>
        - Taille réduite: Les applications Svelte sont généralement plus petites en termes de taille de  code que les applications développées avec d'autres frameworks, 
          ce qui signifie qu'elles se chargent plus rapidement.
          <br><br>
        Les inconvénients de Svelte:
        <br>
        - Moins de flexibilité: Svelte ne fournit pas autant de fonctionnalités que d'autres frameworks, 
          ce qui peut rendre plus difficile la résolution de certains problèmes.
          <br><br>
        - Communauté plus petite: La communauté Svelte est plus petite que celle de certains autres frameworks populaires, 
          ce qui signifie qu'il peut être plus difficile de trouver de l'aide en cas de besoin.
          <br><br>
        - Moins de documentation: La documentation de Svelte est encore en développement et peut ne pas être aussi complète que celle de certains autres frameworks.
        <br><br>
        
          Pour conclure Svelte est donc un framework JavaScript pour développer des applications web. 
        Il se distingue par son approche, ce n'est pas tellement une librairie mais un compilateur 
        qui permet une performance accrue par rapport à d'autres frameworks basés sur des modèles de rendu en temps réel. 
        De plus, Svelte serait très facile à apprendre pour les développeurs expérimentés en JavaScript, 
        car il utilise un syntaxe proche de JavaScript standard. 
        Cependant, Svelte est encore relativement nouveau et peut ne pas avoir la même quantité de ressources et de communauté disponibles que d'autres frameworks plus établis. 
        En général, Svelte est une bonne option pour les projets de petite à moyenne envergure, ou pour ceux qui cherchent une expérience de développement plus légère et rapide.
        On crée un fichier app.svelte la ou y inscrit notre code java scripte on est plus obligé de manipuler le DOM c'est le framework qui va s'en charger.`,
    },
    {
        titres: "Angular",
        intros:`Angular est un Framework open-source développé par Google pour créer des applications web.
        Il est construit sur le moteur de rendu JavaScript, ce qui le rend compatible avec un grand nombre de navigateurs.`,
        corpus:`1. Angular utilise le langage de programmation Type Script, qui offre des fonctionnalités telles que la vérification de type statique et la mise en œuvre de fonctionnalités orientées objet.
        <br><br>
        3.	Angular est basé sur le modèle de composant, ce qui signifie qu'une application Angular est divisée en composants distincts, chacun étant responsable de gérer une partie spécifique de l'interface utilisateur.
            Les composants peuvent être réutilisés à travers l'application, ce qui permet une maintenance plus facile et une meilleure organisation du code.
            <br><br>
        4.	Angular fournit une gamme complète d'outils pour développer des applications riches en fonctionnalités, notamment des services pour la liaison de données, la validation de formulaire, la navigation, les animations, etc.
            Il offre également une large sélection de bibliothèques tierces pour étendre ses fonctionnalités.
            <br><br>
        5.	Angular a été conçu pour être testable, avec des outils intégrés pour les tests unitaires et d'intégration.
            Cela permet de garantir la qualité du code et d'éviter les bogues coûteux à corriger plus tard dans le cycle de développement.
            <br><br>
        6.	Angular est utilisé pour développer des applications web single-page, offrant une expérience utilisateur fluide et dynamique sans avoir besoin de recharger complètement la page.
            Cela accélère le temps de réponse de l'application et améliore l'expérience utilisateur globale.
            <br><br>
        7.	Angular utilise un système de modification de modèle basé sur la réactivité, ce qui signifie que lorsqu'une donnée de modèle change, l'interface utilisateur est automatiquement mise à jour pour refléter ces modifications.
            <br><br>
        8.	Angular fournit une gamme complète d'outils pour optimiser les performances, notamment une gestion avancée du change détection, une prise en charge des changements à partir de bout en bout et une stratégie de mise en cache efficace.
            <br><br>
        9.	Angular propose un environnement de développement productif avec un CLI intégré pour générer rapidement des composants, des pages et des services, ainsi qu'une gamme d'outils pour faciliter le débogage et la mise au point.
            <br><br>
        10.	Angular est largement adopté par la communauté de développeurs web et bénéficie d'une forte présence en ligne avec de nombreuses ressources en ligne telles que des tutoriels, des forums et des bibliothèques de composants tierces.
            Cela signifie que vous avez accès à une aide rapide et efficace pour tout problème que vous pourriez rencontrer lors du développement d'une application Angular.
        `,
    }
];

