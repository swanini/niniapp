<?php
/**
 * Note content sanitization function.
 *
 * @param string $content The note content to sanitize.
 * @return string The sanitized note content.
 */
function niniNoteCon(string $content): string
{
    $content = preg_replace('/<p[^>]*>/i', '', $content);
    $content = preg_replace('/<\/p>/i', "\n", $content);
    $content = strip_tags($content);
    $content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
    return nl2br($content, false);
}