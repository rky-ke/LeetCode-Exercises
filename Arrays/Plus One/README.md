# Plus One

## 📝 Problem Description

You are given a **large integer** represented as an integer array `digits`, where each `digits[i]` is the **ith digit** of the integer.

- The digits are ordered from **most significant** to **least significant** (left to right).
- The large integer **does not contain leading zeros**.

Your task is to **increment the large integer by one** and return the resulting array of digits.

---

## 📥 Input

- An integer array `digits`
- Each element represents a single digit of a large integer.

---

## 📤 Output

- Return an array of digits representing the integer after adding one.

---

## 📌 Examples

### Example 1

**Input:** digits = `[1,2,3]`

**Output:** `[1,2,4]`

**Explanation:**

The array represents the integer `123`.  
Incrementing by one gives: 123 + 1 = `124`

So the result is: `[1,2,4]`


---

### Example 2

**Input:** digits = `[4,3,2,1]`

**Output:** `[4,3,2,2]`


**Explanation:**

The array represents the integer `4321`.
Incrementing by one gives: 4321 + 1 = `4322`

So the result is: `[4,3,2,2]`


---

### Example 3

**Input:** digits = `[9]`

**Output:** `[1,0]`


**Explanation:**

The array represents the integer `9`.
Incrementing by one gives 9 + 1 = `10`.
Thus, the result should be `[1,0]`.



---

## 🚧 Constraints

- `1 <= digits.length <= 100`
- `0 <= digits[i] <= 9`
- `digits` does **not** contain any leading zeros.

---

## 💡 Key Observations

- Addition starts from the **last digit** (rightmost).
- If a digit becomes `10`, it becomes `0` and carries `1` to the next digit.
- If all digits are `9`, the result will have an extra digit.
  - Example: `[9,9,9] → [1,0,0,0]`

---

## 🧠 Edge Cases to Consider

- Single digit `9`
- Multiple trailing `9`s (e.g., `[1,9,9]`)
- All digits are `9`
- Minimum length input (`length = 1`)
- Maximum length input (`length = 100`)

---

## ▶️ How to Run All Test Cases (PHP)

From the repository root, run:

```bash
php "Arrays/Plus One/test_plus_one.php"
```

This runs a set of normal and edge test cases and prints `PASS`/`FAIL` for each case plus a final summary.

---
