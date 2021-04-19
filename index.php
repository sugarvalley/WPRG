<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>2️⃣2️⃣2️⃣0️⃣2️⃣</title>
</head>
<body>
<header>
    <h1>hello, welcome on my page</h1>
</header>
<section>
    <article>
        <h2>about me</h2>
        <h3>My name is Julia 👽</h3>
        <p>I'm a student at PJAIT (Computer Science)</p>
        <p>My hobbies:</p>
        <ul>
            <?php
            $read = file_get_contents('hobbies');
            $read = explode("\n", $read);
            foreach ($read as $row) {
                echo $row . '</br>';
            }
            ?>
        </ul>
        <p>
            <?php
            $date = '1999-12-11';
            $dateParts = explode('-', $date);
            $fullYears = date('Y') - $dateParts[0];
            $birthday = mktime(0,0,0, $dateParts[1], $dateParts[2]);
            $now = time();
            $diff = $birthday - $now;
            if ($diff >= 0) {
                $fullYears--;
            }
            echo 'I am ' . $fullYears . ' years old';
            ?>
        </p>
    </article>
</section>
<footer>
    &copy; by s22202 <?php echo date('Y'); ?>
</footer>
</body>
</html>

