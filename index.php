<?php

function getGrade($score)
{
    return match (true) {
        $score >= 90 => "A",
        $score >= 80 => "B",
        $score >= 70 => "C",
        $score >= 60 => "D",
        $score >= 50 => "E",
        $score >= 0 => "F",
        default => "Invalid score",
    };
}

function getGradeMessage($score)
{
    $grade = getGrade($score);
    return match ($grade) {
        "A" => "Excellent work!",
        "B" => "Good job!",
        "C" => "You passed.",
        "D" => "You barely passed.",
        "E" => "You need to improve.",
        "F" => "Failed. Please try again.",
        default => $grade,
    };
}


// Example usage
echo getGradeMessage(90) . "\n"; // Output: Good job!