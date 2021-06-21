<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}_L{l^y/~5lx~G`pr)Sy&(-ucv kF.@W1Q4pY{A&u6pQiKG}em4?hX+e[UF{g58[' );
define( 'SECURE_AUTH_KEY',  '?rZcK;0.e%>n8HZy/rim)X{5$A`A>jdKysmhBJ#mzsJI$BMnoV,6P`r!*I{E6/L2' );
define( 'LOGGED_IN_KEY',    'k;|kOr(FF>Fb5x8/6SpqlOqM>qH[8jV,|cAGl%hU]O|^mhqGCy?e=}tvg2n<c1(H' );
define( 'NONCE_KEY',        '-@a:/v{B1bMvrlG& [?if(]-XuJN;p+m+-54(MLVfRbrJb`{V[IAt!]#ZH*D<:T)' );
define( 'AUTH_SALT',        'YEPvd!Tpk8~#Uj668j}13$){]q04AkKaQhW.mCavgQ#vwookT%sSb? .ChP^<5zR' );
define( 'SECURE_AUTH_SALT', 'Y.jEZqt=6w5H{<D!  ~Mn*5-~<{Xi+6,;Zk&5yh6RJKyhxmE91dJ58u gN^L;C95' );
define( 'LOGGED_IN_SALT',   '>+,c)Hh0{*&C7!`?wRY^/dcTso <@trwM<[VJ0-ix1Xp`$Hh0J<}@STPoF:96Uy ' );
define( 'NONCE_SALT',       '*G8]JLk3;U|e/C$6NUY9w{cm1@OSO@]9`D2=3J7=$Thb&$aaB/@eH$0}urB4jSzu' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
