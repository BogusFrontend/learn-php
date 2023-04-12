<?php

/*
 * Implement the normalizeUrl() function, which performs the so-called data normalization.
 * It takes the site address and returns it with https:// at the beginning.
 * The function accepts addresses in the form:
 * address
 * http://АДРЕС
 * https://АДРЕС
 * But it always returns the URL in the form https://АДРЕС
 */

function normalizeUrl(string $url): string
{
    if (str_starts_with($url, 'http://')) {
        $domain = substr($url, 7);
    } elseif (str_starts_with($url, 'https://')) {
        $domain = substr($url, 8);
    } else {
        $domain = $url;
    }

    return "https://{$domain}";
}

$res = normalizeUrl('google.com');
print_r($res);