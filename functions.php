<?php


function getMonsters()
{
$monster1 = new Monster("Andrea", 100, 100, "water");
$monster2 = new Monster("Mehdi", 100, 100, "water");
$monster3 = new Monster("Gus", 100, 100, "water");
$monster4 = new Monster("Gogo", 100, 100, "water");
$monsters = [$monster1, $monster2, $monster3, $monster4];

return $monsters;
}

function getMonstersBDD() {

        try {
        $myPDO = new PDO('mysql:host=localhost;dbname=MonsterLeague', 'root','root');
}   
catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
              $result=$myPDO->query("SELECT * FROM Monsters");
              $monsters = array();


        while($donnes= $result -> fetch()){
                          $monsters[] = new Monster($donnes['name'], $donnes['age'], $donnes['weight'],$donnes['bio'], $donnes['strength']);
        }

        ;
        return $monsters;
    }

/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
function fight(array $firstMonster, array $secondMonster)
{
    $firstMonsterLife = $firstMonster['life'];
    $secondMonsterLife = $secondMonster['life'];

    while ($firstMonsterLife > 0 && $secondMonsterLife > 0) {
        $firstMonsterLife = $firstMonsterLife - $secondMonster['strength'];
        $secondMonsterLife = $secondMonsterLife - $firstMonster['strength'];
    }

    if ($firstMonsterLife <= 0 && $secondMonsterLife <= 0) {
        $winner = null;
        $looser = null;
    } elseif ($firstMonsterLife <= 0) {
        $winner = $secondMonster;
        $looser = $firstMonster;
    } else {
        $winner = $firstMonster;
        $looser = $secondMonster;
    }

    return array(
        'winner' => $winner,
        'looser' => $looser,
    );
}
