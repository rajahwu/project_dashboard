<?php
  // require_once 'lib/parsedown-1.7.4/Parsedown.php';

function url_for($script_path) {
  // add the leading '/' if not present
  if($script_path[0] != '/') {
    $script_path = "/" . $script_path;
  }
  return WWW_ROOT . $script_path;
}

function u($string="") {
  return urlencode($string);
}

function raw_u($string="") {
  return rawurlencode($string);
}

function h($string="") {
  return htmlspecialchars($string);
}

function error_404() {
  header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
  exit();
}

function error_500() {
  header($_SERVER["SERVER_PROTOCOL"] . " 500 Internal Server Error");
  exit();
}

function redirect_to($location) {
  header("Location: " . $location);
  exit;
}

function is_post_request() {
  return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request() {
  return $_SERVER['REQUEST_METHOD'] == 'GET';
}

// PHP on Windows does not have a money_format() function.
// This is a super-simple replacement.
if(!function_exists('money_format')) {
  function money_format($format, $number) {
    return '$' . number_format($number, 2);
  }
}


function print_query_results_data($results, $v = false) {
  foreach($results as $result) {
      // pre header
      $html = '<pre>';
      $html .= "<br /><hr />";
      echo $html;
      if($v) {
        //  title
        $html = "<h2>var_dump:</h2>";
        $html .= "<br />";
        echo $html;
        var_dump($result);
      }
      //  title
      $html = "<h2>print_r:</h2>";
      $html .= "<br />";
      echo $html;
      print_r($result);
      // pre footer
      $html = "<br /><hr />";
      $html .= '</pre>';
      echo $html;
  }
}


 function render_lesson_card($args) {
 $parsedown = new Parsedown();
 
 $card =  '<div class="card">';
 $card .= '<h2 class="card-title">' . $args['title'] . '</h2>';
 $card .= '<div class="card-body prose">';
        
 echo $card;
 echo $parsedown->text(file_get_contents($args['url']));
 echo  '</div></div>';

 }

 function render_section_summary($section_title) {
  $parsedown = new Parsedown();
  echo $parsedown->text(file_get_contents('sections/' . $section_title . '/summary.md'));
  echo '<a class="btn" href="./sections/' . $section_title . '/">'. $section_title . '</a></a>';
 }


 function render_lesson_summaries($directory) {
   $contents = scandir($directory);

    foreach($contents as $content) {
      if($content != 'index.php' && $content != "." && $content != '..') {
        render_section_summary($content);
     }
   }
 }


 function get_section_notes($directory='notes') {
   $contents = scandir($directory);
   $section_notes = [];

  foreach($contents as $content) {
      if($content != '.' && $content != '..') {
          $text = str_replace(".md", "", $content);
          $title = str_replace("_", " ", $text);

          $section_notes[] = ['title' => $title, 'url' => 'notes/' . $content]; 
    }

  }
  return $section_notes;

 }