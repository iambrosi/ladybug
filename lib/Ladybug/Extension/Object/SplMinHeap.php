<?php
/*
 * Ladybug: Simple and Extensible PHP Dumper
 *
 * Object/SplMinHeap dumper
 *
 * (c) Raúl Fraile Beneyto <raulfraile@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ladybug\Extension\Object;

class SplMinHeap extends SplHeap
{
    public function getData($var)
    {
        return parent::getData($var);
    }

}