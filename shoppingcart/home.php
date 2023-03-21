 <?php
// Get the 4 most recently added products
$stmt = $pdo->prepare('SELECT * FROM products');
$stmt->execute();
$recently_added_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body style="background:;">
<?=template_header('Home')?>
<div style="margin-top:90px;margin-left:px;">
<div class="w3-container easynav" style="float:left;position:fixed;color:orange;">
<ul style="list-style-type:none;">
<li style="border-bottom:1px solid black;"><a style="text-decoration:none;font-size:19px;" href="#">Laptops</a></li>
<li style="border-bottom:1px solid black;"><a style="text-decoration:none;font-size:19px;" href="#">Desktops</a></li>
<li style="border-bottom:1px solid black;"><a style="text-decoration:none;font-size:19px;" href="#">Smartphones</a></li>
<li style="border-bottom:1px solid black;"><a style="text-decoration:none;font-size:19px;" href="#">Phone Accessories</a></li>
<li style="border-bottom:1px solid black;"><a style="text-decoration:none;font-size:19px;" href="#">Smart Tv</a></li>
<li style="border-bottom:1px solid black;"><a style="text-decoration:none;font-size:19px;" href="#">Music</a></li>
<li style="border-bottom:1px solid black;"><a style="text-decoration:none;font-size:19px;" href="#">Storage devices</a></li>
</ul>
</div>
<div class="w3-container" style="margin-left:130px;">
<div class="recentlyadded content-wrapper">
    <div class="products w3-card-4 w3-padding w3-margin-top">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price" style="color:red;">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<div class="recentlyadded content-wrapper">
    <div class="products w3-card-4 w3-padding w3-margin-top">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price" style="color:red;">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="recentlyadded content-wrapper">
    <div class="products w3-card-4 w3-padding w3-margin-top">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price" style="color:red;">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="recentlyadded content-wrapper">
    <div class="products w3-card-4 w3-padding w3-margin-top">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price" style="color:red;">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="recentlyadded content-wrapper">
    <div class="products w3-card-4 w3-padding w3-margin-top">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price" style="color:red;">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="recentlyadded content-wrapper">
    <div class="products w3-card-4 w3-padding w3-margin-top">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price" style="color:red;">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="recentlyadded content-wrapper">
    <div class="products w3-card-4 w3-padding w3-margin-top">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price" style="color:red;">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
<div class="recentlyadded content-wrapper">
    <div class="products w3-card-4 w3-padding w3-margin-top">
        <?php foreach ($recently_added_products as $product): ?>
        <a href="index.php?page=product&id=<?=$product['id']?>" class="product">
            <img src="imgs/<?=$product['img']?>" width="200" height="200" alt="<?=$product['name']?>">
            <span class="name"><?=$product['name']?></span>
            <span class="price" style="color:red;">
                &dollar;<?=$product['price']?>
                <?php if ($product['rrp'] > 0): ?>
                <span class="rrp">&dollar;<?=$product['rrp']?></span>
                <?php endif; ?>
            </span>
        </a>
        <?php endforeach; ?>
    </div>
</div>
</div>
</div>
</body>
</html>

<?=template_footer()?>