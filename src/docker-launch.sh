#!/bin/bash

function show_usage(){
  printf "Utilisation: $0 [options [paramètres]]\n" 
  printf "\n"
  printf "\"WebTools\" est le nom par défaut.\n\n"
  printf "Options:\n"
  printf "  -r|--run                       : Lance le site web dans un conteneur Docker.\n"
  printf "  -n|--name [nom du conteneur]   : Assigne un nom au conteneur.\n"
  printf "  -u|--update [nom du conteneur] : Redémarre le conteneur pour actualiser les fichiers du site.\n"
  printf "  -d|--delete [nom du conteneur] : Stop et supprime le conteneur Docker.\n"
  printf "  -h|--help                      : Affiche le menu d'aide.\n"
  
  return 0  
}

function run(){
  docker run --name $1 -d -p 8081:80 --mount type=bind,source="$SRC",target=/var/www/html php:apache
}

function delete(){
  docker stop $1; docker rm $1;
}

function exist(){
  docker ps --format '{{.Names}}' | grep -q "$1" && return 0 || return 1
}

if !(systemctl -q is-active docker)
	then
	echo "Veuillez démarrer le service Docker"
	exit 1
fi

SRC=$(pwd)/Sources
DNAME="WebTools"

while [ ! -z "$1" ]; do
    case "$1" in
      -h|--help)
        show_usage
        ;;
      -r|--run)
        run "$DNAME"
        ;;
      -n|--name)
        NAME="$2"
        [[ $NAME =~ ^- ]] && echo "$NAME n'est pas un nom correct pour -n|--name" && exit 1
        run "$2"
        shift
        ;;
      -u|--update)
        if [ -z "$2" ];then
            delete "$DNAME"
            $0 "-r"
        else
            NAME="$2"
            [[ $NAME =~ ^- ]] && echo "$NAME n'est pas un nom correct pour -u|--update" && exit 1
            `exist "$NAME"` && inlist=yes || inlist=no
            if [ "$inlist" == "yes" ]; then
                delete "$NAME"
                $0 "-n" "$NAME"
                shift
            else
                echo "Aucun conteneur lancé ne s'apppelle $NAME"
                exit 1
            fi
        fi
        ;;
      -d|--delete)
        if [ -z "$2" ];then
            delete "$DNAME"
        else
            NAME="$2"
            [[ $NAME =~ ^- ]] && echo "$NAME n'est pas un nom correct pour -u|--update" && exit 1
            `exist "$NAME"` && inlist=yes || inlist=no
            if [ "$inlist" == "yes" ]; then
                delete "$NAME"
                shift
            else
                echo "Aucun conteneur lancé ne s'apppelle $NAME"
                exit 1
            fi
        fi
        ;;
      *)
        echo "Commande $1 inconnue."
        show_usage
    esac
    shift
done
