<?php


class User
{
    private int $id;
    private int $firstName;
    private int $lastName;
    private int $email;
    private int $password;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }


    /**
     * @return int
     */
    public function getFirstName(): int
    {
        return $this->firstName;
    }

    /**
     * @param int $firstName
     */
    public function setFirstName(int $firstName): void
    {
        $this->firstName = $firstName;
    }

    /**
     * @return int
     */
    public function getLastName(): int
    {
        return $this->lastName;
    }

    /**
     * @param int $lastName
     */
    public function setLastName(int $lastName): void
    {
        $this->lastName = $lastName;
    }

    /**
     * @return int
     */
    public function getEmail(): int
    {
        return $this->email;
    }

    /**
     * @param int $email
     */
    public function setEmail(int $email): void
    {
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getPassword(): int
    {
        return $this->password;
    }

    /**
     * @param int $password
     */
    public function setPassword(int $password): void
    {
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getCreatedAt(): int
    {
        return $this->created_at;
    }



    /**
     * @return int
     */
    public function getLastConnectedAt(): int
    {
        return $this->last_connected_at;
    }

    /**
     * @param int $last_connected_at
     */
    public function setLastConnectedAt(int $last_connected_at): void
    {
        $this->last_connected_at = $last_connected_at;
    }
    private int $created_at;
    private int $last_connected_at;

    /**
     * User constructor.
     * @param int $id
     * @param int $firstName
     * @param int $lastName
     * @param int $email
     * @param int $password
     */
    public function __construct(int $id, int $firstName, int $lastName, int $email, int $password)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

}