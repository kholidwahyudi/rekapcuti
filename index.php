<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cuti dan OverTime</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            width: 80%;
            max-width: 900px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
        .content {
            display: flex;
            justify-content: space-around;
            padding: 20px;
            flex-wrap: wrap;
        }
        .content .option {
            text-align: center;
            flex: 1 1 40%;
            margin: 10px;
            padding: 20px;
            background-color: #00aaff;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            box-sizing: border-box;
        }
        .content .option:hover {
            background-color: #0077aa;
        }
        .content .option img {
            width: 100px;
            height: 100px;
        }
        @media (max-width: 768px) {
            .content .option {
                flex: 1 1 100%;
            }
            .header {
                font-size: 20px;
            }
        }
        @media (max-width: 480px) {
            .content .option img {
                width: 80px;
                height: 80px;
            }
            .header {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            Form Cuti dan OverTime
        </div>
        <div class="content">
            <div class="option" onclick="location.href='https://forms.gle/rexKVBeahDDxKJMH6'">
                <img src="img/kalender.png" alt="Cuti">
                <div>Cuti</div>
            </div>
            <div class="option" onclick="location.href='https://docs.google.com/spreadsheets/d/1F_9NCBWeiSwZYxQ4uxQhgCJK8IK4GPHb3YSbz7SqaQE/edit?resourcekey=&gid=2067727568#gid=2067727568'">
                <img src="img/approve.png" alt="OverTime">
                <div>Approval Cuti</div>
            </div>
        </div>
    </div>
</body>
</html>
