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
define( 'DB_NAME', 'tec_info' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'c HuR!{brlNY8D!AzTYt4=}#6x<[F}fR$Ld)7MJ<Mkz5E>l)(U4T`ZK&U1JpAeo5' );
define( 'SECURE_AUTH_KEY',  '-nGCXMsev8%T%arNrM[/>qTcOE*7G2?dpodsWc~Iyxb3Tz]1Z]y|92ZFbMc}QL[g' );
define( 'LOGGED_IN_KEY',    '<a|F{J&[bU*9W5Y[p8yO}U95k*QEG/7<dLzn6XbELPz%2S#_8Kw1]wk3ouoa`AKn' );
define( 'NONCE_KEY',        'ebU}G^A_5SK6`@3aii|,-@k3@fk:zL{TZyEs)z~HD-.waI@gMhAs%H&BOP*$x0#@' );
define( 'AUTH_SALT',        'OZ>x3hFd?:LrQPUEZ-j6]&|4WCG;hqx3*O >fKLQ,ZC BC$zxUg S&dB%Z~fQUjE' );
define( 'SECURE_AUTH_SALT', 'XjyLj5jlIj=D[{YAwhBzD2Vrr|hzc/E)3{V(=M,U#5}jUt-D7axb#Q?x<gF_dZn`' );
define( 'LOGGED_IN_SALT',   'T?f[;RWjbAW1vzd|tJYwF1Uhb0)pQ&wXvoW`Fx/;#/rD3YP%Tt@OoW?]om,x9.!^' );
define( 'NONCE_SALT',       '>U!m.KV`A4*U|E{67*<Yh+xiR;/yuTE1dM6h-*1REO=.I%:SKnTjnvfuoOOUsoi%' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
