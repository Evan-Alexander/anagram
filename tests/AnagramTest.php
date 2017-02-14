<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {
        function test_anagram_maybe()
        {
            //Arrange
            $test_word = new Anagram;
            $input = array("bear", "toast");
            //Act

            $result = $test_word->compareWords($input);

            //Assert
            $this->assertEquals("None of these words are anagrams", $result);

        }

        function test_anagram_yes()
        {
            //Arrange
            $test_word = new Anagram;
            $input = array("dear", "read");
            //Act

            $result = $test_word->compareWords($input);

            //Assert
            $this->assertEquals("These words are anagrams: read", $result);

        }

        function test_anagram_multiples()
        {
            //Arrange
            $test_word = new Anagram;
            $input = array("dear", "read, bowl, toast, red, dare");
            //Act

            $result = $test_word->compareWords($input);

            //Assert
            $this->assertEquals("These words are anagrams: read, dare", $result);

        }

        function test_anagram_multiple_no()
        {
            //Arrange
            $test_word = new Anagram;
            $input = array("dear", "bowl, toast, red");
            //Act

            $result = $test_word->compareWords($input);

            //Assert
            $this->assertEquals("None of these words are anagrams", $result);

        }
    }





 ?>
