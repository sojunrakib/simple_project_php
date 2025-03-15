<?php
// Function to check answers and calculate the score
function evaluateQuiz(array $questions, array $answers): int {
    $score = 0; // Start with a score of 0
    foreach ($questions as $index => $question) {
        if ($answers[$index] === $question['correct']) {
            $score++; // Add 1 to score if the answer is correct
        }
    }
    return $score; // Return the total score
}

// List of quiz questions
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
];

// Asking questions and collecting user answers
$answers = [];
foreach ($questions as $index => $question) {
    echo ($index + 1) . ". " . $question['question'] . "\n"; // Print the question
    $answers[] = trim(readline("Your answer: ")); // Get user's answer and remove extra spaces
}

// Calculate the score
$score = evaluateQuiz($questions, $answers);

// Show results to the user
echo "\nYou scored $score out of " . count($questions) . ".\n";

// Provide feedback based on the score
if ($score === count($questions)) {
    echo "Excellent job!\n";
} elseif ($score > 1) {
    echo "Good effort!\n";
} else {
    echo "Better luck next time!\n";
}
?>
