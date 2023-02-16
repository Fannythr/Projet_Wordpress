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
define( 'DB_NAME', 'fanny' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Fanny' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Noubagym6*' );

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
define( 'AUTH_KEY',         '<RWGA*z;.=d1-p7-ZW0Bm:w6|%Nt|0>4+B@<fr 6YGlD]BC<5siN1<23bM>EkG>E' );
define( 'SECURE_AUTH_KEY',  ']U^pS7^FygrcbUF!7`A@UB!zhGUWS|ndgNj?!!oZM!!G1@wgJN@P?cYvfnb>/.Qz' );
define( 'LOGGED_IN_KEY',    '|Les)w?D$s:*>sUUi0v@@C=P!VIHk{%r+/y4h{ha3v8v+xCLxO9?njCO-<THp*?w' );
define( 'NONCE_KEY',        '`Eb5NnD::@LcdhYx/5j0d6T4--x>UJ>8{RNo7CTA9l&a5gM3Ks}iJ=-p+aIPbkX9' );
define( 'AUTH_SALT',        'H<BRUGFdTgNUF}g u6+Bw].~KCUi$0%)jjNhvjTNBRO*!E3$gn`y1{=.WlJT^!wB' );
define( 'SECURE_AUTH_SALT', 'w6Ya SO$6O^RuFi25WL[{H}qW*+w;8p$S)0[=_X7>[mK=y*WgE<W22N7HrUj63^M' );
define( 'LOGGED_IN_SALT',   '*H#B55An0dc)8CaCo)_gqFKzeA}H7iv+5bq`Ik}3x2>FW^`GY93yPX[Wa3v1P`H>' );
define( 'NONCE_SALT',       '7j2|IN~XhC EVuX3@g`x%^|taZ[vs2(x%(w0+p@0l;YfHlpX:PfGYV6|goK= 9;1' );
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
