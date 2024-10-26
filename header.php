<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="header-container">
       
        <div class="header-title">
            <h1>Blogging Platform</h1>
        </div>
        
        
        <nav class="nav-menu">
            <ul>
                <li><a href="index.php" class="<?php echo ($active == 'index') ? 'active' : ''; ?>">Home</a></li>
                <li><a href="#services">Services</a></li>
            <li><a href="#blog">Blog</a></li>
                <li><a href="cont.php" class="<?php echo ($active == 'contact') ? 'active' : ''; ?>">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>


<style>
    
header {
    background-color: #333;
    color: white;
    padding: 10px 20px;
    font-family: 'Roboto', sans-serif;
}

.header-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
}


.header-title h1 {
    font-size: 24px;
    margin: 0;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
}

.nav-menu ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.nav-menu ul li {
    margin-left: 20px;
}

.nav-menu ul li a {
    color: white;
    text-decoration: none;
    font-size: 16px;
}

.nav-menu ul li a.active {
    font-weight: bold;
    color: #ffcc00; }

.nav-menu ul li a:hover {
    color: #ffcc00; 
}

@media (max-width: 768px) {
    .header-container {
        flex-direction: column;
        align-items: flex-start;
    }

    .nav-menu ul {
        flex-direction: column;
        width: 100%;
    }

    .nav-menu ul li {
        margin: 10px 0;
    }
}

</style>
