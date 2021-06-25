<?php

class Pokemon
{

    private string $name;
    private string $logoSprites;
    private string $logoArtwork;
    private int $order;
    private array $type;
    private int $id;


    /**
     *Pokemon constructor
     * @param string $name
     * @param string $logoSprites
     * @param string $logoArtwork
     * @param int $order
     * @param array $type
     * @param int $id

     */

    public function __construct(string $name, string $logoSprites, string $logoArtwork, int $order, array $type, int $id)
    {
        $this->name = $name;
        $this->logoSprites = $logoSprites;
        $this ->logoArtwork = $logoArtwork;
        $this->order = $order;
        $this->type = $type;
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getStats(): array
    {
        return $this->stats;
    }
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLogoSprites(): string
    {
        return $this->logoSprites;
    }

    /**
     * @return string
     */
    public function getLogoArtwork(): string
    {
        return $this->logoArtwork;
    }

    /**
     * @return int
     */
    public function getOrder(): int
    {
        return $this->order;
    }

    /**
     * @return array
     */
    public function getType(): array
    {
        return $this->type;
    }


}