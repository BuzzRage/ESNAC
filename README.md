# esnac-cli - Éco-système de Services Numérique Alternatifs Communs (ex WebTools)

Ce dépôt fourni un éco-système de services numériques alternatifs communs. 

C'est un brouillon, il est à but pédagogique pour s'auto-former.


# Utilisation
  esnac-cli [SERVICE] [OPTIONS]
  esnac-cli --help
  esnac-cli --version

#Options:
  --delete, -d CONTAINER
    Stop et supprime le conteneur Docker CONTAINER

  --help, -h
    Affiche l'aide utilisateur

  --name, -n NAME
    Assigne le nom NAME au conteneur du service
    Needs: --run

  --run, -r CONTAINER
    Lance le conteneur CONTAINER

  --update, -u CONTAINER
    Redémarre le conteneur CONTAINER

  --verbose, -v
    Active le mode bavard (verbose)

  --help
    Show this help

  --version
    Show version number

#Arguments:
  SERVICE
    Le service avec lequel travailler

#Environment Variables:
  DOMAIN
    Set the default domain to "portal.poc"
    Default: portal.poc

  EMAIL
    Set the default email to "admin@portal.poc"
    Default: admin@portal.poc

#Examples:
  esnac-cli -h
  DOMAIN=chapeau.tu esnac-cli -r webtools


