<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../src/link_schedule.php'); ?>
    <script src="../src/moment.js"></script>
    <script src="../src/jquery.jqprint-0.3.js"></script>
    <link href="../src/schedule.css" rel="stylesheet" type="text/css">
</head>

<body>


    <!-- <h1 class="title_id">工讀生排班系統</h1> -->
    <div class="w">
        <div class="btn-group">
            <a href="../view/read_view.php" class="btn btn-secondary active" aria-current="page">查詢</a>
            <a href="../view/schedule_view.php" class="btn btn-secondary">新增</a>
            <a href="../view/modify_view.php" class="btn btn-secondary" onclick="set()">修改</a>
            <button type="button" class="btn btn-secondary" id="btn_delete">刪除</button>
        </div>
        <button type="button" onclick="print()" value="列印" id="print"><img src="../src/print.png" height="35" width="30"></button>
        <div id="print-area">
            <table class="table table-striped">
                <thead id="hid_thead">
                    <tr>
                        <th colspan="6">
                            <span id="year_span"><select id="year_select"></select></span>
                            <span id="month_span"><select id="month_select"></select></span>
                            <select id="user_name"></select>
                        </th>
                    </tr>
                    <tr class="date">
                        <th>日期</th>
                        <th><label id="mon"></label></th>
                        <th><label id="tue"></label></th>
                        <th><label id="wed"></label></th>
                        <th><label id="thu"></label></th>
                        <th><label id="fri"></label></th>
                    </tr>
                </thead>
                <thead id="hid_thead_week">
                    <tr>
                        <th>時間</th>
                        <th>星期一</th>
                        <th>星期二</th>
                        <th>星期三</th>
                        <th>星期四</th>
                        <th>星期五</th>
                    </tr>
                </thead>
                <tbody id="tbd">
                    <tr id="tbd_1" class="even">
                        <th>09:00-10:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="tbd_2">
                        <th>10:00-11:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="tbd_3" class="even">
                        <th>11:00-12:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="tbd_4">
                        <th>13:00-14:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="tbd_5" class="even">
                        <th>14:00-15:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="tbd_6">
                        <th>15:00-16:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="tbd_7" class="even">
                        <th>16:00-17:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr id="tbd_8">
                        <th>17:00-18:00</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
<script>
    var $dt = new Date();
    console.log($dt);
    var $year = $dt.getFullYear() - 1911;
    var $month = $dt.getMonth() + 1;
    var $date = $dt.getDate().toString();
    var $day = $dt.getDay();
    console.log($day);
    // var $year = 111;
    // var $month = 5;
    // var $date = 12;
    // var $day = 4;

    function addOption() {
        if ($month != 12) {
            document.getElementById("year_span").innerHTML = $year + "年";
            var objM = document.getElementById("month_select");
            objM.options.add(new Option($month + "月", $month));
            objM.options.add(new Option(($month + 1) + "月", $month + 1));
            return;
        }
        var objY = document.getElementById("year_select");
        objY.options.add(new Option($year + "年", 0));
        objY.options.add(new Option(($year + 1) + "年", 1));
        document.getElementById("month_span").innerHTML = 12 + "月";
    }

    function addName(str) {
        var objN = document.getElementById("user_name");
        for (let i = 0; i < str.length; i++) {
            objN.options.add(new Option(str[i].Stu_name));
        }
    }

    $(document).ready(function() {
        $('#hid_thead_week').hide();
        addOption();

        if ($day == 1) {
            document.getElementById("mon").innerHTML = $month + "/" + $date + "(一)";
            var tuesday = +new Date() + 86400000;
            document.getElementById("tue").innerHTML = moment(tuesday).format('MM/DD') + "(二)";
            var wednesday = +new Date() + 86400000 * 2;
            document.getElementById("wed").innerHTML = moment(wednesday).format('MM/DD') + "(三)";
            var thursday = +new Date() + 86400000 * 3;
            document.getElementById("thu").innerHTML = moment(thursday).format('MM/DD') + "(四)";
            var friday = +new Date() + 86400000 * 4;
            document.getElementById("fri").innerHTML = moment(friday).format('MM/DD') + "(五)";
        } else if ($day == 2) {
            var monday = +new Date() - 24 * 60 * 60 * 1000;
            document.getElementById("mon").innerHTML = moment(monday).format('MM/DD') + "(一)";
            document.getElementById("tue").innerHTML = $month + "/" + $date + "(二)";
            var wednesday = +new Date() + 24 * 60 * 60 * 1000;
            document.getElementById("wed").innerHTML = moment(wednesday).format('MM/DD') + "(三)";
            var thursday = +new Date() + 24 * 60 * 60 * 1000 * 2;
            document.getElementById("thu").innerHTML = moment(thursday).format('MM/DD') + "(四)";
            var friday = +new Date() + 24 * 60 * 60 * 1000 * 3;
            document.getElementById("fri").innerHTML = moment(friday).format('MM/DD') + "(五)";
        } else if ($day == 3) {
            var monday = +new Date() - 86400000 * 2;
            document.getElementById("mon").innerHTML = moment(monday).format('MM/DD') + "(一)";
            var tuesday = +new Date() - 86400000;
            document.getElementById("tue").innerHTML = moment(tuesday).format('MM/DD') + "(二)";
            document.getElementById("wed").innerHTML = $month + "/" + $date + "(三)";
            var thursday = +new Date() + 86400000;
            document.getElementById("thu").innerHTML = moment(thursday).format('MM/DD') + "(四)";
            var friday = +new Date() + 86400000 * 2;
            document.getElementById("fri").innerHTML = moment(friday).format('MM/DD') + "(五)";
        } else if ($day == 4) {
            var monday = +new Date() - 24 * 60 * 60 * 1000 * 3;
            document.getElementById("mon").innerHTML = moment(monday).format('MM/DD') + "(一)";
            var tuesday = +new Date() - 24 * 60 * 60 * 1000 * 2;
            document.getElementById("tue").innerHTML = moment(tuesday).format('MM/DD') + "(二)";
            var wednesday = +new Date() - 24 * 60 * 60 * 1000;
            document.getElementById("wed").innerHTML = moment(wednesday).format('MM/DD') + "(三)";
            document.getElementById("thu").innerHTML = $month + "/" + $date + "(四)";
            var friday = +new Date() + 24 * 60 * 60 * 1000;
            document.getElementById("fri").innerHTML = moment(friday).format('MM/DD') + "(五)";
        } else if ($day == 5) {
            var monday = +new Date() - 24 * 60 * 60 * 1000 * 4;
            document.getElementById("mon").innerHTML = moment(monday).format('MM/DD') + "(一)";
            var tuesday = +new Date() - 24 * 60 * 60 * 1000 * 3;
            document.getElementById("tue").innerHTML = moment(tuesday).format('MM/DD') + "(二)";
            var wednesday = +new Date() - 24 * 60 * 60 * 1000 * 2;
            document.getElementById("wed").innerHTML = moment(wednesday).format('MM/DD') + "(三)";
            var thursday = +new Date() - 24 * 60 * 60 * 1000;
            document.getElementById("thu").innerHTML = moment(thursday).format('MM/DD') + "(四)";
            document.getElementById("fri").innerHTML = $month + "/" + $date + "(五)";
        } else if ($day == 0) {
            var monday = +new Date() - 24 * 60 * 60 * 1000 * 6;
            document.getElementById("mon").innerHTML = moment(monday).format('MM/DD') + "(一)";
            var tuesday = +new Date() - 24 * 60 * 60 * 1000 * 5;
            document.getElementById("tue").innerHTML = moment(tuesday).format('MM/DD') + "(二)";
            var wednesday = +new Date() - 24 * 60 * 60 * 1000 * 4;
            document.getElementById("wed").innerHTML = moment(wednesday).format('MM/DD') + "(三)";
            var thursday = +new Date() - 24 * 60 * 60 * 1000 *3;
            document.getElementById("thu").innerHTML = moment(thursday).format('MM/DD') + "(四)";
            var friday = +new Date() - 24 * 60 * 60 * 1000 *2;
            document.getElementById("fri").innerHTML = moment(friday).format('MM/DD') + "(五)";
        }
    })
    $(document).ready(function() {
        sel_name();
        $('#year_select').change(function() {
            if ($('#year_select').val() == 0) {
                document.getElementById("month_span").innerHTML = 12 + "月";
            } else {
                document.getElementById("month_span").innerHTML = 1 + "月";
            }
            $("#user_name option").remove();
            sel_name();
        })
        $('#month_select').change(function() {
            $("#user_name option").remove();
            sel_name();
        })
    })

    function showTable(obj) {
        var tableId = document.getElementById("tbd");
        for (var j = 1; j < 9; j++) {
            for (var i = 0; i < 5; i++) {
                $("#tbd_" + j).find("td").eq(i).html(obj[i].Series[j]);
            }
        }
        // for (var i = 0; i < 5; i++) {
        //     for (var j = 0; j < 8; j++) {
        //         $("#tbd").find("td").eq(5 * j + i).html(obj[i].Series[j + 1]);
        //     }
        // }
    }

    function sel_work_data_controller() {
        $.ajax({
            url: '../controller/read_controller.php',
            data: {
                'OpType': 'sel_work_data_controller',
            },
            dataType: "text",
            type: 'POST'
        }).done(function(res) {
            // console.log(res);
            var obj = JSON.parse(res);
            console.log(obj);
            showTable(obj);
        })
    }
    sel_work_data_controller()

    async function sel_name() {
        if ($month != 12) {
            data = {
                year: $year,
                month: Number($('#month_select').val()),
                OpType: 'sel_name_controller'
            }
        } else {
            data = {
                year: $year + Number($('#year_select').val()),
                month: $month - $('#year_select').val() * 11,
                OpType: 'sel_name_controller'
            }
        }
        // console.log(data);
        await $.ajax({
            url: '../controller/schedule_controller.php',
            data: data,
            dataType: 'text',
            type: 'POST',
            // async: false,
        }).done(function(res) {
            // console.log(res);
            var str = JSON.parse(res);
            addName(str);

        }).fail(function(error) {
            console.log(error);
        })
    }

    $('#btn_delete').click(function() {
        if ($month != 12) {
            data = {
                year: $year,
                month: Number($('#month_select').val()),
                name: document.getElementById("user_name").value,
                OpType: 'delete_data_controller'
            }
        } else {
            data = {
                year: $year + Number($('#year_select').val()),
                month: $month - $('#year_select').val() * 11,
                name: document.getElementById("user_name").value,
                OpType: 'delete_data_controller'
            }
        }
        var r = confirm("確認刪除"+document.getElementById("user_name").value+"的該月資料?");
        if (r == true) {
            delete_single_data(data);
        }
    })

    async function delete_single_data(data) {
        await $.ajax({
            url: '../controller/schedule_controller.php',
            data: data,
            dataType: "text",
            type: 'POST'
        }).done(function(res) {
            console.log(res);
            var obj = JSON.parse(res);
            $('#success_modal').modal('show', $('#suc_msg').html(obj.message));
        }).fail(function(error) {
            console.log(error);
        });
    };

    // function sel_single_work_data_controller() {
    //     $.ajax({
    //         url: '../controller/read_controller.php',
    //         data: {
    //             'OpType': 'sel_single_work_data_controller',
    //         },
    //         dataType: "text",
    //         type: 'POST'
    //     }).done(function(res) {
    //         console.log(res);
    //         var obj = JSON.parse(res);
    //         console.log(obj);
    //         // showTable(obj);
    //     })
    // };
    // sel_single_work_data_controller();

    function print() {
        $('#hid_thead').hide();
        $('#hid_thead_week').show();
        $("#print-area").jqprint({
            debug: false,
            importCSS: true,
            printContainer: true,
            operaSupport: false
        });
        $('#hid_thead_week').hide();
        $('#hid_thead').show();
    }
    //傳給修改
    function set() {
        location.href = '../view/modify_view.php';
        if ($month != 12) {
            localStorage.year = $year;
            localStorage.month = Number($('#month_select').val());
        } else {
            localStorage.year = $year + Number($('#year_select').val());
            localStorage.month = $month - $('#year_select').val() * 11;
        }
        localStorage.name = document.getElementById("user_name").value;
    }
    
</script>
<style>
    #print {
        position: fixed;
        left: 95%;
    }

    /* tr.even {
        background-color: #D2E9FF;
    } */
</style>
