<?php
use Nelmio\Alice\Loader\NativeLoader;

class Data {
    public $average_rating_students;
    public $activity_for_year;
    public $students_groups2018;
    public $students_groups2019;
    public $students_groups2020;
    public $students_groups2021;
    public $students_groups2022;
}
$loader = new NativeLoader();
$fixtures = $loader->loadFile(__DIR__ . '/fixtures.yml');

?>
