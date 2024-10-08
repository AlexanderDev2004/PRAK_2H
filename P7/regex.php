<?php
    // $pattern = "/[a-z]/";
    // $text = 'this is a sample text';
    // if (preg_match($pattern, $text)) {
    //     echo "Matched";
    // } else {
    //     echo "Not matched";
    // }
            
    $pattern = "/apple/";
    $text = 'i like pie';
    $replacement = 'banana';
    $new_text = preg_replace($pattern, $replacement, $text);
    echo $new_text;
?>
