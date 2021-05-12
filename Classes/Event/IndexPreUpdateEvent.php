<?php

namespace HDNET\Calendarize\Event;

final class IndexPreUpdateEvent
{
    private array $neededItems;
    private string $tableName;
    private int $uid;

    public function __construct(array $neededItems, string $tableName, int $uid)
    {
        $this->neededItems = $neededItems;
        $this->tableName = $tableName;
        $this->uid = $uid;
    }

    public function getNeededItems(): array
    {
        return $this->neededItems;
    }

    public function setNeededItems(array $neededItems): void
    {
        $this->neededItems = $neededItems;
    }

    public function getTableName(): string
    {
        return $this->tableName;
    }

    public function getUid(): int
    {
        return $this->uid;
    }
}
