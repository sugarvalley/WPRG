<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>2️⃣ 2️⃣ 2️⃣ 0️⃣ 2️⃣</title>
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
            foreach ($hobbies as $hobby): ?>
                <li> <?= $hobby; ?> </li>
            <?php endforeach; ?>
        </ul>
        <p>
            I am <?= $age; ?> years old
        </p>
    </article>
</section>
<footer>
    &copy; by s22202 <?= $currentYear ?>
</footer>
</body>
</html>


