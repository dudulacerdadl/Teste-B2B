<?php

namespace Bis2bis;
require_once 'Bis2bis/PingPongInterface.php';

class PingPong implements PingPongInterface
{
    /** Variavel a retornar quando o jogador a sacar for o jogador A */
    public $playerA = "Jogador A";
    /** Variavel a retornar quando o jogador a sacar for o jogador B */
    public $playerB = "Jogador B";
    /** Variavel a receber o jogador vencedor (use a referencia das variaveis acima) */
    public $winner = null;

    public function parseScore($scores): array {
        $points = explode(":", $scores);
        return $points;
    }

    public function turn($score): string {
        $points = $this->parseScore($score);
        $pointA = intval($points[0]);
        $pointB = intval($points[1]);
        $sum = $pointA + $pointB;
        $count = 0;

        if ($pointA < 20 && $pointB < 20) {
            for ($i = 0; $i < $sum + 1; $i += 5) {
                $count++;
            }
        } else {
            for ($i = 40; $i < $sum + 1; $i += 2) { 
                $count++;
            }
        }

        if ($count % 2 != 0) {
            return $this->playerA;
        } else {
            return $this->playerB;
        }
    }
}
