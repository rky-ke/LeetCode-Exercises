<?php

require __DIR__ . '/plusOne.php';

$solution = new Solution();

$tests = [
    // Problem examples
    [[1, 2, 3], [1, 2, 4]],
    [[4, 3, 2, 1], [4, 3, 2, 2]],
    [[9], [1, 0]],

    // Carry propagation cases
    [[2, 9, 8], [2, 9, 9]],
    [[1, 9, 9], [2, 0, 0]],
    [[9, 9, 9], [1, 0, 0, 0]],

    // Additional normal cases
    [[0], [1]],
    [[8], [9]],
    [[1, 0, 0, 0], [1, 0, 0, 1]],
];

$passed = 0;
$total = count($tests);

foreach ($tests as $index => [$input, $expected]) {
    $actual = $solution->plusOne($input);
    $ok = ($actual === $expected);

    if ($ok) {
        $passed++;
    }

    echo sprintf(
        "[%s] Case %d | input=%s | expected=%s | actual=%s\n",
        $ok ? 'PASS' : 'FAIL',
        $index + 1,
        json_encode($input),
        json_encode($expected),
        json_encode($actual)
    );
}

echo "\nSummary: {$passed}/{$total} passed.\n";
