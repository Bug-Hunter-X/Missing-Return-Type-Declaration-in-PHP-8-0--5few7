function foo(int $a, int $b): int { return $a + $b; }  // Correct function signature

function bar(int $a, int $b) { return $a + $b; } // Missing return type declaration