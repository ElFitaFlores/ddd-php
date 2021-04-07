<?php


namespace CodelyTv\Mooc\Courses\Domain;


interface CourseRepository
{

    public function save(Course $course): void;
}