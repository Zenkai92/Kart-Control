<?php

class compo
{
    private int $id;

    private string $title;

    private string $content;

    private int $compo_id;

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
     * Get the value of title
     */
    public function gettitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function settitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of content
     */
    public function getcontent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     */
    public function setcontent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the value of compo_id
     */
    public function getcompo_id(): string
    {
        return $this->compo_id;
    }

    /**
     * Set the value of compo_id
     */
    public function setcompo_id(string $compo_id): self
    {
        $this->compo_id = $compo_id;

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
