echo "# This file is located at 'src/root_command.sh'."
echo "# It contains the implementation for the 'esnac-cli' command."
echo "# The code you write here will be wrapped by a function named 'root_command()'."
echo "# Feel free to edit this file; your changes will persist when regenerating."
inspect_args

#====== Variables ===========#

declare -g SRC=$(pwd)/services/Website/Sources

if [[ -n "${args['service']:-}" ]]; then
    declare -g service=${args['service']}
else
    declare -g service="helloworld"
fi

declare -g CONTAINER_d=${args[--delete]}
declare -g NAME=${args[--name]}
declare -g CONTAINER_r=${args[--run]}
declare -g CONTAINER_u=${args[--update]}

# Laisser l'utilisateur choisir les variables d'environnements ( voir bashly ou .env )
declare -g DOMAIN="$DEFAULT_DOMAIN"
declare -g EMAIL="$DEFAULT_EMAIL"
declare -g WEBSRC="$DEFAULT_WEBSRC"


function run(){
  show_env_config
  delete services-traefik-1
  delete services-webtools-1
  set_domain
  docker compose -f services/docker-compose.yml up -d
}

function delete(){
  docker stop $1; docker rm $1;
  reset_domain
}

function exist(){
  docker ps --format '{{.Names}}' | grep -q "$1" && return 0 || return 1
}

if !(systemctl -q is-active docker); then
  echo "Veuillez démarrer le service Docker"
  exit 1
fi


# Partie à revoir complètement

if [[ ${args[--verbose]} ]]; then
    verbose=true
else
    verbose=false
fi

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

