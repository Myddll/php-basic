<?php

namespace HexletBasics\Conditionals\IfElse;

function normalizeUrl($url)
{
    if (strpos($url, 'http://') === 0)
    {
        $conclusion = "https://" . substr($url, 7);
    }
    else
    {
        $conclusion = "https://" . $url;
    }
    return $conclusion;
}