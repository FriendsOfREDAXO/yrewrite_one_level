<?php
class one_level_no_suffix extends rex_yrewrite_scheme
{
    public function appendCategory($path, rex_category $cat, rex_yrewrite_domain $domain)
    {
        return $path;
    }

    public function appendArticle($path, rex_article $art, rex_yrewrite_domain $domain)
    {
        return $path . '/' . $this->normalize($art->getName(), $art->getClang());
    }
}