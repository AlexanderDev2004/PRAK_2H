<?php
    // $pattern = "/[a-z]/";
    // $text = 'this is a sample text';
    // if (preg_match($pattern, $text)) {
    //     echo "Matched";
    // } else {
    //     echo "Not matched";
    // }
            
    $pattern = "/go{1,2}d/"; 
    $text = 'good is god'; 
    if (preg_match($pattern, $text, $matches)) {
        echo "cocokan: " . $matches[0];
    } else {
        echo "tidak cocokan";
    }
    // $replacement = 'banana';
    // $new_text = preg_replace($pattern, $replacement, $text);
    // echo $new_text;
?>
