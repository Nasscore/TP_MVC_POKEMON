<?php

class Pokemon
{

    private string $name;
    private string $logoSprites;
    private string $logoArtwork;
    private int $order;
    private array $type;



    /**
     *Pokemon constructor
     * @param string $name
     * @param string $logoSprites
     * @param string $logoArtwork
     * @param int $order
     * @param array $type
     */

    public function __construct(string $name, string $logoSprites, string $logoArtwork, int $order, array $type)
    {
        $this->name = $name;
        $this->logoSprites = $logoSprites;
        $this ->logoArtwork = $logoArtwork;
        $this->order = $order;
        $this->type = $type;
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