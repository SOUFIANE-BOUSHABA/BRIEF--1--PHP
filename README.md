# YouContact - Contact Management App

YouContact is a web application for managing your contacts. Users can create accounts, log in, and maintain a private list of contacts.

## User Stories

En tant qu'utilisateur, je veux voir une barre de navigation horizontale en haut de la page avec le titre du site à gauche et un bouton de connexion à droite.
En tant qu'utilisateur connecté, je veux que le bouton de connexion soit remplacé par mon nom d'utilisateur qui renvoie à la page Profil, Contacts et Déconnexion.
En tant qu'utilisateur, je veux voir un message d'accueil sur la page avec deux liens d'appel à l'action : S'inscrire et Se connecter.
En tant qu'utilisateur, je veux saisir mon nom d'utilisateur et mon mot de passe dans un formulaire de connexion pour me connecter.
En tant qu'utilisateur, je veux être redirigé vers la page Profil après une connexion réussie.
En tant qu'utilisateur, je veux avoir un lien d'appel à l'action "S'inscrire" pour accéder à la page d'inscription.
En tant qu'utilisateur, je veux remplir un formulaire d'inscription avec mon nom d'utilisateur, mot de passe et vérification du mot de passe pour m'inscrire.
En tant qu'utilisateur, je veux voir les erreurs affichées sous les champs correspondants si le formulaire contient des données incorrectes.
En tant qu'utilisateur, je veux être redirigé vers la page Profil après une inscription réussie.
En tant qu'utilisateur, je veux voir une salutation et les détails de mon profil (nom d'utilisateur, date d'inscription, heure de connexion) sur cette page.
En tant qu'utilisateur, je veux que mon nom d'utilisateur et ma date d'inscription soient stockés dans la base de données, et mon heure de connexion soit stockée dans la session actuelle.
En tant qu'utilisateur, je veux voir une liste de contacts avec des liens Modifier et Supprimer pour chaque enregistrement.
En tant qu'utilisateur, je veux pouvoir ajouter/modifier des contacts en utilisant un formulaire avec des champs nom, téléphone, email et adresse.
En tant qu'utilisateur, je veux voir des messages d'erreur sous les champs du formulaire pour des données invalides.
En tant qu'utilisateur, je veux que le titre par défaut de la page soit "Liste des contacts".
En tant qu'utilisateur, je veux être redirigé vers la page Profil si j'accède à la page d'accueil, de connexion ou d'inscription étant déjà authentifié.
​

## Pages

### Home Page

The home page features a horizontal navigation bar, a welcome message, and two call-to-action links: Sign Up and Log In.

### Login Page

Users can log in using a simple form with fields for username and password. After successful login, users are redirected to the Profile page.

### Registration Page

The registration page includes a form with fields for username, password, and password verification. Error messages are displayed for invalid data. After successful registration, users are redirected to the Profile page.

### Profile Page

The profile page displays a greeting, user profile details, and session login time. Usernames and registration dates are stored in the database, and login time is stored in the current session.

### Contacts Page

The contacts page contains a list of contacts with links to Edit and Delete each entry. A form for adding/modifying contacts includes fields for name, phone, email, and address. Error messages for invalid data are displayed. Authenticated users accessing the home, login, or registration pages are redirected to the Profile page.

The default page title is "List of Contacts."

## link


http://brifone-youcode.free.nf/inscription.php
