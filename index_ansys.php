<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>秒表计时器</title>
    <style>
        .time{
            width: 600px;
            height: 300px;
            border: 1px dashed #333;
            position: absolute;
            left: 50%;
            top: 80%;
            text-align: center;
            transform: translate(-50%, -50%);
            line-height: 100px;
        }
        #display {
            font-size: 36px;
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        button {
            width: 80px;
            height: 40px;
            margin: 5px;
            font-size: 16px;
            background-color: #3498db;
            border: none;
            color: #fff;
            cursor: pointer;
        }
        .container{
            width: 500px;
            height: 300px;
            border: 1px dashed #333;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            padding-top: 50px;
        }
        .name-display {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 100px;
        }
        #start-stop-btn {
            width: 150px;
            height: 50px;
            background-color: #3498db;
            border: none;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="name-display" id="nameDisplay">开始</div>
        <button id="start-stop-btn">开始</button>
    </div>
    <div class="time">
        <div id="display">00:00:00</div>
        <button id="start">开始</button>
        <button id="pause">暂停</button>
        <button id="reset">重置</button>
    </div>

    <script>
        var timer;
        var isRunning = false;
        var seconds = 0, minutes = 0, hours = 0;

        function startTimer() {
            isRunning = true;
             // 每秒更新一次时间
            timer = setInterval(updateTime, 1000);
        }
        
        // 暂停计时器
        function pauseTimer() {
            isRunning = false;
            clearInterval(timer);
        }
        
        // 重置时间
        function resetTimer() {
            isRunning = false;
            clearInterval(timer);
            seconds = 0;
            minutes = 0;
            hours = 0;
            updateDisplay();
        }
        
        // 更新时间
        function updateTime() {
            seconds++;
            if (seconds === 60) {
                seconds = 0;
                minutes++;
                if (minutes === 60) {
                    minutes = 0;
                    hours++;
                }
            }
            updateDisplay();
        }

        // 更新显示时间
        function updateDisplay() {
            var display = document.getElementById('display');
            // 设置显示内容
            display.textContent = pad(hours) + ':' + pad(minutes) + ':' + pad(seconds);
        }

        function pad(val) {
            // 如果val大于9，返回val，否则返回'0' + val
            return val > 9 ? val : '0' + val;
        }

        document.getElementById('start').addEventListener('click', function() {
            if (!isRunning) {
                startTimer();
            }
        });

        document.getElementById('pause').addEventListener('click', function() {
            if (isRunning) {
                pauseTimer();
            }
        });

        document.getElementById('reset').addEventListener('click', function() {
            resetTimer();
        });


        var students = ["张三", "李四", "王五"];
        var nameDisplay = document.getElementById("nameDisplay");
        var startStopBtn = document.getElementById("start-stop-btn");
        var flag = false;
        var timer;

        startStopBtn.onclick = function() {
            if (!flag) {
                // 将标志变量置为true，表示进入点名状态
                flag = true;
                startStopBtn.innerHTML = "停止点名";
                // 启动定时器，每100ms随机选取一个名字显示
                timer = setInterval(pickRandomName, 20);
            } else {
                // 将标志变量置为false，表示停止点名
                flag = false;
                startStopBtn.innerHTML = "开始点名";
                // 清除定时器，停止随机选取名字
                clearInterval(timer);
            }
        };
        
        // 随机选取名字的函数
        function pickRandomName() {
            var randomIndex = Math.floor(Math.random() * students.length);
            var randomName = students[randomIndex];
            nameDisplay.textContent = randomName;
        }
    </script>
</body>
</html>