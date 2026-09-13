# Configuration Handlers
#
# Ce fichier se charge de gérer les fichiers de configurations

function show_env_config(){
  echo "Used environment variables (from .env.website): "
  echo "$(grep 'DOMAIN' .env.website)"
  echo "$(grep 'EMAIL' .env.website)"
  echo "$(grep 'WEBSRC' .env.website)"

  echo "Used environment variables (from runtime): "
  echo "DOMAIN=$DOMAIN"
  echo "EMAIL=$EMAIL"
  echo "WEBSRC=$WEBSRC"
}

function set_domain(){
  cp /etc/hosts "/etc/hosts-$(date +%Y-%m-%d).backup"
  echo "127.0.0.2 $DOMAIN" >> /etc/hosts
}

function reset_domain(){
  sed -i "/$DOMAIN/d" /etc/hosts
}
