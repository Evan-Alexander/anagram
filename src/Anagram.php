<?php
    class Anagram
    {
        function compareWords($input_word, $list_of_words)
        {
            $first_word_letter_array = str_split($input_word);
            $all_words_compare_array = explode(",", $list_of_words);
            $words_matching_array = array();

            foreach ($all_words_compare_array as $word) {
                $word_to_compare_array = str_split($word);
                if (array_diff($first_word_letter_array, $word_to_compare_array) == array()) {
                    array_push($words_matching_array, $word);
                }
            }

            if ($words_matching_array == array()) {
                return "None of these words are anagrams";
            } else {
                $matching_words = implode(",", $words_matching_array);
                return "These words are anagrams: " . $matching_words;
            }
        }
    }
 ?>
