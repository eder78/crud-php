CREATE TABLE `contatos` (
  `id` int(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `user_id`  varchar(7) COLLATE utf8_unicode_ci NOT NULL,
  `empresa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contato` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `celular` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `site` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,    
  `uf` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `cep` varchar(8) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;