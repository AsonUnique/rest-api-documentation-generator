<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\RestApiDocumentationGenerator\Dependency\External;

use Doctrine\Common\Inflector\Inflector;

class RestApiDocumentationGeneratorToDoctrineInflectorAdapter implements RestApiDocumentationGeneratorToTextInflectorInterface
{
    /**
     * @param string $word
     *
     * @return string
     */
    public function classify(string $word): string
    {
        return Inflector::classify($word);
    }

    /**
     * @param string $word
     *
     * @return string
     */
    public function singularize(string $word): string
    {
        return Inflector::singularize($word);
    }
}
