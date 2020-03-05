<?php

$joaozinho = new Joaozinho();
foreach (range(1, 10) as $numero) {
    echo "<p>{$numero}ª chamada -> " . $joaozinho->oQueAconteceu() . '</p>';
}

class Joaozinho
{
    private $mordida = null;

    /**
     * Retorna uma string explicando o que ocorreu com o Joãozinho
     *
     * @return string
     */
    public function oQueAconteceu(): string
    {
        $string = 'Joãozinho mordeu o seu dedo!';
        if (!$this->foiMordido()) {
            $string = 'Joãozinho NÃO mordeu o seu dedo!';
        }

        return $string;
    }

    /**
     * Verifica se o Joãozinho foi mordido com 50% de chance para TRUE/FALSE
     *
     * @return bool
     */
    public function foiMordido(): bool
    {
        if (is_null($this->mordida)) {
            $this->mordida = (bool) mt_rand(0, 1);
            return $this->mordida;
        }

        return $this->alterarOcorrido();
    }

    /**
     * Inverte a situação atual do atributo mordida para retorná-lo e depois reset seu status
     *
     * @return bool
     */
    private function alterarOcorrido(): bool
    {
        $mordidaAlterada = !$this->mordida;
        $this->mordida = null;

        return $mordidaAlterada;
    }
}
