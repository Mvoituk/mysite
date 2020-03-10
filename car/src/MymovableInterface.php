<?php


namespace car;
require "MovableInterface.php";

interface MymovableInterface extends MovableInterface
{
    /**
     * Включает заднюю передачу
     * @return mixed
     */
    public function moveback();

    /**
     * Поворачивает налево
     * @return mixed
     */
    public function moveleft();

    /**
     * Поворачивает направо
     * @return mixed
     */
    public function moveright();
}