<?php
//
//// Hier gebe ich plump nur den Inhalt einer Datei aus.
//echo file_get_contents(__DIR__.'/../index.html');
$list = [
    0 => 1,
    1 => 2,
    2 => 3,
    3 => 4,
];

echo "<ul>";
for ($i = 0; $i < count($list); $i++) {
    if ($i !== 2) {
        doSomething("<li>ich bin eine zwei</li>" . PHP_EOL);
    } elseif ($i !== 3) {
        echo "<li>Bin 3</li>";
    }

    switch ($i) {
        case 2:
        case 1:
            echo "<li>ich bin eine zwei</li>" . PHP_EOL;
            break;
        case 3:
            echo "<li>ich bin eine drei</li>" . PHP_EOL;
            break;
        default:
            echo 'sonstiges';
    }
    echo "<li>KEY: $i: ";
    echo $list[$i] . '</li>' . PHP_EOL;
}
echo "</ul>";

$builded = buildSomething();

doSomething($builded);

$fritz = new Cat();
$hans = new Cat();

$fritz->name = 'Fritz';
$hans->name = 'Hans';

$calli = new Dog();
$calli->temperature = '30.5';
letCatMiau($hans);
letCatMiau($fritz);
echo PHP_EOL;

printTemperatureOfAnimal($calli);

class Animal
{
    public $temperature;
}

class Cat extends Animal
{
    public $name;
    private $owner;
    protected $sister;

    public function doMiau(): void
    {
        echo "miau: " . $this->name;
    }
}

class Dog extends Animal
{
    public $name;
}

function doSomething(string $text): void
{
    echo $text;
}

function buildSomething(): string
{
    return (string) rand(0, 4);
}

function letCatMiau(Cat $cat): void
{
    $cat->doMiau();
}

function printTemperatureOfAnimal(Animal $animal): string
{
    return $animal->temperature;
}