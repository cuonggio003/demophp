<?php
class Fan
{
    public const SLOW = 1;
    public const MEDIUM = 2;
    public const FAST = 3;

    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5.0;
    private $color = "blue";

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getSeed()
    {
        return $this->speed;
    }

    public function toString()
    {
        echo "<br />";
        if ($this->on) {
            echo "fan is on <br />";
            echo "speed: " . $this->getSeed() . "<br />";
            echo "radius: " . $this->radius . "<br />";
            echo "color: " . $this->color . "<br />";

        }else {
            echo "fan is off <br />";
            echo "speed: " . $this->getSeed() . "<br />";
            echo "radius: " . $this->radius . "<br />";
            echo "color: " .  $this->color . "<br />";
        }
    }
}
?>