<?php
class CSS implements QuestionsAnswers {
    private $questions;
    private $answers;
    public function Questions() {
        $this->questions = array(
            "1" => "What is CSS?",
            "2" => "Types of adding styles?"
        );
        return $this->questions;
    }
    public function Answers() {
        $this->answers = array(
            "1" => "Cascading Style Sheet",
            "2" => "Inline, Internal, External"
        );
        return $this->answers;
    }

}
?>
