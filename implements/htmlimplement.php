<?php
class Html implements QuestionsAnswers {
    private $questions;
    private $answers;
    public function Questions() {
        $this->questions = array(
            "1" => "What is HTML?",
            "2" => "What is Element?"
        );
        return $this->questions;
    }
    public function Answers() {
        $this->answers = array(
            "1" => "HTML is a markup language",
            "2" => "Element is a Text enclosed with <> (open and closing tags) Ex : <p> Some Text </p>"
        );
        return $this->answers;
    }

}
?>
