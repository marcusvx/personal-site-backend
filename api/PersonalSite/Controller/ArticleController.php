<?php

namespace PersonalSite\Controller;

use PersonalSite\Model\ArticleRepository;

class ArticleController
{
    /**
     * @var ArticleRepository
     */
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }
}
