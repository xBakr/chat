<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بعثرة الكلمات</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
            background-color: #f0f0f0;
        }
        .container {
            width: 50%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            color: #333;
        }
        textarea, input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .result {
            background-color: #e7f3fe;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>بعثرة الكلمات عشوائيًا</h1>
    <form method="POST" action="">
        <textarea name="text" rows="5" placeholder="أدخل النص هنا..." required></textarea>
        <input type="submit" name="shuffle" value="بعثرة الكلمات">
    </form>

    <?php
    if (isset($_POST['shuffle'])) {
        // الحصول على النص المُدخل
        $text = $_POST['text'];
        
        // تحويل النص إلى مصفوفة كلمات
        $words = explode(" ", $text);
        
        // بعثرة الكلمات
        shuffle($words);
        
        // تحويل المصفوفة مرة أخرى إلى نص
        $shuffled_text = implode(" ", $words);
        
        // عرض النتيجة
        echo "<div class='result'><strong>النص بعد البعثرة:</strong><br>$shuffled_text</div>";
    }
    ?>
</div>

</body>
</html>
