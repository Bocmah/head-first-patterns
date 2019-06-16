<?php

namespace Patterns\Composite\Diner;

use SplStack;

class CompositeIterator implements Iterator
{
    private $stack;

    public function __construct(Iterator $iterator)
    {
        $this->stack = new SplStack();
        $this->stack->push($iterator);
    }

    /**
     * @return MenuComponent|null
     */
   public function next()
   {
       if ($this->hasNext()) {
           /** @var Iterator $iterator */
           $iterator = $this->stack->top();

           /** @var MenuComponent $component */
           $component = $iterator->next();

           if ($component instanceof Menu) {
               $this->stack->push($component->createIterator());
           }

           return $component;
       } else {
           return null;
       }
   }

    /**
     * @return bool
     */
   public function hasNext(): bool
   {
       if ($this->stack->isEmpty()) {
           return false;
       } else {
           /** @var Iterator $iterator */
           $iterator = $this->stack->top();
           if (!$iterator->hasNext()) {
               $this->stack->pop();
               return $this->hasNext();
           } else {
               return true;
           }
       }
   }

    /**
     * @throws UnsupportedOperationException
     */
    public function remove()
    {
        throw new UnsupportedOperationException();
    }
}