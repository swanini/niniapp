<?php
/**
 * Note content sanitization function.
 *
 * @param string $content The note content to sanitize.
 * @return string The sanitized note content.
 */
function niniNoteCon(string $content): string
{
    $content = preg_replace('/<p[^>]*>/i', '', $content);      // <p> 제거
    $content = preg_replace('/<\/p>/i', "\n", $content);       // </p> → 줄바꿈
    $content = strip_tags($content);                           // 나머지 태그 제거
    $content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8'); // XSS 방어
    return nl2br($content, false);                             // \n → <br>
}