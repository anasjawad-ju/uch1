<?php include 'header.php'; ?>
<div class="container mt-5">
    <h2>اتصل بنا</h2>
    <form action="submit_contact.php" method="POST">
        <div class="form-group">
            <label for="name">الاسم:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">الرسالة:</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">إرسال</button>
    </form>
</div>
<?php include 'footer.php'; ?>
