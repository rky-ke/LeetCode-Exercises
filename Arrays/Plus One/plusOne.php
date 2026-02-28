class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $count = count($digits);
        // Start from the last digit
        for ($i = $count - 1; $i >= 0; $i--) {
            // If the digit is less than 9, just add one and return
            if ($digits[$i] < 9) {
                $digits[$i]++;
                return $digits;
            }
            // If the digit is 9, set it to 0 and continue to the next digit
            $digits[$i] = 0;
        }
        // If all digits were 9, we need to add a new digit at the beginning
        array_unshift($digits, 1);
        return $digits;
    }
}