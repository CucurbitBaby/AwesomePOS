 <?php
 	header("Access-Control-Allow-Origin:*");
    // 从文件中读取数据到PHP变量  
    $json_string = file_get_contents('typeGoods.json');  
      
    // 用参数true把JSON字符串强制转成PHP数组  
    $data = json_decode($json_string, true);  
      
    echo json_encode($data)
  ?>