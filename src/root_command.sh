inspect_args

#====== Variables ===========#

if [[ -n "${args['service']:-}" ]]; then
    declare -g service=${args['service']}
else
    declare -g service="helloworld"
fi

declare -g CONTAINER_d=${args[--delete]}
declare -g NAME=${args[--name]}
declare -g CONTAINER_r=${args[--run]}
declare -g CONTAINER_u=${args[--update]}

declare -g DOMAIN="$DOMAIN"
declare -g EMAIL="$EMAIL"

declare -g WEBSRC="$(pwd)/services/Website/Sources"


function run(){
  show_env_config
  docker compose -f services/docker-compose.yml down

  set_domain
  docker compose -f services/docker-compose.yml up -d
}

function delete(){
  docker rm -f "$1" || true
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
# Une partie/commande globale ( docker-compose général)
# Une partie/commande à l'échelle d'un conteneur

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
    esnac_cli_usage
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

