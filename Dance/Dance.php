<?php
class Dance
{
    public string $name;
    public string $gender;

    /**
     * @param string $name
     * @param string $gender
     */
    public function __construct(string $name, string $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}