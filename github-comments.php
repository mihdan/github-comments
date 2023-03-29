<?php
/**
 * Plugin name: Github Comments
 * Description: Пример работы комментаритев для сайта на основе Github Issues.
 * Author: Mikhail Kobzarev
 * Author URI: https://www.kobzarev.com/projects/github-comments/
 * Version: 1.0.0
 */

namespace Mihdan\GithubComments;

add_filter(
  'the_content',
  function( $content ) {
    $repository = 'mihdan/github-comments';

    $content .= '
      <script src="https://utteranc.es/client.js"
        repo="' . $repository . '"
        issue-term="pathname"
        label="Комментарии"
        theme="github-light"
        crossorigin="anonymous"
        async>
      </script>
    ';
    
    return $content;
  }
);
