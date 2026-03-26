<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard</title>

<style>
body {
    font-family: Arial;
    background: #f3f4f8;
    margin: 0;
}

.header {
    background: #fff;
    padding: 15px;
    font-size: 20px;
    font-weight: bold;
    color: #6c63ff;
    text-align: center;
}

.card {
    background: #fff;
    margin: 10px;
    padding: 15px;
    border-radius: 12px;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
}

.icons {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding: 10px;
}

.icon {
    background: #fff;
    padding: 10px;
    border-radius: 10px;
    width: 50px;
    text-align: center;
    box-shadow: 0 0 3px rgba(0,0,0,0.1);
}

input, select {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border-radius: 8px;
    border: 1px solid #ddd;
}

button {
    width: 100%;
    padding: 12px;
    background: #6c63ff;
    color: #fff;
    border: none;
    border-radius: 8px;
    margin-top: 10px;
}
</style>

</head>

<body>

<div class="header">
ssmbyas Panel
</div>

<div class="card">
<h3>Demo Dashboard</h3>
<p>Welcome to your panel</p>
</div>

<div class="card">
<h3>New Order</h3>

<select>
<option>TikTok Followers</option>
</select>

<input type="text" placeholder="Enter Link">
<input type="number" placeholder="Quantity">

<button>Submit Order</button>

</div>

</body>
</html>
