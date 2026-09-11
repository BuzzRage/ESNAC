# WebTools

Ceci est un site personnel. Je compte m'en servir à but pédagogique pour me former,
pour essayer des choses, pour construire mes propres outils etc...


# Launcher
  Utilisation:
  ```
  ./docker-launch.sh [options [paramètres]]
  ```
  
  Nom par défaut: "WebTools".
  
  Options:
  * `-r|--run` - Lance le site web dans un conteneur Docker.
  * `-n|--name [nom du conteneur]` - Assigne un nom au conteneur.
  * `-u|--update [nom du conteneur]` - Redémarre le conteneur pour actualiser les fichiers du site.
  * `-d|--delete [nom du conteneur]` - Stop et supprime le conteneur Docker.
  * `-h|--help`- Affiche le menu d'aide.


# TODO
- Ajouter d'autres types de hashs
- Faire une page centralisant les flux RSS suivis
- Faire des publications (nécessite BDD ? )
- Toggle affichage homemade/bootstrap/lowtech (dithering et autres)
- Clicker Game en JS ?
- Faire un rendu de Markdown (in: txt format Markdown; out: Markdown avec CSS)
- Ajouter page de fretboards pour travailler des gammes
- Convertissor: 
  - 0xdb04 donne 219 4 alors que 56068 donne 0xdb04 (problème des caractères espaces)
- WIKAY - What I Know About You: 
  - Faire page affichant toutes les infos du client (pour sensibiliser les gens sur les infos qu'il est possible d'obtenir)
  - Faire une requête geotool pour localiser le client
  - Tenter de calculer son [empreinte navigateur](https://www.comparitech.com/blog/vpn-privacy/what-is-browser-fingerprinting-how-to-protect-yourself/)
  - Etudier les infos intéressantes des cookies

