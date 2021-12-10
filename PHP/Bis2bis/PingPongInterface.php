<?php

namespace Bis2bis;

interface PingPongInterface
{
    /**
     * Essa funcao deve retornar qual jogador e o proximo a sacar ou o vencedor
     *
     * @param  String $score
     * @return String
     */
    public function turn($score): string;

    /**
     * Essa funcao deve tratar os inputs retornando 2 valores.
     *
     * @param  String $scores
     * @return array
     */
    public function parseScore($scores): array;
}
