<?php

namespace Patterns\Compound\Ducks;

class DuckSimulator
{
    public function simulate(AbstractDuckFactory $duckFactory)
    {
        $redheadDuck = $duckFactory->createRedheadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = new GooseAdapter(new Goose());

        $flockOfDucks = new Flock();
        $flockOfDucks->add($redheadDuck);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($gooseDuck);

        $mallardOne = $duckFactory->createMallardDuck();
        $mallardTwo = $duckFactory->createMallardDuck();
        $mallardThree = $duckFactory->createMallardDuck();
        $mallardFour = $duckFactory->createMallardDuck();

        $flockOfMallards = new Flock();
        $flockOfMallards->add($mallardOne);
        $flockOfMallards->add($mallardTwo);
        $flockOfMallards->add($mallardThree);
        $flockOfMallards->add($mallardFour);

        $flockOfDucks->add($flockOfMallards);

        /*
        echo PHP_EOL . 'Duck Simulator: Whole Flock Simulation' . PHP_EOL;
        $this->simulateQuackable($flockOfDucks);

        echo PHP_EOL . 'Duck Simulator: Mallard Flock Simulation' . PHP_EOL;
        $this->simulateQuackable($flockOfMallards);
        */
        echo PHP_EOL . 'Duck Simulator: With Observer' . PHP_EOL;
        $quackologist = new Quackologist();
        $flockOfDucks->registerObserver($quackologist);

        $this->simulateQuackable($flockOfDucks);

        echo 'The ducks quacked ' . QuackCounter::getQuacks() . ' times' . PHP_EOL;
    }

    public function simulateQuackable(Quackable $duck): void
    {
        $duck->quack();
    }
}