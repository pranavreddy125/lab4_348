<?php
$submitted = ($_SERVER['REQUEST_METHOD'] === 'POST');
$n = $submitted ? (int)($_POST['n'] ?? 0) : 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Practice 4 – Multiplication Table</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">
  <h1>Practice 4 – Multiplication Table</h1>

  <form method="post" action="practice4.php" style="margin-bottom:10px;">
    Enter a number: <input type="number" name="n" min="1" step="1" required>
    <button type="submit">Generate</button>
  </form>

  <?php if ($submitted): ?>
    <?php if ($n >= 1): ?>
      <h2>Table 1 to <?php echo $n; ?></h2>
      <table border="1" cellpadding="6" cellspacing="0" style="border-collapse:collapse; margin:10px auto; text-align:center;">
        <tr>
          <th>*</th>
          <?php for ($c = 1; $c <= $n; $c++): ?>
            <th><?php echo $c; ?></th>
          <?php endfor; ?>
        </tr>
        <?php for ($r = 1; $r <= $n; $r++): ?>
          <tr>
            <th><?php echo $r; ?></th>
            <?php for ($c = 1; $c <= $n; $c++): ?>
              <td><?php echo $r * $c; ?></td>
            <?php endfor; ?>
          </tr>
        <?php endfor; ?>
      </table>
    <?php else: ?>
      <p>Please enter a positive integer (≥ 1).</p>
    <?php endif; ?>
  <?php endif; ?>
</body>
</html>
