# Configuration Handlers
#
# Ce fichier se charge de gérer les fichiers de configurations

function show_env_config(){
  echo "$(yellow "Inspect_args output"): "
  inspect_args


  echo "$(yellow "Used environment variables (from $ENV_FILE)"): "
  echo "$(grep 'DOMAIN' $ENV_FILE)"
  echo "$(grep 'EMAIL' $ENV_FILE)"
  echo "$(grep 'WEBSRC' $ENV_FILE)"

  echo "$(yellow "Used environment variables (from runtime)"): "
  echo "DOMAIN=$DOMAIN"
  echo "EMAIL=$EMAIL"
  echo "WEBSRC=$WEBSRC"
}

function set_domain(){
  cp $ENV_FILE .env.run   # Copie du fichier utilisateur $ENV_FILE en un .env.run utilisable par les docker-compose.yml
  cp /etc/hosts "./backups/hosts-$(date +%Y-%m-%d).backup"
  echo "127.0.0.2 $DOMAIN monitor.$DOMAIN" >> /etc/hosts
}

function reset_domain(){
  sed -i "/$DOMAIN/d" /etc/hosts
}
