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
            $this->assertEquals("This is not an anagram", $result);

        }

        function test_anagram_yes()
        {
            //Arrange
            $test_word = new Anagram;
            $input = array("dear", "read");
            //Act

            $result = $test_word->compareWords($input);

            //Assert
            $this->assertEquals("This is an anagram", $result);

        }
    }





 ?>
