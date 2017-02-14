<?php
    class Anagram
    {
        function compareWords($input)
        {
            $first_word_letter_array = str_split($input[0]);
            $word_to_compare_array = str_split($input[1]);
            if (array_diff($first_word_letter_array, $word_to_compare_array) != array()) {
                return "This is not an anagram";
            } else {
                return "This is an anagram";
            }
        }
    }
 ?>
