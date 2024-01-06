<?php
/**
 * Runner.php File Doc Comment
 * PHP version 8.1.2

 * @category File
 * @package  Hexletphp
 * @author   Oleg Kartashov <mapseam@yandex.ru>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/mapseam/hexlet-php/
 */
namespace Hexlet\Php\Runner;

/**
 * End point for execute code
 *
 * @return Collection
 *
 * @since 1.0
 **/
function run()
{
    $collection = collect(['taylor', 'abigail', null])->map(
        function ($name) {
            return strtoupper($name);
        }
    );

    return $collection;
}
