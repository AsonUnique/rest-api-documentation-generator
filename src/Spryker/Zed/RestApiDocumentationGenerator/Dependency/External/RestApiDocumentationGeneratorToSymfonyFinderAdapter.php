<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\RestApiDocumentationGenerator\Dependency\External;

use Symfony\Component\Finder\Finder;

class RestApiDocumentationGeneratorToSymfonyFinderAdapter implements RestApiDocumentationGeneratorToFinderInterface
{
    /**
     * @var \Symfony\Component\Finder\Finder
     */
    protected $finder;

    public function __construct()
    {
        $this->finder = new Finder();
    }

    /**
     * @param array|string $dirs
     *
     * @return \Spryker\Zed\RestApiDocumentationGenerator\Dependency\External\RestApiDocumentationGeneratorToFinderInterface
     */
    public function in($dirs): RestApiDocumentationGeneratorToFinderInterface
    {
        $this->finder->in($dirs);

        return $this;
    }

    /**
     * @return \Spryker\Zed\RestApiDocumentationGenerator\Dependency\External\RestApiDocumentationGeneratorToFinderInterface
     */
    public function files(): RestApiDocumentationGeneratorToFinderInterface
    {
        $this->finder->files();

        return $this;
    }

    /**
     * @param string $pattern
     *
     * @return \Spryker\Zed\RestApiDocumentationGenerator\Dependency\External\RestApiDocumentationGeneratorToFinderInterface
     */
    public function name(string $pattern): RestApiDocumentationGeneratorToFinderInterface
    {
        $this->finder->name($pattern);

        return $this;
    }

    /**
     * @return \Iterator|\SplFileInfo[]
     */
    public function getIterator()
    {
        return $this->finder->getIterator();
    }
}