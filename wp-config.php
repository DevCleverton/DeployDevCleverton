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
define( 'DB_NAME', 'DeployDevCleverton' );

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
define( 'AUTH_KEY',         '8?.4l~Wp*0[r?dt|:|WH+t @f}:Fl$|`,~El|:<tS2}rBGIm1t>aT=31:1WS&=Sn' );
define( 'SECURE_AUTH_KEY',  '=]htv=Ue,=pA%Y|coSb$W3O4Dr5S.ntCJY%L<{77V{CmJK UP>5/A+OF2He{nSo`' );
define( 'LOGGED_IN_KEY',    '|mf%+Np@_td2*}D;9xK3EW7kIV8=4o3^Q6Bm5/8.amWvc1,DDAFUem:;4,=jzJ~^' );
define( 'NONCE_KEY',        '3V+G>Ak$c(C%>JuCt{6 Sk]FR$M7i*Iweb7^SGaP`7wF-^mK7O^]uGL@(t&PO1Jl' );
define( 'AUTH_SALT',        '+$OB,D]m!)AJ4a{yyGd|8^v*:!6gacBf6j1kd8,>1i4mz6F05f/$BIs~W&@L5Ln}' );
define( 'SECURE_AUTH_SALT', '/QFY7J.+wr`qiSv><(SHR!O3S2B!Bs[IlyS{8@VCJqD<wVSs,pK8 3f<Fj>@GSCp' );
define( 'LOGGED_IN_SALT',   'yk7D49so(gLs&W_}ozuM`LCG0(C >rrT`,_&9h#&`#-7F:}4#ys3I_U7#XZ0p,!d' );
define( 'NONCE_SALT',       'Kt1toQ9$U07,`xjTMFVLWg9`G(O!7nfKvwE|[j%dGRfuiax>>%FU`h8N]Kb5p$7 ' );

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
