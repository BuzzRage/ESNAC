#====== Variables ===========#

if [[ -n "${args['service']:-}" ]]; then
    declare -g service=${args['service']}
else
    declare -g service="helloworld"
fi

declare -g verbose=false

declare -g CONTAINER_d=${args[--delete]}
declare -g NAME=${args[--name]}
declare -g CONTAINER_r=${args[--run]}
declare -g CONTAINER_u=${args[--update]}

declare -g ENV_FILE="$ENV_FILE"

declare -g WEBSRC="$(pwd)/services/Website/Sources"


if [[ -f $ENV_FILE ]]; then
    while IFS='=' read -r key value; do
        # ignorer les lignes vides ou commentées
        [[ -z "$key" || "$key" =~ ^[[:space:]]*# ]] && continue

        case "$key" in
          DOMAIN) declare -g DOMAIN="$value" ;;
          EMAIL)  declare -g EMAIL="$value"  ;;
          WEBSRC) declare -g WEBSRC="$value" ;;
        esac
    done < $ENV_FILE
fi

function run(){
  $verbose && show_env_config

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

