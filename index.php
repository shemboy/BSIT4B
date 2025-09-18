<?php
// This is the secure, server-side code. It's not visible to the user's browser.

// The questions and answers are stored here, securely on the server.
$questions = [
    // --- Multiple Choice (1-10) ---
    [
        'id' => 1,
        'type' => 'multiple',
        'q' => '1. What does a functional level determine?',
        'choices' => [
            "A. The network speed",
            "B. The AD DS features available",
            "C. The number of users",
            "D. The internet connection type"
        ],
        'answer' => 'B. The AD DS features available'
    ],
    [
        'id' => 2,
        'type' => 'multiple',
        'q' => '2. Which functional level affects features within a single domain?',
        'choices' => [
            "A. Forest Functional Level",
            "B. Domain Functional Level",
            "C. Network Functional Level",
            "D. Local Functional Level"
        ],
        'answer' => 'B. Domain Functional Level'
    ],
    [
        'id' => 3,
        'type' => 'multiple',
        'q' => '3. Which functional level affects features across the entire AD forest?',
        'choices' => [
            "A. Domain Functional Level",
            "B. Tree Functional Level",
            "C. Forest Functional Level",
            "D. Root Functional Level"
        ],
        'answer' => 'C. Forest Functional Level'
    ],
    [
        'id' => 4,
        'type' => 'multiple',
        'q' => '4. What is required for all Domain Controllers (DCs) before raising the Domain Functional Level?',
        'choices' => [
            "A. They must be renamed",
            "B. They must run compatible Windows Server versions",
            "C. They must be turned off",
            "D. They must be clustered"
        ],
        'answer' => 'B. They must run compatible Windows Server versions'
    ],
    [
        'id' => 5,
        'type' => 'multiple',
        'q' => '5. What tool can check AD replication health?',
        'choices' => [
            "A. tasklist",
            "B. netstat",
            "C. repadmin",
            "D. ipconfig"
        ],
        'answer' => 'C. repadmin'
    ],
    [
        'id' => 6,
        'type' => 'multiple',
        'q' => '6. Which backup is recommended before raising the Domain Functional Level?',
        'choices' => [
            "A. Incremental backup",
            "B. System state backup",
            "C. Differential backup",
            "D. Cloud backup only"
        ],
        'answer' => 'B. System state backup'
    ],
    [
        'id' => 7,
        'type' => 'multiple',
        'q' => '7. What group must you be a member of to raise the Domain Functional Level?',
        'choices' => [
            "A. Backup Operators",
            "B. Domain Admins",
            "C. Users",
            "D. Power Users"
        ],
        'answer' => 'B. Domain Admins'
    ],
    [
        'id' => 8,
        'type' => 'multiple',
        'q' => '8. Which replication method should be used for SYSVOL at or above Windows Server 2008?',
        'choices' => [
            "A. FRS",
            "B. DFSR",
            "C. HTTP",
            "D. FTP"
        ],
        'answer' => 'B. DFSR'
    ],
    [
        'id' => 9,
        'type' => 'multiple',
        'q' => '9. What is a warning when raising the Domain Functional Level?',
        'choices' => [
            "A. It can be lowered anytime",
            "B. It can be reversed easily",
            "C. It is permanent and irreversible",
            "D. It causes no impact"
        ],
        'answer' => 'C. It is permanent and irreversible'
    ],
    [
        'id' => 10,
        'type' => 'multiple',
        'q' => '10. Which tool can be used as an alternative to GUI to raise Domain Functional Level?',
        'choices' => [
            "A. CMD",
            "B. PowerShell",
            "C. Notepad",
            "D. Task Manager"
        ],
        'answer' => 'B. PowerShell'
    ],

    // --- True/False (11-20) ---
    ['id'=>11,'type'=>'truefalse','q'=>'11. The Domain Functional Level can be lower than the Forest Functional Level.','answer'=>'False'],
    ['id'=>12,'type'=>'truefalse','q'=>'12. All DCs must be compatible before raising the Domain Functional Level.','answer'=>'True'],
    ['id'=>13,'type'=>'truefalse','q'=>'13. Testing applications before raising the level is recommended.','answer'=>'True'],
    ['id'=>14,'type'=>'truefalse','q'=>'14. Raising the Domain Functional Level can be undone anytime.','answer'=>'False'],
    ['id'=>15,'type'=>'truefalse','q'=>'15. You must be on the Primary Domain Controller (PDC) emulator to raise the level.','answer'=>'True'],
    ['id'=>16,'type'=>'truefalse','q'=>'16. The process should be done during a maintenance window.','answer'=>'True'],
    ['id'=>17,'type'=>'truefalse','q'=>'17. DFSR should replace FRS for SYSVOL replication at higher levels.','answer'=>'True'],
    ['id'=>18,'type'=>'truefalse','q'=>'18. Replication health does not need to be checked before raising the level.','answer'=>'False'],
    ['id'=>19,'type'=>'truefalse','q'=>'19. The GUI method uses Active Directory Domains and Trusts.','answer'=>'True'],
    ['id'=>20,'type'=>'truefalse','q'=>'20. The PowerShell command Set-ADDomainMode is used to raise the level.','answer'=>'True'],

    // --- Fill in the blanks (21-25) ---
    ['id'=>21,'type'=>'fill','q'=>'21. In Method 1 (GUI), you must first log on to a __________ before opening Active Directory Domains and Trusts.','answer'=>'Domain Controller'],
    ['id'=>22,'type'=>'fill','q'=>'22. In Method 1 (GUI), after selecting your domain, choose __________ Domain Functional Level to begin the process.','answer'=>'Raise'],
    ['id'=>23,'type'=>'fill','q'=>'23. In Method 1 (GUI), after selecting the new level, you must click __________ and Apply to confirm the change.','answer'=>'Confirm'],
    ['id'=>24,'type'=>'fill','q'=>'24. In Method 2 (PowerShell), you must open PowerShell with __________ privileges on a DC.','answer'=>'Administrator'],
    ['id'=>25,'type'=>'fill','q'=>'25. In Method 2 (PowerShell), the command __________ is used to raise the Domain Functional Level.','answer'=>'Set-ADDomainMode']
];


// List of students (for demonstration purposes)
$students = [
    '2024001' => 'John Doe',
    '2024002' => 'Jane Smith',
    '2024003' => 'Peter Jones',
    '8221363' => 'AMAG JOSHEIN VILLARIN',
    '8221238' => 'AMIT CHARINA EPE',
    '8220795' => 'ANCAJAS CRISTYLEN ROSOS',
    '8221026' => 'BARING JUNEL EBARLE',
    '8221183' => 'BASLAN DEONAN LEO DESPACIO',
    '8221405' => 'BATOMALAQUE KEN ALBURO',
    '8220811' => 'CAÑETE REIL BRIZO',
    '8220922' => 'CHAVEZ BETH ELLEN MAE RODRIGO',
    '8220793' => 'CONDE KIMBERLY RUSTIA',
    '8220469' => 'CONDE SIARA LEE SERICON',
    '8220792' => 'COYOCA ANGELICA JOY',
    '8221425' => 'DIAGA JUDY ANN PANAY',
    '8221213' => 'ENCIENZO DENIELLE JHUDIEL ABALLE',
    '8210744' => 'GASTADOR RYEEL LIAUCS B',
    '8221417' => 'GASTADOR MERVIN SALUDAGA',
    '8220837' => 'GAVIOLA KIMBERLY BRIONES',
    '8220911' => 'GULFAN SHANIA MAE PEREÑO',
    '8221152' => 'HIJAPON MARIDEL RODRIGO',
    '8221223' => 'JALIPA NORBERTO JR. DIAZ',
    '8221293' => 'JUCDONG REGINE MAE R.',
    '8221216' => 'LAHOYLAHOY KENT JOSEPH GANDALLA',
    '8221407' => 'LAYOS KYLE JOSH PUNAY',
    '8211046' => 'MALINAO ANGELITO JR. T.',
    '8221371' => 'MAQUILAN BRYLE NOQUIAO',
    '8220917' => 'MELENDRES MERIELLE ROSE PATALITA',
    '8221450' => 'MONDEJAR KEITH LAURENCE ALMONICAR',
    '8220964' => 'ORTEGA JAYSON REY QUIAPO',
    '8221212' => 'PABILLON MARK VINCENT',
    '8211057' => 'PEPITO KARL VINCENT CONEJOS',
    '8221247' => 'PUNAY JOHN CRISVELL CAPIZNON',
    '8221345' => 'SABIODO MARK JOSHUA MONDEJAR',
    '8221245' => 'SEQUIÑO CLARK KENT AGOSTO',
    '8221315' => 'SONTOUSIDAD EDEN MAE YGOT',
    '8221316' => 'SONTOUSIDAD CARYL MAE YGOT',
    '8220848' => 'SUNIT ABEGAIL BELARMINO',
    '8220927' => 'SUNIT GRETCHEN VILLACARLOS',
    '8220831' => 'TORREVILLAS DENN CARLISLE',
    '8221255' => 'TUMABINI STEPHANIE VILLACARLOS',
    '8221366' => 'VALIENTE NIN KYLLE ALBARANDO',
    '8221241' => 'VELARDE NIÑA CARLA DUBLIN',
    '8220797' => 'VERDIDA JR. JOEL CASINILLO',
    '8221408' => 'YAUN JOSHRAEL',
    '8190489' => 'YONGCO JENNY CASINILLO',
    '8220846' => 'YTANG ANGELO RYAN S.'
    // Add more student IDs and names here
];

// Start a session to keep track of answered questions.
session_start();
header('Content-Type: text/html');

// Handle API requests from the JavaScript code
if (isset($_GET['action'])) {
    header('Content-Type: application/json');
    
    $action = $_GET['action'];
    $answered_count = $_SESSION['answered_count'] ?? 0;
    $total_questions = count($questions);

switch ($action) {
    case 'start':
        $_SESSION['answered_count'] = 0;
        $_SESSION['shuffled_questions'] = $questions;
        shuffle($_SESSION['shuffled_questions']);
        echo json_encode(['status' => 'ok']);
        exit;

    case 'getQuestion':
        if ($answered_count >= $total_questions) {
            echo json_encode(['finished' => true, 'total_questions' => $total_questions]);
            session_destroy();
            exit;
        }

        $current = $_SESSION['shuffled_questions'][$answered_count];
        $question_data = [
            'id' => $current['id'],
            'type' => $current['type'],
            'q' => $current['q'],
            'choices' => $current['choices'] ?? [],
            'total_questions' => $total_questions
        ];
        echo json_encode($question_data);
        exit;

    case 'submitAnswer':
        $data = json_decode(file_get_contents('php://input'), true);
        $user_answer = $data['user_answer'];
        $question_id = $data['question_id'];
        
        $question = null;
        foreach ($questions as $q) {
            if ($q['id'] == $question_id) {
                $question = $q;
                break;
            }
        }

        if ($question) {
            $correct = false;
            if ($question['type'] === 'fill') {
                $correct = (strtolower($question['answer']) === strtolower($user_answer));
            } elseif ($question['type'] === 'truefalse') {
                $correct = (strtolower($question['answer']) === strtolower($user_answer));
            } else {
                $correct = ($question['answer'] === $user_answer);
            }
            
            $_SESSION['answered_count'] = $answered_count + 1;
            echo json_encode([
                'correct' => $correct,
                'correct_answer' => $question['answer']
            ]);
        } else {
            echo json_encode(['error' => 'Question not found.']);
        }
        exit;

    case 'saveResult':
        // This is the action to save the quiz summary results
        $data = json_decode(file_get_contents('php://input'), true);
        $name = $data['name'] ?? 'Anonymous';
        $score = $data['score'] ?? 0;
        $total = $data['total'] ?? 0;
        $time = $data['time'] ?? 'N/A';
        $date = date('Y-m-d H:i:s');

        // Format the result string for the summary log
        $result_line = "Date: $date | Name: $name | Score: $score/$total | Time: $time\n";

        // Save the result to a file (quiz_results.txt)
        $file_path = 'quiz_results.txt';
        file_put_contents($file_path, $result_line, FILE_APPEND | LOCK_EX);

        echo json_encode(['status' => 'success', 'message' => 'Summary result saved successfully.']);
        exit;

    case 'saveStudentLog':
        // This is the new action to save the detailed student log
        $data = json_decode(file_get_contents('php://input'), true);
        $name = $data['name'] ?? 'Anonymous';
        $date = date('Y-m-d H:i:s');
        $incorrectAnswers = $data['incorrectAnswers'] ?? [];

        // Open the studentlogs.txt file for appending
        $log_file_path = 'studentlogs.txt';
        $log_handle = fopen($log_file_path, 'a');

        if ($log_handle) {
            // Write the header for the log entry
            fwrite($log_handle, "--- Student Log for $name on $date ---\n");
            
            // Log each incorrect answer
            if (count($incorrectAnswers) > 0) {
                foreach ($incorrectAnswers as $q) {
                    $log_line = "Question ID: {$q['id']} | Question: {$q['q']} | Your Answer: {$q['userAnswer']} | Correct Answer: {$q['correctAnswer']}\n";
                    fwrite($log_handle, $log_line);
                }
            } else {
                fwrite($log_handle, "Student answered all questions correctly.\n");
            }
            
            fwrite($log_handle, "\n"); // Add a blank line for readability
            fclose($log_handle);

            echo json_encode(['status' => 'success', 'message' => 'Detailed log saved successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Could not open log file.']);
        }
        exit;

    case 'getStudentName':
        $id = $_GET['id'] ?? '';
        $name = $students[$id] ?? '';
        echo json_encode(['name' => $name]);
        exit;

    case 'logTabLeave':
        $data = json_decode(file_get_contents('php://input'), true);
        $id = $data['id'] ?? 'UnknownID';
        $name = $data['name'] ?? 'Anonymous';
        $date = date('Y-m-d H:i:s');
        $log_line = "Date: $date | ID: $id | Name: $name | Event: Tab minimized or left\n";
        file_put_contents('tab_leave_logs.txt', $log_line, FILE_APPEND | LOCK_EX);
        echo json_encode(['status' => 'logged']);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Professor Dualos Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #f0f4f8, #c1d5e0);
            color: #333;
            margin: 0;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .container {
            width: 100%;
            max-width: 600px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #welcomeScreen, #quiz, #timer, #scoreboard {
            width: 100%;
        }

        #quiz, #timer {
            display: none;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
        }

        button, input[type="text"] {
            width: 100%;
            padding: 0.9rem 1.2rem;
            margin: 0.6rem 0;
            font-size: 1rem;
            border: 2px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        input[type="text"] {
            border: 2px solid #ddd;
        }
        
        input[type="text"]:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        }

        .primary-btn {
            background: #3498db;
            color: white;
            border: none;
            font-weight: 600;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(52, 152, 219, 0.3);
        }

        .primary-btn:hover {
            background: #2980b9;
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(52, 152, 219, 0.4);
        }
        
        .answer-btn {
            background: #ecf0f1;
            color: #2c3e50;
            font-weight: 400;
            text-align: left;
            border: 1px solid #bdc3c7;
            padding: 0.9rem 1.2rem;
        }
        
        .answer-btn:hover {
            background: #bdc3c7;
            transform: none;
            box-shadow: none;
        }

        .timer, .result, .scoreboard h2 {
            font-weight: 600;
            margin-top: 1.5rem;
            text-align: center;
        }

        .scoreboard h2 {
            font-size: 1.5rem;
            color: #2c3e50;
            margin-top: 2rem;
            border-bottom: 2px solid #bdc3c7;
            padding-bottom: 0.5rem;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
            width: 100%;
        }

        ul li {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 0.8rem 1rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }
            .container {
                padding: 1.5rem;
                margin-top: 0;
                box-shadow: none;
                border-radius: 0;
            }
        }
    </style>
</head>
<body>
    <h1>🧠 Quiz</h1>

    <div class="container" id="quiz-app">
        <div id="welcomeScreen">
            <p>Please enter your Student ID number to start the quiz:</p>
            <input type="text" id="idInput" placeholder="Enter your Student ID" />
            <input type="text" id="nameInput" placeholder="Name will appear here" readonly style="display:none;" />
            <button id="startBtn" class="primary-btn">▶️ Start Quiz</button>
        </div>
        
        <div class="timer" id="timer">Time left: 60s</div>
        <div id="quiz">
            <p id="question"></p>
            <div id="choices"></div>
            <div id="result" class="result"></div>
        </div>
        
        <div class="scoreboard" id="scoreboard">
            <h2>📋 Scoreboard</h2>
            <ul id="scoreList"></ul>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        let score = 0;
        let timeLeft = 60;
        let timerInterval;
        let studentName = "";
        let quizStartTime;
        let currentQuestion = null;
        // New array to store incorrect answers
        let incorrectAnswersLog = []; 
        let quizStarted = false; // Add this flag

        const startBtn = document.getElementById('startBtn');
        const qEl = document.getElementById('question');
        const cEl = document.getElementById('choices');
        const rEl = document.getElementById('result');
        const tEl = document.getElementById('timer');
        const quizEl = document.getElementById('quiz');
        const scoreList = document.getElementById('scoreList');
        const nameInput = document.getElementById('nameInput');
        const idInput = document.getElementById('idInput');
        const welcomeScreen = document.getElementById('welcomeScreen');
        const scoreboard = document.getElementById('scoreboard');

        function loadScoreboard() {
            const scores = JSON.parse(localStorage.getItem('quizScores') || '[]');
            scoreList.innerHTML = scores.map(s => `<li>${s.name} on ${s.date} — ${s.score}/${s.total} - Time: ${s.time}</li>`).join('');
        }

        // This is now for local storage only, and no longer sends to the server.
        function saveScore(score, total, time) {
            const scores = JSON.parse(localStorage.getItem('quizScores') || '[]');
            const now = new Date().toLocaleString();
            scores.unshift({ date: now, name: studentName, score, total, time });
            localStorage.setItem('quizScores', JSON.stringify(scores.slice(0, 10)));
        }

        // Auto-display name as you type the ID
idInput.addEventListener('input', async () => {
    const id = idInput.value.trim();
    if (id !== "") {
        const res = await fetch(`?action=getStudentName&id=${encodeURIComponent(id)}`);
        const data = await res.json();
        if (data.name) {
            nameInput.value = data.name;
            nameInput.style.display = 'block';
        } else {
            nameInput.value = "ID not found!";
            nameInput.style.display = 'block';
        }
    } else {
        nameInput.style.display = 'none';
    }
});

// Allow Enter key to start quiz from ID input
idInput.addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        startBtn.click();
    }
});

// Allow Enter key to start quiz from name input (if you ever make it editable)
nameInput.addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        startBtn.click();
    }
});

        startBtn.addEventListener('click', () => {
            const id = idInput.value.trim();
            const name = nameInput.value.trim();
            if (id === "") {
                alert("Please enter your Student ID number.");
                return;
            }
            if (name === "" || name === "ID not found!") {
                alert("Please enter a valid Student ID.");
                return;
            }
            studentId = id;
            studentName = name;
            welcomeScreen.style.display = 'none';
            quizEl.style.display = 'block';
            tEl.style.display = 'block';
            currentIndex = 0;
            score = 0;
            incorrectAnswersLog = [];
            quizStartTime = new Date();
            fetch('?action=start').then(() => getNextQuestion());
            quizStarted = true; // Set flag when quiz starts
        });

        async function getNextQuestion() {
            const response = await fetch('?action=getQuestion');
            const data = await response.json();

            if (data.finished) {
                endQuiz();
                return;
            }

            currentQuestion = data;
            showQuestion();
        }

        async function submitAnswer(answer) {
            clearInterval(timerInterval);
            
            const response = await fetch('?action=submitAnswer', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ question_id: currentQuestion.id, user_answer: answer })
            });
            const data = await response.json();

            if (data.correct) {
                score++;
                rEl.textContent = "✅ Correct!";
            } else {
                // Log the incorrect answer
                incorrectAnswersLog.push({
                    id: currentQuestion.id,
                    q: currentQuestion.q,
                    userAnswer: answer,
                    correctAnswer: data.correct_answer
                });
                rEl.textContent = `❌ Incorrect. Correct: ${data.correct_answer}`;
            }
            
            setTimeout(getNextQuestion, 1000);
        }
        
        function showQuestion() {
            timeLeft = 60;
            tEl.textContent = `Time left: ${timeLeft}s`;
            clearInterval(timerInterval);
            timerInterval = setInterval(() => {
                timeLeft--;
                tEl.textContent = `Time left: ${timeLeft}s`;
                if (timeLeft <= 0) {
                    clearInterval(timerInterval);
                    rEl.textContent = "⏱️ Time's up!";
                    setTimeout(getNextQuestion, 1000);
                }
            }, 1000);

            qEl.textContent = currentQuestion.q;
            cEl.innerHTML = "";
            rEl.textContent = "";

            if (currentQuestion.type === "multiple") {
                currentQuestion.choices.forEach((choice) => {
                    const btn = document.createElement('button');
                    btn.className = "answer-btn";
                    btn.textContent = choice;
                    btn.onclick = () => submitAnswer(choice);
                    cEl.appendChild(btn);
                });
            } else if (currentQuestion.type === "truefalse") {
                ["True", "False"].forEach((val) => {
                    const btn = document.createElement('button');
                    btn.className = "answer-btn";
                    btn.textContent = val;
                    btn.onclick = () => submitAnswer(val);
                    cEl.appendChild(btn);
                });
            } else if (currentQuestion.type === "fill") {
                const input = document.createElement('input');
                input.type = "text";
                input.placeholder = "Type your answer...";
                cEl.appendChild(input);

                const submitBtn = document.createElement('button');
                submitBtn.className = "primary-btn";
                submitBtn.textContent = "Submit";
                submitBtn.onclick = () => submitAnswer(input.value.trim());
                cEl.appendChild(submitBtn);

                // Allow Enter key to submit answer
                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Enter') {
                        submitBtn.click();
                    }
                });

                // Autofocus for better UX
                input.focus();
            }
        }

        function endQuiz() {
            clearInterval(timerInterval);
            const quizEndTime = new Date();
            const totalTimeInMs = quizEndTime - quizStartTime;
            const totalSeconds = Math.floor(totalTimeInMs / 1000);
            const minutes = Math.floor(totalSeconds / 60);
            const seconds = totalSeconds % 60;
            const formattedTime = `${minutes}m ${seconds}s`;

            qEl.textContent = "🎉 Quiz Complete!";
            cEl.innerHTML = "";
            rEl.innerHTML = `Your score: ${score} / ${currentQuestion.total_questions}<br>Total time: ${formattedTime}`;
            tEl.style.display = 'none';
            
            // Send the main quiz results to quiz_results.txt
            fetch('?action=saveResult', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    name: studentName,
                    score: score,
                    total: currentQuestion.total_questions,
                    time: formattedTime
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Summary saved:', data);
            })
            .catch(error => {
                console.error('Error saving summary:', error);
            });

            // Send the detailed log of incorrect answers to studentlogs.txt
            fetch('?action=saveStudentLog', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    name: studentName,
                    incorrectAnswers: incorrectAnswersLog
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Detailed log saved:', data);
            })
            .catch(error => {
                console.error('Error saving detailed log:', error);
            });

            // Save score to local storage for scoreboard display
            saveScore(score, currentQuestion.total_questions, formattedTime);
            loadScoreboard();
            quizStarted = false; // Prevent tab leave logging after quiz is done
        }

document.addEventListener('visibilitychange', function() {
    if (document.visibilityState === 'hidden') {
        if (quizStarted) { // Only log if quiz has started
            fetch('?action=logTabLeave', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    id: idInput.value.trim(),
                    name: nameInput.value.trim()
                })
            });

            // Reset quiz state
            score = 0;
            currentIndex = 0;
            incorrectAnswersLog = [];
            quizEl.style.display = 'none';
            tEl.style.display = 'none';
            welcomeScreen.style.display = 'block';
            rEl.textContent = '';
            qEl.textContent = '';
            cEl.innerHTML = '';
            alert("Quiz stopped because you switched tabs or minimized the browser. Please start again.");
            quizStarted = false; // Reset flag
        }
    }
});

        loadScoreboard();
    </script>
</body>
</html>
