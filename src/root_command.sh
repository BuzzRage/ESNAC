echo "# This file is located at 'src/root_command.sh'."
echo "# It contains the implementation for the 'esnac-cli' command."
echo "# The code you write here will be wrapped by a function named 'root_command()'."
echo "# Feel free to edit this file; your changes will persist when regenerating."
inspect_args


if [[ -n "${args['service']:-}" ]]; then
    declare -g service=${args['service']}
else
    declare -g service="helloworld"
fi

declare -g CONTAINER_d=${args[--delete]}
declare -g NAME=${args[--name]}
declare -g CONTAINER_r=${args[--run]}
declare -g CONTAINER_u=${args[--update]}

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
  if [ ! exist $1 ]; then
    docker run --name $1 -d -p 8081:80 --mount type=bind,source="$SRC",target=/var/www/html php:apache
  else
    echo "$1 already exist"
  fi
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



if [[ ${args[--verbose]} ]]; then
    verbose=true
else
    verbose=false
fi

log "$item $file $selected_key"

if [[ ${args[--delete]} ]]; then
  delete "$CONTAINER_d"
  exit 0
fi

if [[ ${args[--help]} ]]; then
    show_usage
    exit 0
fi

if [[ ${args[--run]} ]]; then
    run "$CONTAINER_r"
    exit 0
fi

if [[ ${args[--update]} ]]; then
    delete "$CONTAINER_u"
    $0 "-r $CONTAINER_u"
    exit 0
fi

if [[ ${args[--name]} ]]; then
    run "$NAME"
    exit 0
fi

