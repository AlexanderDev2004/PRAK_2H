<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article - Explore Teknologi</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <header>
        <h1>Explore Teknologi</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="article.php?id=1">The Future of AI</a></li>
                <li><a href="article.php?id=2">Quantum Computing</a></li>
                <li><a href="article.php?id=3">Blockchain Revolution</a></li>
            </ul>
        </nav>
    </header>

    <section class="article-content">
        <?php
        // Ambil ID artikel dari URL memakai GET
        $articleId = isset($_GET['id']) ? (int)$_GET['id'] : 0;

        // Data artikel yang dibutuhakan memakai array melalui id
        $articles = [
            1 => [
                "title" => "The Future of AI", 
                "content" => "AI is transforming industries by automating tasks, enabling smart decisions, and innovating processes. From healthcare to finance, AI has profound effects that change the way we work.",
                "link" => "https://builtin.com/artificial-intelligence/artificial-intelligence-future"
            ],
            2 => [
                "title" => "Quantum Computing", 
                "content" => "Quantum computing is a revolutionary field that uses quantum-mechanical phenomena to perform operations. It has the potential to solve complex problems faster than classical computers.",
                "link" => "https://www.ibm.com/topics/quantum-computing"
            ],
            3 => [
                "title" => "Blockchain Revolution", 
                "content" => "Blockchain technology is revolutionizing industries by providing secure, transparent, and decentralized transaction methods, with implications for finance, supply chains, and beyond.",
                "link" => "https://blockchain-revolution.com/"
            ],
        ];

        // Tampilkan artikel berdasarkan ID yang sudah diberikan
        if (isset($articles[$articleId])) {
            echo "<h2>" . $articles[$articleId]['title'] . "</h2>";
            echo "<p>" . $articles[$articleId]['content'] . "</p>";
            echo "<p>For more information, visit the source: <a href='" . $articles[$articleId]['link'] . "' target='_blank'>Read more</a></p>";
        } else {
            echo "<p>Article not found. Please choose a valid article.</p>";
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 Explore Teknologi. All rights reserved/AlexanderAgungRaya.</p>
    </footer>
</body>
</html>
