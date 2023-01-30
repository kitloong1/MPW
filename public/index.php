<?php


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meeting Protocol Worldwide</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div id="container">
    <h1>Meeting Protocol Worldwide</h1>

    <form>
        <div id="serviceContainer">
            <label for="services">Choose a service: </label>
            <select name="services" id="services">
                <option value="f2f">Face-to-Face Services</option>
                <option value="virtual">Virtual Services</option>
                <option value="onDemand">On-demand Services</option>
                <option value="patient">Patient Services</option>
            </select>
        </div>
        <div id="result">
        </div>
    </form>
</div>

<script type="text/javascript" src="../assets/scripts.js"></script>
</body>
</html>