<?php
//isoler ici dans des constantes les textes affichés sur le site
define('LOGO', 'Logo de la compagnie'); // Affiché si image non trouvée

define('MENU_ACCUEIL','Accueil');
define('TITRE','Gestion des hébergements festival de Cannes');

define('TEXTE_PAGE_404','Oops, la page demandée n\'existe pas !');
define('MESSAGE_ERREUR',"Une erreur s'est produite");
define('ERREUR_CONNECT_BDD','Erreur de connecxion à la base de données');
define('ERROR_BDD',"Une erreur s'est produite bdd");
define('ERREUR_QUERY_BDD',"Erreur d'accès à la base de données");
define('TEXTE_ERREUR_ID','L\'identifiant ou le mot de passe saisie est incorrect, 
faites retour pour réessayer');
define('LOGIN_EXISTE',"Vous voulez insérer un VIP qui possède déja un hébergement");
define('ETABL_EXISTE',"Désolé, un établissement du même nom a deja été inséré.");


define('TITRE_PAGE_ACCUEIL', 'Accueil');
define('PHRASE_PAGE_ACCUEIL', 'Bonjour, bienvenue sur notre site permettant la gestion des
hébergements pour le festival de Cannes !');
define('EXPLICATION_PAGE_ACCUEIL', 'Afin de vous authentifier, veuillez cocher votre profil dans
les cases suivantes, puis validez. ');
define('TITRE_PAGE_AUTHENTIFICATION', 'Authentification');
define('PHRASE_PAGE_AUTHENTIFICATION_STAFF', 'Bonjour, vous êtes un membre du staff.
Veuillez entrer votre identifiant (Nom puis Prénom) puis votre mot de passe afin d\'assigner 
un VIP à un hébergement.');
define('PHRASE_PAGE_AUTHENTIFICATION_GERANT', 'Bonjour, vous êtes un gérant d\'hebergement.
Veuillez entrer votre identifiant (Nom puis Prénom) puis votre mot de passe afin de consulter des 
informations sur vos herbegements ou bien d\'en entrer un nouveau.');
define('TITRE_PAGE_AUTH_CHECK', 'Authentification réussie. A vous de jouer ');
define('SUBMIT', "Valider");
define('IDENTIFIANT', "Identifiant (Nom puis Prénom) : ");
define('MDP', "Mot de passe : ");
define('LISTE_VIP', "Voici ci-dessous la liste des VIP qui n'ont pas d'hébergement (Cliquez sur une photo pour en selectionner un) :");
define('LISTE_JURY', "Liste des Jurys : ");
define('LISTE_MBFILM', "Liste des membres de film : ");
define('TITRE_DESCRIPTION', "Informations sur cette personne ");
define('PHRASE_REAL_FILM', "A résalisé le film :");
define('PHRASE_HOTEL_CORRESPONDANT', "Vous trouverez ci-dessous, une liste des hébergements
 auxquels vous pourrez assigner ce VIP ainsi que les caractéristiques de son séjour.");
 define('TEXTE_DATE', "Date de début du séjour");
 define('TEXTE_HOTEL', "Établisement");
 define('TEXTE_DUREE', "Entrez la durée du séjour (en nombre de jours)");
 define('PHRASE_DEJA_ASIGNE', "Le VIP que vous avez choisi a déja été assigné à l'établissement : ");
 define('LISTE_MBASSIGNE', "Voici ci-dessous la liste des VIP qui ont un hébergement 
 (Cliquez sur une photo pour en selectionner un) :");
 define('TITRE_SUCCES1', "L'assignation du VIP ");
 define('TITRE_SUCCES2', " à l'établissement ' ");
 define('TITRE_SUCCES3', " ' est réussie !");
 define('TITRE_SUCCES4', "Il y restera à partir du ");
 define('TITRE_SUCCES5', " et pour une durée de ");
 define('TITRE_SUCCES6', " jours.");
 define('TITRE_SUCCES7', "Faites retour pour continuer.");
 define('VIP_INEXISTANT', "Ce VIP n'existe pas, veuillez sélectionner un VIP valide. ");
 define('TITRE_SAISIE_ETABLISSEMENT', " Saisie des caractéristiques d'un de vos établissement");
 define('TITRE_LISTE_ETABLISSEMENT', "Liste de vos établissement déja saisis, sélectionnez en 
 un pour plus d'infos.");
 define('NO_LISTE', "Vous n'avez rentrer aucun établissement pour l'instant.");
 define('TITRE_SUCCES8', "L'ajout de votre ");
 define('TITRE_SUCCES9', " qui a pour nom ' ");
 define('TITRE_SUCCES11', "Il y restera à partir du ");
 define('TITRE_SUCCES12', "Si vous souhaitez avoir plus d'informations à propos de celui-ci, faite retour et actualisez la page pour pouvoir le sélecitonner..");
 define('TITRE_INFO_ETABL', "Vous trouverez ci dessous toutes les informations concernant votre ");