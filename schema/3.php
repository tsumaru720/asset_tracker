<?php

$q = $db->query(<<<'EOT'
ALTER TABLE `asset_list` ADD `excluded` BOOLEAN NOT NULL DEFAULT FALSE AFTER `closed`;

UPDATE `settings` SET `value` = '3' WHERE `settings`.`setting` = 'db_version';
EOT
);

