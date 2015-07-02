<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'gestiona');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'gestiona');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'gestiona');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' J~+3]*ERI7]%68+H5/-u3L@VEjvV$T.u%bH_s$s#`@83/x|f)d8N_M{ SFY|S,b');
define('SECURE_AUTH_KEY',  'tGQ./5om!#+BG*SYhops)P($D]aao+PO(!k_8va_RB0?X$GXm`Gc/;6Hue=vV]=/');
define('LOGGED_IN_KEY',    'ZR*YtU>w{-ve,-:Us_w2uCDwr/m&*LoD3[|]TNXb mfqq0S=XW,J4 #hexfZ$h@g');
define('NONCE_KEY',        '+1PPV!yF14kU,iSt8H#]_=kgY~ E}01[:mlOhB|!P^{j+9BbUH1HR,4!.Q]+:TS-');
define('AUTH_SALT',        'Bn?di-UJRc&y+y{m.+-mJYL{-/`S~%}Lw#cILg|<W_.D$Ti*nQ=/Ca:P2%*dsN@O');
define('SECURE_AUTH_SALT', '<`y^+9+-*-tUwY;+*-3kl&/|p^.Sp=eGMn&MhcXQ4|!(d[+//BPiy##8YV-*qcDw');
define('LOGGED_IN_SALT',   'KJHzDJ5n+/SYH!-`~$EqDKE4C~_J[xhh79yqb*2$+_^N5v/M3Y>V+kn*3[~7H%|v');
define('NONCE_SALT',       ',Vv;DD{wm|/=w&J,T}]W-<G%:Cj|0K}yQ|nk=EYg.ZX]0UB}J*apmmO`c&?QDjR_');
/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
