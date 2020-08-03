<?php

namespace PersonalSite\Model;

interface ArticleRepository
{
    /**
     * @return Article[]
     */
    public function getArticles();

    /**
     * @param string $id
     * @return Article
     */
    public function getArticle($id);
}
