<?php
class yrewrite_one_level extends rex_yrewrite_scheme
{
    protected $suffix = null;
    
    public function appendCategory($path, rex_category $cat, rex_yrewrite_domain $domain)
    {
        return $path;
    }

    public function appendArticle($path, rex_article $art, rex_yrewrite_domain $domain)
    {
        return $path . '/' . $this->normalize($art->getName(), $art->getClang());
    }
}
