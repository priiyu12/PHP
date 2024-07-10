<?php
$st = 'the quick brown fox jumps over the lazy dog...';
echo preg_replace('/the/', 'That', $st, 1)."\n";
?>