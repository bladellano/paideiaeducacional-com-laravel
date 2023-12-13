<?php

namespace App\Services;

use SimplePie\SimplePie;

class RssService
{
    public function getRssFeed()
    {
        // URL do feed RSS
        $feedUrl = 'https://g1.globo.com/rss/g1/educacao/';

        // Instanciar o SimplePie
        $feed = new SimplePie();
        $feed->set_feed_url($feedUrl);
        $feed->enable_cache(false); // Desativar cache para sempre obter as últimas notícias
        $feed->init();

        // Recuperar os itens do feed (notícias)
        $items = $feed->get_items(0, 4); // Obtém as últimas 4 notícias

        return $items;
    }
}
