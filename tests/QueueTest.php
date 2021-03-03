<?php

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase
{
    protected function setUp(): void
    {
        $this->queue = new Queue;
    }

    protected function tearDown(): void
    {
        unset($this->queue);
    }

    public function testNewQueueIsEmpty()
    {
        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testAnItemAddedToTheQueue()
    {
        $this->queue->push('Blue');
        $this->assertEquals(1, $this->queue->getCount());
    }

    public function testAnItemRemovedFromTheQueue()
    {
        $this->queue->push('Blue');
        $color = $this->queue->pop();
        $this->assertEquals(0, $this->queue->getCount());
        $this->assertEquals('Blue', $color);
    }
}
