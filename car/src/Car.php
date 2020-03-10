<?php


namespace car;

require "MymovableInterface.php";

class Car implements MymovableInterface
{

    public $speed=0;
    public $maxspeed=250;
    public $minspeed=0;

    /**
     * @inheritDoc
     */
    public function start()
    {
        echo "Включилось зажигание автомобиля" . "\n";
    }

    /**
     * @inheritDoc
     */
    public function stop()
    {
        echo "Выключилось зажигание автомобиля" . "\n";
    }

    /**
     * @inheritDoc
     */
    public function up()
    {
        if ($this->speed < $this->maxspeed){

            $this->speed += 10;
            echo "Скорость автомобиля увеличилась на 10 км/час, он движется со скоростью: " . $this->speed . " км/час" . "\n";

        } else {
            echo "Автомобиль достиг максимальной скорости 250 км/час, которую он не способен превысить" . "\n";
        }
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        if ($this->speed > $this->minspeed){

            $this->speed-=10;
            echo "Скорость автомобиля уменшилась на 10 км/час, эго скорость: " . $this->speed . " км/час" . "\n";

        } else {
            echo "Автомобиль достиг минимальной скорости 0 км/час, и остановился" . "\n";
        }
    }

    /**
     * @inheritDoc
     */
    public function moveback()
    {
        echo "Включилась задняя передача, автомобиль движется назад" . "\n";
    }

    /**
     * @inheritDoc
     */
    public function moveleft()
    {
        echo "Автомобиль поворачивает налево" . "\n";
    }

    /**
     * @inheritDoc
     */
    public function moveright()
    {
        echo "Автомобиль поворачивает направо" . "\n";
    }
}