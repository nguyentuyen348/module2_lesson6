<?php
class Circle
{
    public int $radius;
    public string $name;

    public function __construct(string $name, int $radius)
    {
        $this->radius = $radius;
        $this->name = $name;
    }
}