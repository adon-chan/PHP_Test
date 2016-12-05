<?php
/**
 * Created by PhpStorm.
 * User: dong04.chen
 * Date: 2016/11/22
 * Time: 15:03
 */
include_once "db.php";



////搜索QQ
//if (!empty($_POST['submit'])&&$_POST['select']=='qq'){
//    $num=$_POST['num'];
//    @$sql = "select `group`.qqnum,`group`.nick,`group`.age,`group`.gender,`group`.auth,`group`.qunnum,qunlist.title FROM `group`,qunlist where `group`.qunnum=qunlist.qunnum AND `group`.qqnum='$num'";
//    @$query = mysqli_query($conn, $sql);
//    @$rows = mysqli_fetch_array($query);
//    @$keys = array_keys($rows);
//    if ($keys) {
//        echo '<table border="1">';
//        echo <<<STR
//        <tr>
//            <td>$keys[1]</td>
//            <td>$keys[3]</td>
//            <td>$keys[5]</td>
//            <td>$keys[7]</td>
//            <td>$keys[9]</td>
//            <td>$keys[11]</td>
//            <td>$keys[13]</td>
//        </tr>
//STR;
//        while ($rows = mysqli_fetch_assoc($query)){
//            if ($rows['gender'] = 0) {
//                $sex = "女";
//            } else {
//                $sex = '男';
//            }
//            echo <<<STR
//    <tr>
//        <td>{$rows['qqnum']}</td>
//        <td>{$rows['nick']}</td>
//        <td>{$rows['age']}</td>
//        <td>{$sex}</td>
//        <td>{$rows['auth']}</td>
//        <td>{$rows['qunnum']}</td>
//        <td>{$rows['title']}</td>
//    </tr>
//
//STR;
//        }
//        echo '</table>';
//        @mysqli_close($conn);
//    }else{
//            echo "<h1>无法找到QQ</h1>";
//        }
//}
//
////搜索QQ群
//if (!empty($_POST['submit']) && $_POST['select']=='qun'){
//    $num=$_POST['num'];
//    @$sql="select * from qunlist where qunnum='$num'";
//    @$query=mysqli_query($conn,$sql);
//    @$keys=mysqli_num_rows($query);
//    if($keys) {
//        echo "<table border='1'>
//    <tr>
//        <th>qunnum</th>
//        <th>mastqq</th>
//        <th>createdate</th>
//        <th>title</th>
//        <th>class</th>
//        <th>quntext</th>
//    </tr>";
//        while ($rows = mysqli_fetch_assoc($query)) {
//            echo "<tr>";
//            echo "<td>" . $rows['qunnum'] . "</td>";
//            echo "<td>" . $rows['mastqq'] . "</td>";
//            echo "<td>" . $rows['createdate'] . "</td>";
//            echo "<td>" . $rows['title'] . "</td>";
//            echo "<td>" . $rows['class'] . "</td>";
//            echo "<td>" . $rows['quntext'] . "</td>";
//            echo "</tr>";
//
//            $results[]=$rows;//查询数据存放到数组
//        }
//        echo "</table>";
//        @mysqli_close($conn);
//        //将数组转换成json格式
//        echo json_encode($results);
//
//    }else{
//        echo "<h1>无法找到QQ群</h1>";
//    }
//
//}



//jquery提交 查询号码

if ($num=$_POST['num']&&$_POST['select']=='qq'){
    $num=$_POST['num'];
    @$sql = "select `group`.qqnum,`group`.nick,`group`.age,`group`.gender,`group`.auth,`group`.qunnum,qunlist.title FROM `group`,qunlist where `group`.qunnum=qunlist.qunnum AND `group`.qqnum='$num'";
    @$query = mysqli_query($conn, $sql);
        while ($rows = mysqli_fetch_assoc($query)){
            $results[]=$rows;
        }
        echo json_encode($results);
        @mysqli_close($conn);
    }

//jquery 查询QQ群

if ($num=$_POST['num']&& $_POST['select']=='qun'){
    $num=$_POST['num'];
    @$sql="select * from qunlist where qunnum='$num'";
    @$query=mysqli_query($conn,$sql);
    while ($rows = mysqli_fetch_assoc($query)) {
           $results[]=$rows;//查询数据存放到数组
        }
        @mysqli_close($conn);
        //将数组转换成json格式
        echo json_encode($results);

    }

