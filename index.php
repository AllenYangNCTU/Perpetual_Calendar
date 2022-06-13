<html>

<head>
    <link href="calendar.css" type="text/css" rel="stylesheet" />
</head>
<style>
* {
    box-sizing: border-box;
    padding: 0;
    margin: 0;
}

.title {
    margin-top: 20px;
}

p {
    font-weight: bold;
    font-size: 50px;
    color: #6667ab;
    text-align: center;
}

.calendar {
    /* margin-left: 10%;
    margin-right: 10%; */
    /* background-color: red; */
    margin-top: 50px;
}
</style>

<body>
    <div class="title">
        <p>萬年曆</p>
    </div>
    <div class="calendar">
        <?php
    include 'calendar.php';

    $calendar = new Calendar();

    echo $calendar->show();
    ?>
    </div>

</body>

</html>