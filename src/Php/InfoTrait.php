<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Traits\Php;

use function extension_loaded;
use function function_exists;

/**
 * Information method wrappers
 */
trait InfoTrait
{
    /**
     * Find out whether an extension is loaded
     *
     * @param string $name
     *
     * @return bool
     *
     * @link https://php.net/manual/en/function.extension-loaded.php
     */
    protected function phpExtensionLoaded(string $name)
    {
        return extension_loaded($name);
    }

    /**
     * Return true if the given function has been defined
     *
     * @param string $function
     *
     * @return bool
     *
     * @link https://php.net/manual/en/function.function-exists.php
     */
    protected function phpFunctionExists(string $function)
    {
        return function_exists($function);
    }
}
