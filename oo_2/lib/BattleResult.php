<?php

class BattleResult
{
private $usedJediPowers;
private $winningShip;
private $losingShip;

    /**
     * @param Ship $winningShip
     * @param Ship $losingShip
     * @param boolean $usedJediPowers
     */
public function __construct($usedJediPowers, Ship $winningShip, Ship $losingShip)
{
    $this->usedJediPowers = $usedJediPowers;
    $this->winningShip = $winningShip;
    $this->losingShip =$losingShip;
}

    /**
     * @return boolean
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return Ship
     */
    public function getWinningShip(): Ship
    {
        return $this->winningShip;
    }

    /**
     * @return Ship
     */
    public function getLosingShip(): Ship
    {
        return $this->losingShip;
    }

}