<?php

use function DI\create;
use PersonalSite\Model\ArticleRepository;
use PersonalSite\Persistence\InMemoryArticleRepository;

return [
    ArticleRepository::class => create(InMemoryArticleRepository::class),
];
