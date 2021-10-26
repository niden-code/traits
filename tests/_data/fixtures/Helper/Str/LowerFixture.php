<?php

/**
 * This file is part of the Phalcon.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Tests\Fixtures\Helper\Str;

use Phalcon\Traits\Helper\Str\LowerTrait;

class LowerFixture
{
    use LowerTrait;

    /**
     * Lowercases a string using mbstring
     *
     * @param string $text
     * @param string $encoding
     *
     * @return string
     */
    public function lower(
        string $text,
        string $encoding = 'UTF-8'
    ): string {
        return $this->toLower($text, $encoding);
    }
}
