<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بحث عن النتيجة</title>
    <link rel="stylesheet" href="style.css">
    <script>(s=>{s.dataset.zone='9630380',s.src='https://al5sm.com/tag.min.js'})([document.documentElement, document.body].filter(Boolean).pop().appendChild(document.createElement('script')))</script>
</head>
<body>
    <div class="card">
    <h2>اكتب رقم الجلوس لعرض النتيجة</h2>
    <form method="get" action="result.php" onsubmit="count()">
        <input type="text" name="seat" placeholder="رقم الجلوس او الاسم" required class="text">
    <div class="rad">
        <input type="radio" id="sci" name="sys" value="modern" checked>
        <label for="modern">نظام حديث</label>
        <input type="radio" id="math" name="sys" value="old">
        <label for="old">نظام قديم</label>
    </div>
        <button type="submit">عرض النتيجة</button>
    </form>
    <br>
    <p style="color: orange;"> هذا الموقع غير رسمي و جميع التوقعات تقريبية من الذكاء الإصطناعي</p>
    </div>
    <script>fetch("track.php?page=الرئيسية").then(res => res.text());</script>
    <script>
        function count(){
            fetch("track.php?page=عرض النتيجة").then(res => res.text());
        }
    </script>
</body>
</html>