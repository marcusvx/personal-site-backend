<?php

namespace PersonalSite\Controller;

use PersonalSite\Model\ArticleRepository;

class HomeController
{
    /**
     * @var ArticleRepository
     */
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        echo 'Home works';
    }
}
