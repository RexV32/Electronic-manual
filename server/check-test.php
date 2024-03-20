<?php
require_once ("../function.php");
header('Content-Type: application/json; charset=utf-8');

try {
    $data = filter_input_array(INPUT_POST, ["data" => FILTER_DEFAULT, "id" => FILTER_DEFAULT]);
    $idTest = $data["id"];
    $decodedData = json_decode($data["data"], true);
    $array = [];

    $sql = "SELECT 
    q.Id AS IdQuestions,
    q.Text AS TextQuestions,
    GROUP_CONCAT(a.Id) AS IdAnswers,
    GROUP_CONCAT(a.Text) AS TextAnswers 
    FROM `Questions` AS q INNER JOIN `Answers` AS a ON a.Id_question = q.Id WHERE q.`Id_test` = ? AND a.Correct = 1 GROUP BY q.Id";
    $stmt = $link->prepare($sql);
    $stmt->execute([$idTest]);
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $countCorrect = 0;
    foreach ($questions as $question) {
        $idAnswersArr = explode(",", $question["IdAnswers"]);
        $textAnswersArr = explode(",", $question["TextAnswers"]);
        unset($question["IdAnswers"]);
        unset($question["TextAnswers"]);
        $question["answers"] = [];
        for ($i = 0; $i < count($idAnswersArr); $i++) {
            $id = $idAnswersArr[$i];
            $text = $textAnswersArr[$i];
            array_push($question["answers"], ["IdAnswer" => $id, "TextAnswer" => $text]);
        }
        $countCorrect++;
        array_push($array, $question);
    }
    $questions = $array;
    $score = 0;
    for ($i = 0; $i < count($decodedData); $i++) {
        if ($decodedData[$i]["questionId"] == $questions[$i]["IdQuestions"]) {
            $answersDb = $questions[$i]["answers"];
            $answersUser = $decodedData[$i]["answers"];
            $correct = 0;
            $uncorrect = 0;

            for ($j = 0; $j < count($answersDb); $j++) {
                if ($answersDb[$j]["TextAnswer"] == $answersUser[$j]["answer"]) {
                    $correct++;
                } else {
                    $uncorrect++;
                }
            }

            if ($correct > 0 && $uncorrect == 0) {
                $score++;
            }
        }
    }

    if($_SESSION["user"]["Role_id"] == 1) {
        $idUser = $_SESSION["user"]["Id"];
        $sql = "INSERT INTO `Results`(`Id_User`, `Id_Test`, `Score`) VALUES (:idUser,:idTest,:score)";
        $stmt = $link -> prepare($sql);
        $stmt -> execute([
            "idUser" => $idUser,
            "idTest" => $idTest,
            "score" => $score
        ]);
    }


    echo json_encode(["success" => true, "result" => "Ваш результат составляет<br>$score из $countCorrect<br>правильных ответов", "title" => "Тест завершен"]);
} catch (PDOException $e) {
    echo json_encode(["success" => false, "message" => $e->getMessage(), "title" => "Ошибка"]);
}