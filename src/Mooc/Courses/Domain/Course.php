<?php


namespace CodelyTv\Mooc\Courses\Domain;


final class Course
{
    private string $id;
    private string $name;
    private string $duration;

    /**
     * Courses constructor.
     * @param string $id
     * @param string $name
     * @param string $duration
     */
    public function __construct(string $id, string $name, string $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->duration = $duration;
    }
}