<?php
namespace App\Entity;

use App\Visitor\Entity;
use DateTime;

interface OrderInterface
{
    /**
     * @return UserInterface
     */
    public function getUser(): UserInterface;

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime;

    /**
     * @return array
     */
    public function getItems(): array;

    /**
     * @return string
     */
    public function getFormattedDate(): string;
}
