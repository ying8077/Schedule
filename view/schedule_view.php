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
            <a href="../view/schedule_view.php" class="btn btn-secondary active" aria-current="page">新增</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th colspan="6">
                        <span id="year_span"><select id="year_select"></select></span>
                        <span id="month_span"><select id="month_select"></select></span>
                        姓名 <input type="text" id="user" name="user_name" size="15">
                        學號 <input type="text" id="user_id" name="user_id" size="15">
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
                <tr>
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
                <tr>
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
                <tr>
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
                <tr>
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
                <tr>
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
        <!--<button id="btn_select" class="btn btn-success  me-md-0.5" type="button">全選</button>-->
        <button id="btn_save" class="btn btn-success btn_lg" type="button">送出</button>
    </div>
</body>

</html>

<script>
    //全選
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
    //加年、月
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
    addOption();

    $(document).ready(function() {
        $('#year_select').change(function() {
                var a = $('#year_select').val();
                if (a == 0) {
                    document.getElementById("month_span").innerHTML = 12 + "月";
                } else {
                    document.getElementById("month_span").innerHTML = 1 + "月";
                }
            })
    })

    function check() {
        var str = $('#user_id').val();
        var str2 = $('#user').val();
        if (str.length != 9) {
            alert('學號不等於九碼');
            return false;
        } else if (str2 == "") {
            alert('請輸入姓名');
            return false;
        } else {
            return true;
        }
    }

    let total = [];
    function check_id() {
        if (check() == true) {
            let data = add_table_data();
            data['OpType'] = 'check_id_controller';
            $.ajax({
                url: '../controller/schedule_controller.php',
                data: data,
                dataType: 'text',
                type: 'POST',
            }).done(function(res) {
                console.log(res);
                var obj = JSON.parse(res);
                console.log(obj);
                if (obj.status == '200') {
                    let mon = [];
                    var monday = document.getElementsByClassName('1');
                    for (var i = 0; i < monday.length; i++) {
                        //if (tags[i].name.substr(0, 3) == "chk") {
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
                    var num = 0;
                    for (var i = 0; i < total.length; ++i) {
                        for (var j = 0; j < mon.length; ++j) {
                            if (total[i][j] != "X") {
                                num++;
                            }
                        }
                    }
                    if (num != 0) {
                        add_data(data);
                        total = [];
                        $("input[name*='chk']").prop("checked", false);
                        $("input[name*='user']").val("");
                    } else {
                        alert('請勾選');
                    }
                } else if (obj.status == '404') {
                    $('#err_modal').modal('show', $('#err_msg').html(obj.message));
                };
            }).fail(function(error) {
                console.log(error);
            });
        }
    }

    $('#btn_save').click(function() {
        check_id();
    })

    function add_table_data() {
        if ($month != 12) {
            data = {
                user: $('#user').val(),
                user_id: $('#user_id').val(),
                schedule: total,
                OpType: 'add_data_controller',
                year: $year,
                month: Number($('#month_select').val()),
            }
        } else {
            data = {
                user: $('#user').val(),
                user_id: $('#user_id').val(),
                schedule: total,
                OpType: 'add_data_controller',
                year: $year + Number($('#year_select').val()),
                month: $month - $('#year_select').val() * 11,
            }
        }
        return data;
    }
    //新增
    function add_data(data) {
        console.log('------')
        console.log(data)
        data['OpType'] = 'add_data_controller';
        $.ajax({
            url: '../controller/schedule_controller.php',
            data: data,
            dataType: 'text',
            type: 'POST',
        }).done(function(res) {
            console.log(res);
            var obj = JSON.parse(res);
            console.log(obj);
            if (obj.status == '200') {
                window.alert('已送出');
            };
        }).fail(function(error) {
            console.log(error);
        });
    };
</script>
