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
define( 'DB_PASSWORD', 'Fortfreluche735' );

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
define( 'AUTH_KEY',         '6=yIR6)ehm4|,a~vOeCT<7(Xwh2F8/AZ]s@S-1(L{*r|>WTteuk|d:oA(5^i&g)=' );
define( 'SECURE_AUTH_KEY',  '~iiJ#/`k {$*|3@S=(w@W+,wvo]M+jtu266DioW:{7GmNq%I^_<n+C*.K[<&K`(5' );
define( 'LOGGED_IN_KEY',    'i*cc`E4z%XA4IDyXC16Qh/M zv*gsW:)qsrFs8L6!Qg|v?cquJ|pGbT(x|a3ZHvC' );
define( 'NONCE_KEY',        'k7jX1yDz;uwi;s[#N*$,J?y]ASa]pwsOMe_P|#;@fENe=QiR{NzX%Dw]C6mrNxLE' );
define( 'AUTH_SALT',        'D-jNyu wsn{|N(Z-%JN(%>|XZU| $`2wDQ^WB4= 4%x;FVV&nu-m&joC,,}*==N{' );
define( 'SECURE_AUTH_SALT', '$KY gh}G@B!z_*@I|szz3u-=kt:<gpL/+*Mp9q?C)g@A~y[U[fqFj;}vrmp7Z#|b' );
define( 'LOGGED_IN_SALT',   '_mKe57.f!:zQotTQ>{v:4dFmPE*,Z9ZtNQ3)$jF>?VkLD{TuIm80Rh9cC-eWJ=i`' );
define( 'NONCE_SALT',       '20R`6Y~[n0NU8m{*0MH(^^.Esx ?c} ^?tDbdI$.pWu^JUL~>{3`~/c)eZE;]lCq' );
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
