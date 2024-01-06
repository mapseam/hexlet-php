<?php
/**
 * Index.php File Doc Comment
 * PHP version 8.1.2

 * @category File
 * @package  Hexletphp
 * @author   Oleg Kartashov <mapseam@yandex.ru>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/mapseam/hexlet-php/
 */
require_once __DIR__ . '/vendor/autoload.php';

use Hexlet\Php\Runner;

echo 'Hello, Hexlet!' . "\n\n";
print_r(Runner\run());
