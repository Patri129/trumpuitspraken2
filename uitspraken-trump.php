<?php

?>

<html DOCTYPE>
<head>
<?php
/**
 * Applicatie: Uitspraken Trump
 */
?>
</head>


<body>

<!-- HTML Formulier om de gebruiker te vragen wat trump moet zeggen -->
<form action="/action_page.php" method="get">
    First name:<br>
  <input type='text' name='first_name'>
  <br>
  <input type="submit" value="Laat Trump iets zeggen nu">
</form>

<?php
/** @var TYPE_NAME $first_name */
if (!empty($first_name)) {
    $first_name = $_GET['first_name'];
}
if (isset($first_name)) {
    print($first_name);
}

//array met alle uitspraken die trump in deze applicatie kan doen
$uitspraak = array (
    1 => 'Heidi Klum. Sadly, she’s no longer a 10.',
    2 => 'He is the founder of ISIS. He’s the founder of ISIS, OK? He’s the founder. He founded ISIS and I would say the co-founder would be crooked Hillary Clinton.',
    3 => 'They will soon be calling me MR. BREXIT!',
    4 => 'She [Alicia Machado, voormalig Miss Venezuela, red.] was the winner and she gained a massive amount of weight, and it was a real problem.',
    5 => 'Hillary Clinton is taking the day off again, she needs the rest. Sleep well Hillary - see you at the debate!',
    6 => 'Mexico will pay for the wall!',
    7 => 'I feel like a supermodel except, like, times 10, OK? It’s true. I’m a supermodel.',
    8 => '[Putin] called me a genius, I like him so far, I have to tell you.',
    9 => 'Such a nasty woman.',
    10 => 'You’d be in jail'

);

//gebruikersinvoer opvragen
function opvragen() {
    $uitspraak = $_POST('uitspraak');
}

//Een willekeurige uitspraak trekken uit de array
//

//De uitspraak op het scherm tonen
//

?>
</body>
</html>