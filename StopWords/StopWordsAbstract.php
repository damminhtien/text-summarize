<?php
abstract class StopWordsAbstract
{
    /**
     * Stop words for avoid dummy keywords.
     */
    protected $words = [];

    /**
     * It retrieves the word exists or does not in the list of Stop words.
     *
     * param string $word
     *
     * return bool It is True when it exists.
     */
    public function exist(string $word): bool
    {
        return array_search($word, $this->words) !== false;
    }
}
?>