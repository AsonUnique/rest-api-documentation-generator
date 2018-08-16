<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\RestApiDocumentationGenerator\Business\Generator;

use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRoutePluginInterface;

interface RestApiDocumentationPathGeneratorInterface
{
    /**
     * @param \Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRoutePluginInterface $resourceRoutePlugin
     * @param string $transferSchemaKey
     * @param string $restErrorTransferSchemaKey
     *
     * @return void
     */
    public function addPathsForPlugin(ResourceRoutePluginInterface $resourceRoutePlugin, string $transferSchemaKey, string $restErrorTransferSchemaKey): void;

    /**
     * @return array
     */
    public function getPaths(): array;
}