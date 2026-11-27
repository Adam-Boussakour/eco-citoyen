# Reconstituer l’Accueil Éco-citoyen

Cette version de l’atelier DFEF #3/4 porte sur le socle graphique et la page Accueil uniquement. La page Mon impact n’est pas produite dans cette livraison.

## Installer le thème enfant

1. Installer le thème parent Twenty Twenty-Five.
2. Placer les fichiers de ce dépôt dans le dossier du thème enfant sous `wp-content/themes/`, puis activer ce thème enfant.
3. Dans Gutenberg, créer ou ouvrir la page Accueil et sélectionner le modèle **Accueil Éco-citoyen — sans titre automatique**.
4. Insérer les compositions **Éco-citoyen — Accueil : introduction** et **Éco-citoyen — Comment ça marche ?** depuis l’outil d’insertion des compositions.
5. Enregistrer la page et la définir comme page d’accueil statique dans **Réglages > Lecture**.

Les compositions sont enregistrées par les fichiers PHP du dossier `patterns/`. Le modèle `templates/eco-accueil.html` affiche le contenu de la page et les parties de modèle `parts/eco-header.html` et `parts/eco-footer.html`.

## Contenu et personnalisation

- Les tokens sont déclarés dans `theme.json`.
- Les styles des cartes, de l’introduction et de la structure commune sont dans `assets/css/components/`.
- L’image `assets/img/accueil-velo.jpg` est livrée avec le thème. La composition lui associe un texte alternatif explicite.
- Les textes et les cartes insérés restent modifiables dans Gutenberg.
- Les liens vers Impact, Conseils, Défis, Progrès et Compte préparent la navigation du projet ; leurs destinations ne sont pas toutes réalisées dans cette livraison.

Les fichiers d’un thème ne contiennent pas automatiquement les pages, les compositions synchronisées ni les personnalisations enregistrées dans la base de données de WordPress. Les compositions livrées permettent de recréer la structure prévue sans importer une base de données contenant les comptes du site local. Une composition déjà insérée dans une page ne se met pas à jour automatiquement quand son fichier PHP change.

## Vérification et remise

- L’affichage en 375, 768 et 1280 px et les deux retouches visuelles ont été signalés comme terminés par Adam. Cette préparation de fichiers ne constitue pas un nouveau test dans le navigateur.
- Vérifier les liens, le menu mobile et le focus clavier après installation sur un autre site.
- Joindre les captures mobile et desktop de l’Accueil à la remise.
- Faire relire la pull request par le binôme avant fusion.

Le devoir complet demande deux pages et quatre captures. Cette livraison couvre uniquement l’Accueil, selon le périmètre retenu.
