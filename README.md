# PHP Anagram Webpage

#### _A webpage that shows if a word is an anagram, 13 February 2017_

#### By _**Erica Wright & Jason Brown**_

## Description

This webpage will allow the user to enter a word and a list of words and will match up which words are anagrams of each other.

## Setup/Installation Requirements

1. _Fork and clone this repository from_ [gitHub](https://github.com/ericaw21/anagram).
2. Run `composer install --prefer-source --no-interaction` from project root
3. Create a local server in the /web directory within the project folder using the command: __php -S localhost:8000__ (assuming you are using a mac).
4. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| Enter a word and single word to compare | "bear" and "toast" | "This is not an anagram" |
| Enter a word and single word to compare | "dear" and "read" | "This is an anagram" |
| Enter a word and a list of words to compare | "dear" and "read, bowl, toast, red, dare" | "These words are anagrams: read, dare" |
| Enter a word and a list of words to compare | "dear" and "read, bowl, toast, red, dare" | "These words are anagrams: read, dare, red" |

## Known Bugs

No known bugs.

## Support and contact details

Please contact ericaw21@gmail.com or jasontbrown99@gmail.com with questions or concerns.

## Technologies Used

* _HTML_
* _CSS_
* _Bootstrap_
* _PHP_
* _Silex_
* _Twig_
* _Composer_

## License

*MIT license*

Copyright (c) 2017 {**Erica Wright & Jason Brown**} All Rights Reserved.
