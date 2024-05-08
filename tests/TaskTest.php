<?php


use App\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    protected $task;
    protected function setUp(): void
    {
        $this->task = new Task();
    }

    public function test_string_number1()
    {
        $this->assertEquals('Ам-ам лым-А Умар-Умаранап', $this->task->reverseWords("Ма-ма мыл-А Раму-Панараму"));
    }

    public function test_string_number2()
    {
        $this->assertEquals('Tac', $this->task->reverseWords('Cat'));
    }

    public function test_string_number3()
    {
        $this->assertEquals('Ьшым', $this->task->reverseWords('Мышь'));
    }

    public function test_string_number4()
    {
        $this->assertEquals('esuOh', $this->task->reverseWords('houSe'));
    }

    public function test_string_number5()
    {
        $this->assertEquals('кимОД', $this->task->reverseWords('домИК'));
    }

    public function test_string_number6()
    {
        $this->assertEquals('кимОД', $this->task->reverseWords('домИК'));
    }

    public function test_string_number7()
    {
        $this->assertEquals('Амиз:', $this->task->reverseWords('Зима:'));
    }

    public function test_string_number8()
    {
        $this->assertEquals( "si 'dloc' won", $this->task->reverseWords("is 'cold' now"));
    }

    public function test_string_number9()
    {
        $this->assertEquals( 'отэ «Кат» "отсорп"', $this->task->reverseWords( 'это «Так» "просто"'));
    }

    public function test_string_number10()
    {
        $this->assertEquals( "Ытсет ьсиличнок", $this->task->reverseWords("Тесты кончились"));
    }

}
