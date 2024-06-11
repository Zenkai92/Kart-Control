<?php

class compo
{
    private int $id;

    private string $bodies;

    private string $tires;

    private string $gliders;

    private string $drivers;

    private string $user_id;


 
    public function __construct(array $data)
    {
        $this->hydrate($data);
    } 

    public function hydrate(array $data) {
        foreach ($data as $cle => $value) {
            $method = "set" . ucfirst($cle);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }


    /**
     * Get the value of id
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of bodies
     */
    public function getBodies(): string
    {
        return $this->bodies;
    }

    /**
     * Set the value of bodies
     */
    public function setBodies(string $bodies): self
    {
        $this->bodies = $bodies;

        return $this;
    }

    /**
     * Get the value of tires
     */
    public function getTires(): string
    {
        return $this->tires;
    }

    /**
     * Set the value of tires
     */
    public function setTires(string $tires): self
    {
        $this->tires = $tires;

        return $this;
    }

    /**
     * Get the value of gliders
     */
    public function getGliders(): string
    {
        return $this->gliders;
    }

    /**
     * Set the value of gliders
     */
    public function setGliders(string $gliders): self
    {
        $this->gliders = $gliders;

        return $this;
    }

    /**
     * Get the value of drivers
     */
    public function getDrivers(): string
    {
        return $this->drivers;
    }

    /**
     * Set the value of drivers
     */
    public function setDrivers(string $drivers): self
    {
        $this->drivers = $drivers;

        return $this;
    }

    /**
     * Get the value of user_id
     */
    public function getUserId(): string
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     */
    public function setUserId(string $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }
}
