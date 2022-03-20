<?php

class BattleResult
{
private  $wereJediPowersUsed;
private  $winningShip;
private  $losingShip;

    /**
     * @param boolean $wereJediPowersUsed
     * @param Ship|null $winningShip
     * @param Ship|null $losingShip
     */
public function __construct(bool $wereJediPowersUsed, Ship $winningShip = null, Ship $losingShip = null)
{
    $this->wereJediPowersUsed = $wereJediPowersUsed;
    $this->winningShip = $winningShip;
    $this->losingShip =$losingShip;
}

//Getters to access the private properties from outside this class:

    /**
     * @return bool
     */
    public function wereJediPowersUsed(): bool
    {
        return $this->wereJediPowersUsed;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip(): ?Ship
    {
        return $this->winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip(): ?Ship
    {
        return $this->losingShip;
    }

    /**
     * Was there a winner? Or did everybody die :(
     *
     * @return bool
     */
    public function isThereAWinner():bool
    {
        return $this->getWinningShip() !== null;
    }
}