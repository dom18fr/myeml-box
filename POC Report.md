# MyEML - Note de POC

[https://github.com/dom18fr/myeml-box](https://github.com/dom18fr/myeml-box)

## 1 - Périmètre couvert

  * Environnement de dev Vagrant / Ansible (peu de provisionning, beaucoup d'étapes manuelles documentées)
  * Backoffice CDM
  * Notion d'arbre contextualisé, avec visualisation
  * 4 axes de contextualisaton : Campus, Program, Locale et Profile
  * Connecteur Drupal 8 : create, edit, unlink, delete, reuse, (clone)
  * Endpoint API REST Basique
  * Ébauche de config Drupal 8 (paragraphs, views + 1 type de contenu)
  * Appli front backend en Silex, front en React seulement bootstrapé
  * Tentative de connexion SSO SAML / ADFS sur pour le CDM

## 2 - Les succès

### 2.1 - Model EAV

Globalement le model EAV tient ses promesses dans le cadre de ce POC, il est facile d'y intégrer la représentation d'un noeud de notre arbre, facile d'en étendre les attributs et nous fourni un BO de base plutôt fonctionnel.

### 2.2 - Treeview

Nous avons eu recours à un composant react existant pour la représentation de l'arbre  
***react-sortable-tree*** : [https://github.com/fritz-c/react-sortable-tree](https://github.com/fritz-c/react-sortable-tree)

Intégré ici de manière assez basique (simple visualisation de l'arbre + intégratione boutons d'action), le composant en à sous la pédale :)  
On pourra facilement lui ajouter les fonctionnalité de réorganisations à la volée, customiser l'apparence des noeud pour faire apparaître leurs rôle, leur contexte etc ...

### 2.3 - Connecteur Drupal 8

L'idée etait d'utiliser Drupal comme un reservoir de contenus uniquement. Les notions de structures comme les menus et les taxonomies ne sont pas exploitées.

En revanche, on s'appuit très largement sur les formulaires de création de contenu en utilisant notament le module paragraphs et sur views pour lister et séléctionner des contenus.

Le connecteur consiste en un widget react, instancié sur un simple attribut texte de notre entité node côté CDM. C'est cet attribut texte qui portera une référence unique au contenu Drupal.  

Nous avons fait le choix d'une intégration de Drupal 8 en iframe, utilisant PostMessage en javascript pour la communication cross domain.  

Le widget expose des boutons d'actions, actifs ou non en fonction de l'action courante. Il permet de :

  * Créer un nouveau contenu Drupal et l'associer au noeud CDM
  * Editer un contenu Drupal precedemment associé au noeud CDM
  * Rompre le lien entre un contenu Drupal et un noeud CDM (le contenu Drupal n'est PAS supprimé)
  * Supprimer un contenu Drupal (de fait, le lien d'association sera rompu)
  * Réutiliser un contenu Drupal déjà associé à un autre noeud CDM

Pour éviter une double soumission de formulaire, les actions de soumission ne sont pas activées côté Drupal, c'est la soumission du formulaire CDM qui synchronise la soumission du formulaire Drupal.

Côté front, on imagine que ce sera bien Drupal qui construira les contenus (code html), une approche pure headless dans laquelle Drupal servirait des json à partir desquels un front construirait du html ne nous semble pas pertinente.

Un endpoint Drupal renvoyant du code HTML rendu (wrappé dans un json quand même) a été mis en place.

### 2.4 - Modèle arborescent et rôles des noeuds

La représentation déscriptive de toute l'application en un arbre multi contextualisé semble tout a fait possible.

Chaque noeud pourra représenter soit :

  * une page complète
  * une zone de page
  * un block

L'arbre contient un noeud root, qui represente la home.  
Une page donne lieu à une route côté front.  
Une page peut optionnelement apparaître dans le menu.  
Les noeuds enfants d'une page peuvent être des zones, des blocks ou d'autres pages.
Certains noeuds peuvent avoir des settings (url d'api, comportement etc ...), on les appellera alors des "widgets".  
Tous les noeuds peuvent optionnellement avoir un contenu éditorial associé.  

Le front recevra une liste des routes, et un arbre valide pour son contexte courant et sa route courante. A partir de la, chacuns des noeuds de l'arbre instanciera un composant auquel seront passés des props sur la base de :

  * sa hierarchie (la place du noeud dans l'arbre)
  * son rôle (page, zone ou block)
  * sa clée composant (identifiant plus spécifique que le rôle, utile pour le théming par exemple)
  * ses settings
  * son contenu éditorial

### 2.5 - API Plaform

La recente integration d'API platform au CDM nous permet de disposer d'une API REST native pour des besoins simples, mais également tres extensibles. On pourra sans problème y intégrer toute la logique de construction d'un arbre dans différents contexte, sur différentes routes pour le front.

## 3 - Les inachevés ou en questionnement

### 3.1 - Réalisation du front

Rien de ce côté là, les principe théoriques me semble toujours valides, mais rien, à part un silex qui sert une appli react quasi vide n'a été réalisé dans le cadre du POC.

### 3.2 - Solution serveur pour le front

En l'état c'est une appli silex (symfony light) qui repond sur le domain du front et sert l'appli react. Ce silex est peut être inutile, ce choix à été fait en raison d'un éventuel besoin de logique server side pour le SSO ou autre chose ...  
Mais aujourd'hui, on pourrait mettre un simle fichier index.html et le js compilé ça ferait pareil.

### 3.3 - Contexte commun pour simplifier la contrib

4 axes de contextualisation, un arbre unique. Les noeuds existent independament du contexte, leur attributs dépendent du contexte. Parmis leurs attributs, on trouve les enfants d'un noeud, qui sont d'autres noeuds.  
Ce n'est pas trivial ... À l'usage, il mesemble que l'on gagnerai en simplicité en mettant en scène une representation du type arbre "commun" + surcharge par contexte.
En gros : le contributeur créé des noeud dans un "contexte commun", puis ajoute des surcharges par contexte si besoin.  

Avec un peu de triche et de magie autour de ce "contexte commun", on arrivera à un workflow de contrib simplifié sans rien perdre de la puissance de modélisation.

### 3.4 - Gestion des titres edito

  * Les noeuds CDM ont un titre et il est contextualisé.
  * Les contenus Drupal ont un tire aussi et il n'est pas contextualisé.
  * Il faut afficher des titres en front.
  * Il faut afficher des titres de noeuds CDM en BO.
  * Il faut parfois afficher des titres de contenu Drupal en BO CDM.

Tout ça ensemble, ça fait des étincelles. Il faudra trancher quant à l'usage des titres, mais aucune solution ne sera parfaite :(

### 3.5 - Architechture des surcharges : Common => context => user

Comme évoqué en 3.3, la bonne solution c'est de raisonner en surcharges, contexte commun d'abord, puis contexte spécifique ensuite.  
Il faut aussi garder à l'esprit qu'un jour arriveront les surcharges par utilisateur, qui ne pourront pas être représenter par des contextes. L'archi proposée le permet, il faut juste avoir en tête que pour construire l'arbre définitif qui sera livré au front sur une route donnée, il faudra passer par ces 3 étapes : contexte commun => contexte courant => utilisateur courant.

### 3.6 - Validation des noeuds CDM

Certaines saisies n'ont pas de sens, par exemple un block avec une url, il faudra mettre en place de la validation.

### 3.7 - Widget webservice et contenu Drupal

**Front <=> CDM** PUIS **Front <=> Endpoint**  

VS  

**Front <=> CDM <=> Endpoint**  

=> impact le SSO et la stratégie de cache.

### 3.8 - Structure supérieures aux pages

Les noeuds CDM de role "page" representent-ils tout ce qui est visible ou seulement le "coeur" de page ?   
Si ils ne représentent que le coeur, comment représenter ce qui est autour avec la flexibilité suffisante ?  
 
Pour moi :  
  
  * temps 1 => fixe (json descriptif harcodé côté react)
  * temps 2 => modélisation d'arbres d'habillage (avec un noeuds root), chaque page reférence un arbre "d'habillage" a travers un attribut relationnel spécifique (même si ce serait tout a fait faisable avec l'attribut "children", dans ce cas la notion d'enfant serait contre intuitive)

### 3.9 - Backoffice CDM

Le BO natif du CDM contient une logique de construction de menu, une logique de navigation ajax, de soumission de formulaire ajax, de création d'entité "à la volée" dans des popin etc ... Le tout implémentée en Symfony - TWIG - Jquery, et pas forcéent simple à dompter ou même à bypasser sans compétence Symfony solide.

Il en resulte un certain nombre de petit dysfonctionnements, principalement dus à l'introductions de nouvelle notions implémentés en react dans le BO (treeview et connecteur drupal).

Pour résoudre ces problèmes, il y a 2 solutions : 

  * se battre avec le BO natifs et gagner :)
  * faire le choix de ne pas utiliser le BO natif, et construire un BO full react

Pour moi : 

Je suis partagé :p  
Mais en temps 1 la première solution semble plus raisonnable, mais il faudra peut être un peu d'assistance de @vchanot pour être efficace.

### 3.10 - SSO

Des tests de connexion au SSO ADFS de l'EM on été fait, mais rien de concluant pour l'instant. Rien de décourageant non plus :)

### 3.11 - POCShit

Par manque de temps, recherche d'efficacité, une bonne partie du code produit n'est pas très élégant ou ne respecte pas les bonnes pratiques. Le naming des variables, atributs, services, modules est discutable et parfois le reflet de changement de direction.  
Ce n'est qu'un POC quoi ...  

## 4 - Les limites rencontrées

Complexité conceptuelle (pour les devs et pour les contributeurs)  
Cocktail technologique => dev profile tout terrain

## 5 - Mantras

" *Le front n'est qu'un assemblage de composants. Les composants sont idiots et ignorants. Ils doivent le rester* "

" *Le CMS est un reservoir, sans structure ni contexte.* "  

" *Le cerveaux, c'est le CDM. Il a une représentation pour tout, et il décide de tout.* "  

" *Tout n'est qu'arbre, relations et noeuds* "  

" *Les pages ont une route, les zones ont une place, les blocks ne sont ni des pages, ni des zones* "  

" *Un noeud existe dans toutes les contextes, les valeurs de ses attributs peuvent ne pas exister dans tous les contextes* "

" *L'arbre ne représente pas tous les noeuds, mais seulement les descendants de son noeud root* "