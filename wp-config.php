<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'db_douglas');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd6B#/*@P+T ygU4=;Kn<QiP^jL.vfj%.ZWVbd%Gm9S!&a:rpKYK~-&n}@-Z,B/i-');
define('SECURE_AUTH_KEY',  'L.pO<u){At^{PtLY`lh0iP-ZB0N!%fH%CHt$)DXtDU$Fxo1?>TP^EWDAtIGl8vA#');
define('LOGGED_IN_KEY',    ']}vV`YW;<J6sqt,Yz8S*7C;%C?FJU=ddMu10!FD`DuWtM?![%*,gYcXB)Yk#}Gb[');
define('NONCE_KEY',        'itWmd:XF:oFAZ.;-TGgQc5t_# !:^nkW@rJ$oy#[I}wus[b5LF:!M!_S9JWYoq/R');
define('AUTH_SALT',        '+hj -#A7dJiV:%zWakZR?Hk*|APO+zBkw4Pi2n&~B0JagwwtT3$v;H|U2*kUIX>6');
define('SECURE_AUTH_SALT', 'z_deh].K8,lO@!gx$/D+RQiUCaTUV}_J0-Xc!#eC@h| 5g_)X9TgMGGW+8CGMah3');
define('LOGGED_IN_SALT',   '=qRyr}P[Ti%kY]t^^)wsq84M^g`&1DbYcH*lB:]!>-_`R$aE4-e!tI7SaXdWZJO3');
define('NONCE_SALT',       '[]Pj|16ZOoD-~W3:L[7!CV[&(/JPLd;t%;{dq@([#)MtvY.g:k_+F.0re<Y,Cgq7');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
