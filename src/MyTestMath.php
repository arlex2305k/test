<?php
declare(strict_types=1);

namespace Arlex2305k\Test;

class MyTestMath
{
    /**
     * Рекурсивный метод для расчета факториала числа
     * @param int $n
     * @return int
     */
    public static function factorial(int $n): int
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('Факториал не определен для отрицательных чисел');
        }
        
        if ($n == 0 || $n == 1) {
            return 1;
        }
        
        return $n * self::factorial($n - 1);
    }
}