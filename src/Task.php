<?php

namespace App;

class Task
{
    /**
     * @param string $input поместите строку для изменения
     * @return string результат изменения
     */
    public function reverseWords(string $input): string
    {
        $bigSymbolsIndex = $this->getBigSymbolIndex($input);
        $stringReversed = preg_replace_callback('#([A-Za-zА-Яа-я]+)#u', ['App\Task', 'revFirst'], $input);
        return $this->stringMutate($bigSymbolsIndex, $stringReversed);
    }

    private function utf8Strrev(string $str): string
    {
        preg_match_all('/./us', $str, $ar);
        return implode(array_reverse($ar[0]));
    }

    private function revFirst(array $matches): string
    {
        return $this->utf8Strrev($matches[1]);
    }

    private function getBigSymbolIndex(string $input)
    {
        $result = [];
        foreach (mb_str_split($input) as $key => $value){
            if (mb_strtolower($value) !== $value){
                $result[] = $key;
            }
        }
        return $result;
    }

    private function stringMutate(array $bigSymbolsIndex, string $stringReversed): string
    {
        $result = '';
        foreach (mb_str_split($stringReversed) as $key => $symbol){
            if(in_array($key, $bigSymbolsIndex)){
                $result .= mb_strtoupper($symbol);
            }else{
                $result .= mb_strtolower($symbol);
            }
        }
       return $result;
    }
}

// пример использования
$task = new Task();
var_dump($task->reverseWords("Ма-ма мыл-А Раму-Панараму"));



