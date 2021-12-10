def saque(pontos):
    """
    Essa função tem como objetivo servir para realizar os cáculos de qual será jogador que irá sacar no momento.
    :param pontos: Objeto textual, que vem com as pontuações de ambos os jogadores de ambos os jogadores,
    dividos por ":". A divisão será feita pela variável "p", que indicará o índice para divisão, e
    "jogador1" e "jogador2", que definirão os valores inteiros baseados no índica.
    :return: Retorna o nome do jogador que fará o saque.
    """
    p = pontos.find(':')

    jogador1 = int(pontos[:p])
    jogador2 = int(pontos[1 + p:])
    soma = int(jogador1 + jogador2)
    cont = 0

    if soma <= 40:
        for x in range(5, soma + 1, 5):
            cont += 1
    else:
        for x in range(42, soma + 1, 2):
            cont += 1

    if cont % 2 != 0:
        return "jogador b"
    else:
        return "jogador a"


pontos = input('Digite o valor dividido por ":" - ')
print(saque(pontos))
