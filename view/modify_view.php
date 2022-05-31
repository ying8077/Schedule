<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('../src/link_schedule.php'); ?>
    <link href="../src/schedule.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- <h1 class="title_id">工讀生排班系統</h1> -->
    <div id="div1" class="w">
        <div class="btn-group">
            <a href="../view/read_view.php" class="btn btn-secondary">查詢</a>
            <a href="../view/schedule_view.php" class="btn btn-secondary">新增</a>
            <a href="../view/modify_view.php" class="btn btn-secondary active" aria-current="page">修改</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th colspan="6">
                        <span id="year"></span>
                        <span id="month" name="monthnum"></span>
                        <span id="user_name"></span>
                    </th>
                </tr>
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
                <tr class="even">
                    <th>09:00-10:00</th>
                    <td><input type="checkbox" style="zoom: 1.3" id="1-9" class="1" name="chk_9[]" value="1"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="2-9" class="2" name="chk_9[]" value="1"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="3-9" class="3" name="chk_9[]" value="1"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="4-9" class="4" name="chk_9[]" value="1"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="5-9" class="5" name="chk_9[]" value="1"></td>
                </tr>
                <tr>
                    <th>10:00-11:00</th>
                    <td><input type="checkbox" style="zoom: 1.3" id="1-10" class="1" name="chk_10[]" value="2"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="2-10" class="2" name="chk_10[]" value="2"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="3-10" class="3" name="chk_10[]" value="2"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="4-10" class="4" name="chk_10[]" value="2"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="5-10" class="5" name="chk_10[]" value="2"></td>
                </tr>
                <tr class="even">
                    <th>11:00-12:00</th>
                    <td><input type="checkbox" style="zoom: 1.3" id="1-11" class="1" name="chk_11[]" value="3"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="2-11" class="2" name="chk_11[]" value="3"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="3-11" class="3" name="chk_11[]" value="3"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="4-11" class="4" name="chk_11[]" value="3"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="5-11" class="5" name="chk_11[]" value="3"></td>
                </tr>
                <tr>
                    <th>13:00-14:00</th>
                    <td><input type="checkbox" style="zoom: 1.3" id="1-13" class="1" name="chk_13[]" value="4"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="2-13" class="2" name="chk_13[]" value="4"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="3-13" class="3" name="chk_13[]" value="4"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="4-13" class="4" name="chk_13[]" value="4"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="5-13" class="5" name="chk_13[]" value="4"></td>
                </tr>
                <tr class="even">
                    <th>14:00-15:00</th>
                    <td><input type="checkbox" style="zoom: 1.3" id="1-14" class="1" name="chk_14[]" value="5"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="2-14" class="2" name="chk_14[]" value="5"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="3-14" class="3" name="chk_14[]" value="5"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="4-14" class="4" name="chk_14[]" value="5"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="5-14" class="5" name="chk_14[]" value="5"></td>
                </tr>
                <tr>
                    <th>15:00-16:00</th>
                    <td><input type="checkbox" style="zoom: 1.3" id="1-15" class="1" name="chk_15[]" value="6"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="2-15" class="2" name="chk_15[]" value="6"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="3-15" class="3" name="chk_15[]" value="6"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="4-15" class="4" name="chk_15[]" value="6"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="5-15" class="5" name="chk_15[]" value="6"></td>
                </tr>
                <tr class="even">
                    <th>16:00-17:00</th>
                    <td><input type="checkbox" style="zoom: 1.3" id="1-16" class="1" name="chk_16[]" value="7"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="2-16" class="2" name="chk_16[]" value="7"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="3-16" class="3" name="chk_16[]" value="7"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="4-16" class="4" name="chk_16[]" value="7"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="5-16" class="5" name="chk_16[]" value="7"></td>
                </tr>
                <tr>
                    <th>17:00-18:00</th>
                    <td><input type="checkbox" style="zoom: 1.3" id="1-17" class="1" name="chk_17[]" value="8"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="2-17" class="2" name="chk_17[]" value="8"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="3-17" class="3" name="chk_17[]" value="8"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="4-17" class="4" name="chk_17[]" value="8"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="5-17" class="5" name="chk_17[]" value="8"></td>
                </tr>
                <tr class="even">
                    <th>全選</th>
                    <td><input type="checkbox" style="zoom: 1.3" id="1-all" name="chk_all[]"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="2-all" name="chk_all[]"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="3-all" name="chk_all[]"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="4-all" name="chk_all[]"></td>
                    <td><input type="checkbox" style="zoom: 1.3" id="5-all" name="chk_all[]"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end w">
        <button id="btn_save" class="btn btn-success" type="button">送出</button>
    </div>

</body>

</html>
<script>
    $("#1-all").click(function() {
        if ($("#1-all").prop("checked")) {
            $("input[class='1']").prop("checked", true);
        } else {
            $("input[class='1']").prop("checked", false);
        }
    })
    $("#2-all").click(function() {
        if ($("#2-all").prop("checked")) {
            $("input[class='2']").prop("checked", true);
        } else {
            $("input[class='2']").prop("checked", false);
        }
    })
    $("#3-all").click(function() {
        if ($("#3-all").prop("checked")) {
            $("input[class='3']").prop("checked", true);
        } else {
            $("input[class='3']").prop("checked", false);
        }
    })
    $("#4-all").click(function() {
        if ($("#4-all").prop("checked")) {
            $("input[class='4']").prop("checked", true);
        } else {
            $("input[class='4']").prop("checked", false);
        }
    })
    $("#5-all").click(function() {
        if ($("#5-all").prop("checked")) {
            $("input[class='5']").prop("checked", true);
        } else {
            $("input[class='5']").prop("checked", false);
        }
    })

    var $today = new Date();
    var $year = $today.getFullYear() - 1911;
    var $month = $today.getMonth() + 1;
    let total = [];

    function check(){
        let mon = [];
        var monday = document.getElementsByClassName('1');
        for (var i = 0; i < monday.length; i++) {
            if (monday[i].checked) {
                mon.push(monday[i].value);
            } else {
                mon.push('X');
            }
        }
        let tue = [];
        var tuesday = document.getElementsByClassName('2');
        for (var i = 0; i < tuesday.length; i++) {
            if (tuesday[i].checked) {
                tue.push(tuesday[i].value);
            } else {
                tue.push('X');
            }
        }
        let wed = [];
        var wednesday = document.getElementsByClassName('3');
        for (var i = 0; i < wednesday.length; i++) {
            if (wednesday[i].checked) {
                wed.push(wednesday[i].value);
            } else {
                wed.push('X');
            }
        }
        let thu = [];
        var thursday = document.getElementsByClassName('4');
        for (var i = 0; i < thursday.length; i++) {
            if (thursday[i].checked) {
                thu.push(thursday[i].value);
            } else {
                thu.push('X');
            }
        }
        let fri = [];
        var friday = document.getElementsByClassName('5');
        for (var i = 0; i < friday.length; i++) {
            if (friday[i].checked) {
                fri.push(friday[i].value);
            } else {
                fri.push('X');
            }
        }
        total.push(mon, tue, wed, thu, fri);
    }

    // 修改
    $('#btn_save').click(function() {
        check();
        var data = {
            year: localStorage["year"],
            month: localStorage["month"],
            name: localStorage["name"],
            schedule: total,
            OpType: 'edit_data_controller',
        };
        let num = 0;
        for (var i = 0; i < total.length; ++i) {
            for (var j = 0; j < total[0].length; ++j) {
                if (total[i][j] != "X") {
                    num++;
                }
            }
        }
        if (num != 0) {
            edit_single_data(data);
            total = [];
            $("input[name*='chk']").prop("checked", false);
        } else {
            alert('請勾選');
        }
    });

    async function edit_single_data(data) {
        await $.ajax({
            url: '../controller/schedule_controller.php',
            data: data,
            dataType: "text",
            type: 'POST'
        }).done(function(res) {
            console.log(res);
            var obj = JSON.parse(res);
            // console.log(obj)
            window.alert('已送出');
            $('#success_modal').modal('show', $('#suc_msg').html(obj.message));
        }).fail(function(error) {
            console.log(error);
        });
    };

    //配合選的名字呈現的單一工讀生table(我這邊有傳名字+row_id，你要想辦法呈現的時候只有名字而已，但要有Row_id這個variable)
    // function sel_single_work_data_controller() {
    //     $.ajax({
    //         url: '../controller/schedule_controller.php',
    //         data: {
    //             year: localStorage["year"],
    //             month: localStorage["month"],
    //             name: localStorage["name"],
    //             OpType: 'edit_data_controller',
    //         },
    //         dataType: "text",
    //         type: 'POST'
    //     }).done(function(res) {
    //         console.log(res);
    //         var obj = JSON.parse(res);
    //         console.log(obj);
    //         //塞資料塞在這
    //         // showTable(obj);
    //     })
    // };
    // sel_single_work_data_controller();
</script>
