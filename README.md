# eco-citoyen

## Concept et public

Création d’un site permettant aux citoyens d’évaluer leur impact écologique. Le site vise les jeunes de **16 à 30 ans** qui cherchent à améliorer leur impact écologique.

## Équipe et répartition des tâches

| Personne | Rôle principal | Tâches | GitHub |
| --- | --- | --- | --- |
| Adam | Chef de projet / UX-UI | Organisation du projet, répartition des tâches, suivi de l’avancement, wireframes, design system | [Adam-Boussakour](https://github.com/Adam-Boussakour) |
| Mohamed | Designer / Contenu | Moodboard, identité visuelle, recherche de contenus, rédaction, aide à la conception des interfaces | [Moha-Mad-19](https://github.com/Moha-Mad-19) |
| Ensemble | Conception & validation | Brainstorming, choix graphiques, tests, corrections, préparation de la présentation finale | Adam et Mohamed |
| Professeur | Enseignant | Suivi pédagogique |  |


## Outils

- **WordPress**, installé en local.
- **GitHub**, pour le dépôt, les branches, les commits, les pull requests, les issues et le tableau Projects.
- **Visual Studio Code**, pour modifier les fichiers.

## Arborescence du thème enfant

```text
Projet-Digital/
├── .gitignore
├── README.md
├── style.css
├── functions.php
└── assets/
    ├── css/style.css
    ├── js/main.js
    └── img/.gitkeep
```

## Conventions

- Ne pas travailler directement dans `main`.
- Une tâche = une issue et une branche `feature/nom-de-la-tache`.
- Noms des branches en minuscules, sans espace ni accent.
- Messages de commits explicites en français, par exemple `Ajout de la section presentation`.
- Ouvrir une pull request vers `main`, avec une description des changements et des vérifications.
- L’autre membre relit et approuve avant la fusion. L’auteur ne valide pas lui-même sa PR.





## Atelier DFEF #3/4 — socle graphique et Accueil

Cette livraison porte sur la page Accueil uniquement. La page Mon impact reste à réaliser.

- `theme.json` : palette, typographies, espacements et tokens des composants.
- `assets/css/components/card.css` : cartes, grille, survol, focus et centrage de la dernière carte en tablette.
- `assets/css/components/hero.css` : introduction, bouton principal et image responsive.
- `assets/css/components/site-chrome.css` : en-tête, navigation, menu mobile et pied de page.
- `functions.php` : chargement des styles, des polices et du JavaScript.
- `patterns/eco-accueil-introduction.php` et `patterns/eco-etapes.php` : compositions réutilisables.
- `templates/eco-accueil.html` : modèle de l’Accueil sans titre automatique.
- `parts/eco-header.html` et `parts/eco-footer.html` : parties de modèle communes.
- `assets/img/accueil-velo.jpg` : image optimisée avec un texte alternatif dans la composition.
- `docs/fiche-technique.md` : choix techniques et cinq lignes de justification de l’atelier.

Voir les [instructions d’installation et de reproduction de l’Accueil](docs/installation-accueil.md).
La vérification responsive en 375, 768 et 1280 px a été signalée comme terminée par Adam ; les captures et la relecture de la pull request restent à joindre au dépôt ou à la remise.
