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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpduplicar' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'FKRazOz*m=TmMPpvjsnz6pN]9R(b%Va}],H6:zNcr}H>w^rq;KEqTxA6zWT0wLB7' );
define( 'SECURE_AUTH_KEY',  'Q_+YxJL?j3`J>Xt;u(zlm0[QFxhIG1x?H$hKq/8&95,3zqUb090)qt.&hS`ILw,Z' );
define( 'LOGGED_IN_KEY',    'Kn!aTOo`1`P> jT/1M,%BQ<Tx2^M9PpD#gsAD|;`=a37u$p#7!oyT-ueKGJ|h6*5' );
define( 'NONCE_KEY',        'Tzh GAU4U>><m_KR?:4f!DJBXqzk5W,8tV=$fgK$sV*/1:Lkkpm8)|)Pq+(zW(W3' );
define( 'AUTH_SALT',        '=!uc?J=F=:|c_$C:Ll-w<dwu-=kM>F/SMm=+Y=PcT_X2$u^<j U.;za;5)-47[id' );
define( 'SECURE_AUTH_SALT', '^Cn=YGGPGI6Of,MArN|gA4YP.ebw+V_[FTXi =b$nMrE]si[(>j05)0UugI|9JiI' );
define( 'LOGGED_IN_SALT',   '87OY{BeXP/Vg-kv:pP`QS1|hH,Z2BHG5N~_AAIp<Eg1#SIb2T7b`F%fCFF3x%H g' );
define( 'NONCE_SALT',       '_m*|VqKvKiT}[$;}-Po)+R8Me5j4i,uv:,)~.71BuN)VuXPq=>8E$Qch2>PRYnuZ' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
