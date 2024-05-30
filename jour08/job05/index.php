<!-- index.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job 05</title>
    <style>
        table { border-collapse: collapse; }
        td { border: 1px solid black; width: 50px; height: 50px; text-align: center; }
        form { display: inline; }
    </style>
</head>
<body>
    <h3>Job 05</h3>
    <p>Développez le fameux jeu du morpion...</p>
    
    <?php
    session_start();

    // Initialize the game
    if (!isset($_SESSION['board']) || isset($_POST['reset'])) {
        $_SESSION['board'] = array_fill(0, 3, array_fill(0, 3, '-'));
        $_SESSION['player'] = 'X';
        $_SESSION['message'] = '';
    }

    // Handle button click
    if (isset($_POST['cell']) && $_SESSION['message'] == '') {
        $cell = explode(',', $_POST['cell']);
        $row = $cell[0];
        $col = $cell[1];

        if ($_SESSION['board'][$row][$col] == '-') {
            $_SESSION['board'][$row][$col] = $_SESSION['player'];
            $_SESSION['player'] = $_SESSION['player'] == 'X' ? 'O' : 'X';
        }

        // Check for a winner
        $winner = checkWinner($_SESSION['board']);
        if ($winner) {
            $_SESSION['message'] = "$winner a gagné!";
        } elseif (isDraw($_SESSION['board'])) {
            $_SESSION['message'] = "Match nul!";
        }
    }

    // Display the board
    echo '<table>';
    for ($row = 0; $row < 3; $row++) {
        echo '<tr>';
        for ($col = 0; $col < 3; $col++) {
            echo '<td>';
            echo '<form method="post" action="index.php">';
            echo '<input type="hidden" name="cell" value="'.$row.','.$col.'">';
            echo '<button type="submit">'.$_SESSION['board'][$row][$col].'</button>';
            echo '</form>';
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';

    // Display message
    if ($_SESSION['message']) {
        echo '<p>' . $_SESSION['message'] . '</p>';
    }

    // Reset button
    echo '<form method="post" action="index.php">';
    echo '<button type="submit" name="reset">Réinitialiser la partie</button>';
    echo '</form>';

    // Check for a winner
    function checkWinner($board) {
        // Check rows and columns
        for ($i = 0; $i < 3; $i++) {
            if ($board[$i][0] != '-' && $board[$i][0] == $board[$i][1] && $board[$i][1] == $board[$i][2]) {
                return $board[$i][0];
            }
            if ($board[0][$i] != '-' && $board[0][$i] == $board[1][$i] && $board[1][$i] == $board[2][$i]) {
                return $board[0][$i];
            }
        }
        // Check diagonals
        if ($board[0][0] != '-' && $board[0][0] == $board[1][1] && $board[1][1] == $board[2][2]) {
            return $board[0][0];
        }
        if ($board[0][2] != '-' && $board[0][2] == $board[1][1] && $board[1][1] == $board[2][0]) {
            return $board[0][2];
        }
        return null;
    }

    // Check for a draw
    function isDraw($board) {
        foreach ($board as $row) {
            if (in_array('-', $row)) {
                return false;
            }
        }
        return true;
    }
    ?>
</body>
</html>
